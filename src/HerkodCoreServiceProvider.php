<?php

namespace Herkod\Core;

use Illuminate\Support\ServiceProvider;
use File;

class HerkodCoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /*
        |--------------------------------------------------------------------------
        | Migration Dosyalarını Yayınlama
        |--------------------------------------------------------------------------
        |
        | Migration dosyalarımızı aşağıdaki komut ile publish ediyoruz.
        | php artisan vendor:publish --provider="Herkod\Core\HerkodCoreServiceProvider" --tag="migration"
        |
        */
        $this->publishes([__DIR__.'/../database/migrations/' => database_path('/migrations')], 'herkod-core-migration');

        /*
        |--------------------------------------------------------------------------
        | Seed Dosyalarını Yayınlama
        |--------------------------------------------------------------------------
        |
        | Seed dosyalarımızı aşağıdaki komut ile publish ediyoruz.
        | php artisan vendor:publish --provider="Herkod\Core\HerkodCoreServiceProvider" --tag="seed"
        |
        */
        $this->publishes([__DIR__.'/../database/seeds/' => database_path('/seeds')], 'herkod-core-seed');

        /*
        |--------------------------------------------------------------------------
        | Config Dosyalarını Yayınlama
        |--------------------------------------------------------------------------
        |
        | Config dosyalarımızı aşağıdaki komut ile config/herkod klasörüne publish ediyoruz.
        | php artisan vendor:publish --provider="Herkod\Core\HerkodCoreServiceProvider" --tag="config"
        |
        */
        $this->publishes([__DIR__.'/../config' => config_path('/herkod')], 'herkod-core-config');

        /*
        |--------------------------------------------------------------------------
        | Modüller için viewleri register etme
        |--------------------------------------------------------------------------
        |
        | Aşağıdaki arrayi içerisinde bulunan modülleri view olarak kullanabilmek için yüklüyoruz.
        | Modülİsmi::view_file_name şeklinde kullanılır.
        | view('Mail::product_account_created')
        |
        */
        $this->registerModules([
            'Blog',
            'Cart',
            'Category',
            'Comment',
            'Currency',
            'Deposit',
            'Invoice',
            'Mailer',
            'Media',
            'Menu',
            'Order',
            'Page',
            'Parameter',
            'Payment',
            'Post',
            'Product',
            'Promotion',
            'Shipping',
            'Stock',
            'Subscriber',
            'Tag',
            'Tax',
            'Users',
            'Utils',
        ]);
    }

    public function register()
    {
        /*
        |--------------------------------------------------------------------------
        | Kendi paketimiz içerisindeki servis sağlayıcıları kayıt ediyoruz.
        |--------------------------------------------------------------------------
        |
        */
        $this->app->register(Users\UsersServiceProvider::class);

        /*
        |--------------------------------------------------------------------------
        | 3. Parti Bağımlılıkların servis sağlayıcılarını kayıt ediyoruz.
        |--------------------------------------------------------------------------
        |
        */
        $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        $this->app->register(\Anhskohbo\NoCaptcha\NoCaptchaServiceProvider::class);
        $this->app->register(\Baum\Providers\BaumServiceProvider::class);
        $this->app->register(\Intervention\Image\ImageServiceProvider::class);
        $this->app->register(\Jenssegers\Date\DateServiceProvider::class);

        /*
        |--------------------------------------------------------------------------
        | Kendi paketimiz içerisindeki Facadeleri kayıt ediyoruz.
        |--------------------------------------------------------------------------
        |
        */
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Blog', Currency\Facade\CurrencyFacade::class);
        $loader->alias('Cart', Cart\Facade\CartFacade::class);
        $loader->alias('Category', Category\Facade\CategoryFacade::class);
        $loader->alias('Comment', Comment\Facade\CommentFacade::class);
        $loader->alias('Currency', Currency\Facade\CurrencyFacade::class);
        $loader->alias('Deposit', Deposit\Facade\DepositFacade::class);
        $loader->alias('Invoice', Invoice\Facade\InvoiceFacade::class);
        $loader->alias('Mailer', Mailer\Facade\MailerFacade::class);
        $loader->alias('Media', Media\Facade\MediaFacade::class);
        $loader->alias('Menu', Menu\Facade\MenuFacade::class);
        $loader->alias('Order', Order\Facade\OrderFacade::class);
        $loader->alias('Page', Page\Facade\PageFacade::class);
        $loader->alias('Parameter', Parameter\Facade\ParameterFacade::class);
        $loader->alias('Payment', Payment\Facade\PaymentFacade::class);
        $loader->alias('Post', Post\Facade\PostFacade::class);
        $loader->alias('Product', Product\Facade\ProductFacade::class);
        $loader->alias('Specification', Product\Facade\SpecificationFacade::class);
        $loader->alias('Variation', Product\Facade\VariationFacade::class);
        $loader->alias('Promotion', Promotion\Facade\PromotionFacade::class);
        $loader->alias('Shipping', Shipping\Facade\ShippingFacade::class);
        $loader->alias('Stock', Stock\Facade\StockFacade::class);
        $loader->alias('Subscriber', Subscriber\Facade\SubscriberFacade::class);
        $loader->alias('Tag', Tag\Facade\TagFacade::class);
        $loader->alias('Tax', Tax\Facade\TaxFacade::class);
        $loader->alias('Users', Users\Facade\UsersFacade::class);
        $loader->alias('Utils', Utils\Facade\UtilsFacade::class);
        $loader->alias('Backup', Utils\Facade\BackupFacade::class);

        /*
        |--------------------------------------------------------------------------
        | 3. Parti Bağımlılıkların Facadelerini kayıt ediyoruz.
        |--------------------------------------------------------------------------
        |
        */
        $loader->alias('Debugbar', \Barryvdh\Debugbar\Facade::class);
        $loader->alias('Image', \Intervention\Image\Facades\Image::class);
        $loader->alias('Date', \Jenssegers\Date\Date::class);

    }

    private function registerModules($modules)
    {
        foreach ($modules as $module) {
            $views_path = __DIR__."/$module/Views";
            if (File::isDirectory($views_path)) {
                $this->loadViewsFrom($views_path, $module);
            }
        }
    }
}
