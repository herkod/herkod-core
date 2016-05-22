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
        $this->publishes([__DIR__.'/../database/migrations/' => database_path('/migrations')], 'migration');

        /*
        |--------------------------------------------------------------------------
        | Seed Dosyalarını Yayınlama
        |--------------------------------------------------------------------------
        |
        | Seed dosyalarımızı aşağıdaki komut ile publish ediyoruz.
        | php artisan vendor:publish --provider="Herkod\Core\HerkodCoreServiceProvider" --tag="seed"
        |
        */
        $this->publishes([__DIR__.'/../database/seeds/' => database_path('/seeds')], 'seed');

        /*
        |--------------------------------------------------------------------------
        | Config Dosyalarını Yayınlama
        |--------------------------------------------------------------------------
        |
        | Config dosyalarımızı aşağıdaki komut ile config/herkod klasörüne publish ediyoruz.
        | php artisan vendor:publish --provider="Herkod\Core\HerkodCoreServiceProvider" --tag="config"
        |
        */
        $this->publishes([__DIR__.'/../config' => config_path('/herkod')], 'config');

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
            'Mail',
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
        #$this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);

        /*
        |--------------------------------------------------------------------------
        | Kendi paketimiz içerisindeki Facadeleri kayıt ediyoruz.
        |--------------------------------------------------------------------------
        |
        */
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
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
        $loader->alias('Promotion', Promotion\Facade\PromotionFacade::class);
        $loader->alias('Shipper', Shipper\Facade\ShipperFacade::class);
        $loader->alias('Stock', Stock\Facade\StockFacade::class);
        $loader->alias('Subscriber', Subscriber\Facade\SubscriberFacade::class);
        $loader->alias('Tag', Tag\Facade\TagFacade::class);
        $loader->alias('Tax', Tax\Facade\TaxFacade::class);
        $loader->alias('Users', Users\Facade\UsersFacade::class);
        $loader->alias('Utils', Utils\Facade\UtilsFacade::class);

        /*
        |--------------------------------------------------------------------------
        | 3. Parti Bağımlılıkların Facadelerini kayıt ediyoruz.
        |--------------------------------------------------------------------------
        |
        */
        #$loader->alias('Cart', Cart\Facade\CartFacade::class);

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
