<?php

namespace Herkod\Core\Utils\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon;
use Auth;

class Model extends Model
{
    /*
    *
    *  Tarihleri formatlamak için kullanıyoruz.
    *
    */
    protected static $hDates = [];

    public static function boot()
    {
        parent::boot();

        // create a event to happen on updating
        static::updating(function ($table) {
            if (Auth::check()) {
                $table->updated_by = Auth::user()->name;
                $table->updated_by_id = Auth::user()->id;
            } else {
                $table->updated_by = 'herkod-core';
            }
        });

        // create a event to happen on saving
        static::creating(function ($table) {
            if (Auth::check()) {
                $table->created_by = Auth::user()->name;
                $table->updated_by = Auth::user()->name;
                $table->created_by_id = Auth::user()->id;
                $table->updated_by_id = Auth::user()->id;
            } else {
                $table->created_by = 'herkod-core';
                $table->updated_by = 'herkod-core';
            }
        });
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d.m.Y H:i:s');
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d.m.Y H:i:s');
    }

    /*
    *
    *  Aşağıdaki fonksiyonları Tarihleri formatlamak için kullanıyoruz.
    *
    */
    protected function mutateAttribute($key, $value)
    {
        if (in_array($key, static::$hDates)) {
            return $this->getDateMutate($value);
        }

        return $this->{'get'.studly_case($key).'Attribute'}($value);
    }

    public function hasGetMutator($key)
    {
        if (in_array($key, static::$hDates)) {
            return true;
        }

        return method_exists($this, 'get'.studly_case($key).'Attribute');
    }

    public static function cacheMutatedAttributes($class)
    {
        $mutatedAttributes = [];

        // Here we will extract all of the mutated attributes so that we can quickly
        // spin through them after we export models to their array form, which we
        // need to be fast. This'll let us know the attributes that can mutate.
        foreach (get_class_methods($class) as $method) {
            if (strpos($method, 'Attribute') !== false &&
                        preg_match('/^get(.+)Attribute$/', $method, $matches)) {
                if (static::$snakeAttributes) {
                    $matches[1] = snake_case($matches[1]);
                }

                $mutatedAttributes[] = lcfirst($matches[1]);
            }
        }

        foreach (static::$hDates as $hdate) {
            $mutatedAttributes[] = lcfirst($hdate);
        }

        static::$mutatorCache[$class] = $mutatedAttributes;
    }

    private function getDateMutate($value)
    {
        if ($value == '0000-00-00' || $value == null) {
            return '';
        } else {
            return Carbon\Carbon::createFromFormat('Y-m-d', $value)->format('d.m.Y');
        }
    }
    private function setDateMutate($key, $value)
    {
        if ($value) {
            $this->attributes[$key] = Carbon\Carbon::createFromFormat('d.m.Y', $value)->format('Y-m-d');
        } else {
            $this->attributes[$key] = '';
        }
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, static::$hDates)) {
            return $this->setDateMutate($key, $value);
        }

        // First we will check for the presence of a mutator for the set operation
        // which simply lets the developers tweak the attribute as it is set on
        // the model, such as "json_encoding" an listing of data for storage.
        if ($this->hasSetMutator($key)) {
            $method = 'set'.studly_case($key).'Attribute';

            return $this->{$method}($value);
        }

        // If an attribute is listed as a "date", we'll convert it from a DateTime
        // instance into a form proper for storage on the database tables using
        // the connection grammar's date format. We will auto set the values.
        elseif ($value && (in_array($key, $this->getDates()) || $this->isDateCastable($key))) {
            $value = $this->fromDateTime($value);
        }

        if ($this->isJsonCastable($key) && !is_null($value)) {
            $value = $this->asJson($value);
        }

        $this->attributes[$key] = $value;

        return $this;
    }
}
