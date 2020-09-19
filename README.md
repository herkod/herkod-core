Not: Bu paket hala geliştirilme aşamasındadır.
------

### Herkod E-ticaret Çözümü

Laravel paketi halinde, Türkiye şartları için hazırlanmış bir e-ticaret çözümüdür. Tamamen Türkçe olarak, Türk ödeme sistemleri, Türk kargo firmaları ve Türkiye'de ki ticaret şartları göz önünde bulundurularak hazırlanmaktadır. Stok yönetimi, Fatura, Kasa gibi e-ticaret modülü için ekstra olan, ön muhasebe modülleri de geliştirilmektedir. Sadece ön muhasebe amaçlıda kullanılabilir.

Şu anda içinde bulunduğunuz proje e-ticaret çözümünün çekirdek işlemleri için geliştirilmektedir.

##### Planlanan Örnek Methodlar;

```php

//Backup
Backup::dbExport()
Backup::dbImport()
Backup::all()
Backup::media()
Backup::sync()


//Cart
Cart::addItem()
Cart::deleteItem()
Cart::isEmpty()
Cart::getAllItems()
Cart::getSubtotal()
Cart::getGrandTotal()
Cart::getItemsWeight()
Cart::getItemsCount()
Cart::getItemsQty()
Cart::getTotalTax()
Cart::getTaxs()

//Category
Category::get(@id)
Category::roots()
Category::addRoot()
Category::addChild()
Category::makeChildOf()
Category::moveUp()
Category::moveDown()
Category::isChild()
Category::isRoot()
Category::productsPriceUpPercent()
Category::productsPriceDownPercent()

//Comment
Comment::get()
Comment::create()
Comment::update()
Comment::apply(true|false)
Comment::delete()
Comment::all(@parent_id)
Comment::getGravatar(@user_id)

//Currency
Currency::create()
Currency::delete()
Currency::update()
Currency::get()
Currency::all()
Currency::calculate()
Currency::sync(@currency_id)
Currency::syncAll()

//Deposit
Deposit::getAllMovements()
Deposit::getGrandTotal()
Deposit::getSpendings()
Deposit::getRevenues()
Deposit::createMovement()
Deposit::updateMovement()
Deposit::deleteMovement()

//Invoice
Invoice::data()
Invoice::renderWithTemplate()
Invoice::renderViewAsPDF()
Invoice::renderViewAsHtml()

//Mailer
Mailer::send(@users)
Mailer::sendWithUserId()
Mailer::sendAll()

//Media
Media::get(@media_id|@parent_id)
Media::geturl(@media_id)
Media::getDataurl()
Media::toBase64()

//Menu
Menu::get(@menu_id|@menu_name)
Menu::roots()
Menu::addRoot()
Menu::addChild()
Menu::makeChildOf()
Menu::moveUp()
Menu::moveDown()
Menu::isChild()
Menu::isRoot()
Menu::getItem()

//Order
Order::all()
Order::cancel()
Order::create()
Order::delete()
Order::paymentOk()
Order::paymentNo()
Order::toInvoice()
Order::deleteInvoice()

//Page
Page::get(@page_id)
Page::create()
Page::update()
Page::delete()
Page::all()->filterBy()
Page::pagination()
Page::comments()


//Parameter
Parameter::get()
Parameter::getFromCache()
Parameter::all()->filterBy()
Parameter::create()
Parameter::update()
Parameter::delete()


//Payment
Payment::methods()
Payment::checkStatus()
Payment::cancel()

//Post
Post::create()
Post::update()
Post::delete()
Post::type('page')->filter('id', 1)
Post::type('menu')->filter('name', 'test_menu')->get()
Post::type('attachment')->find(1)

//Product
Product::create()
Product::update()
Product::delete()
Product::all()->filterBy()
Product::getAttribute()
Product::setAttribute()
Product::allAttributes()
Product::allSpecifications()
Product::getSpecification()
Product::setSpecification()
Product::variations()
Product::compare([@products_ids])

//Promotion
Promotion::create()
Promotion::createForFreeShipping()
Promotion::buyTwoGetOneFree()
Promotion::buyThreeGetOneFree()
Promotion::createCustom()

//Shipping
Shipping::create()
Shipping::update()
Shipping::delete()
Shipping::getAsOption()

//Stock
Stock::getIdBySku()
Stock::getDepleteds()
Stock::getCritics()
Stock::getHavings()
Stock::getAll()->filterBy()
Stock::createMovement()
Stock::updateMovement()
Stock::deleteMovement()

//Subscriber
Subscriber::filterBy()->sendEmail()

//Tag
Tag::create()
Tag::posts()

//Tax
Tax::create()
Tax::update()
Tax::calculate()
Tax::withTax()
Tax::withoutTax()

//Users
Users::create()
Users::login()
Users::setRole()
Users::getRoles()
Users::suspend()
Users::sendMail()
Users::sendSMS()


//Utils
Utils::dbToExcel()
Utils::excelToDb()
Utils::cropImage()
Utils::imageToThumnail()
```

#### Genel Bilgilendirme

Projenin öncelikli amacı Türkiye şartlarına uygun bir e-ticaret çözümü ortaya çıkarmaktır. Ancak projenin ilerleyen süreçte globalleşme ihtimali göz önünde bulundurularak veri tabanı tasarlanırken ve fonksiyon isimlendirmeleri oluşturulurken İngilizce dili kullanılacaktır. Php dökümantasyonu şu aşamada Türkçe olarak oluşturulacaktır.

Türkiye'den dünyaya satış yapmak isteyenler için para birimi, çoklu dil desteği, vergi çeşitleri göz önünde bulundurularak tasarım yapılmaktadır.

Bu proje e-ticaret çözümü olmasının yanında aslında gelişmiş bir CMS(İçerik Yönetim Sistemi) olarak da düşünülebilir. Medya(Ortam), Blog Yazıları, Sayfalar başlıca CMS modülleridir. Veri tabanı tasarımında Wordpress'in esnekliğinden esinlenilmiştir.

Bunun dışında Fatura, Kasa, Stok yönetimi ile ön muhasebe yazılımlarının işlevlerinide barındırmaktadır.

Neden Laravel paketi olarak geliştiriliyor; Laravel'in php frameworkler arasındaki yerini açıklamaya sanıyoruz lüzum yoktur. Google'da ufak bir araştırma ile Laravel hakkında bilgi edinebilirsiniz. Neden paket olarak geliştirildiğine gelecek olursak; Laravel geliştiriciler için esnek bir altyapı sağlamak, güncelleme kolaylığı, yeni çıkacak Laravel LTS sürümleri için paketin kolay upgrade edilebilmesi gibi nedenler sıralanabilir.

İlerleyen zamanlarda çekirdek paket yani şu anda içinde bulunduğumuz paket kullanılarak api hazırlanacaktır. Türkiye'de api tabanlı e-ticaret altyapısı sağlayan firma bulunmamaktadır. Bu açık böylece kapatılarak, mobil e-ticaret çözümleri, masaüstü e-ticaret çözümleri, web tabanlı e-ticaret çözümleri için bir platform ve kaynak olacaktır.

Projede geliştirilme dili olarak Türkçe seçilmesinin temel nedeni, yabancı dil noktasında sıkıntı yaşayan Türk yazılımcıların tecrübelerini bizimle paylaşmaktan çekinmemelerini sağlamak ve Github gibi bir platforma alışmalarını kolaylaştırmaktır. Ayrıca Github üzerindeki Türk geliştirici sayısını arttırıp var olanları daha aktif hale getirebilme düşüncesi de Türkçe noktasında bizi etkilemiştir. Bu doğrultuda Github'ın kullanımı ile ilgili Türkçe dökümanlarda hazırlanacaktır. Ayrıca Laravel çatısı kullanılarak hazırlanmış, Türkçe olarak geliştirilmiş bir proje örneği kazandırmış olacağız.

İsimlendirme neden Herkod-Core; `Herkod`, [Herkod Yazılım][herkod]'ın tescilli markasıdır. O yüzden isim aramak yerine şimdilik bu şekilde isimlendirilmiştir. İsmin değişmesi ile ilgili herhangi bir kısıtlama yoktur ve günü geldiğinde projenin geneli için isim değişikliği yapılabilir.

Ödeme sistemleri olarak öncelikle Payu ve Iyzico ile entegrasyon yapılacaktır.

#### Yazılım Geliştirme Tercihleri

Yazılan kodun mümkün olduğunca test edilebilir olması birincil hedeflerimizdendir. Pakette bir modülü geliştirmeden önce testlerini yazarak daha sonra paketi geliştirmeye başlamayı hedefliyoruz. Yani öncelikli amaç testlerin yazılmasıdır. Projeye katkı sağlamak isteyenlerden de öncelikle geliştirmek istedikleri modül için veya düzelmek istedikleri hata için yazılabiliyorsa testini bekleyeceğiz. Yani bu projede Test Driven Development(Test Odaklı|Güdümlü Programlama) felsefesini uygulamak hedeflenmektedir.

Core paketinin klasör yapısını inceleyerek nasıl bir klasör yapısı tercih ettiğimizi direk anlayabilirsiniz.

Bu paket şu anda Laravel'in LTS sürümü olan 5.1.* versiyonu için geliştirilmektedir. Bir sonraki LTS versiyonu yayınlandığında o versiyona upgrade edilecektir.

Php standartları açısından PSR standartları(PSR-1, PSR-2, PSR-4) göz önünde bulundurulmaktadır. Standartlara uygunluk için [php-cs-fixer][php-cs-fixer] kullanılmaktadır.

Çoğu e-ticaret çözümünde olduğu gibi, gerçekleştirilen işlemlerde gerekli görülenler için hooks|events geliştirilerek geliştirilebilir bir yapı hedeflenmektedir.

Tam anlamıyla kararlı sürümü yayınlanmadan Packagist üzerinden composer ile kurulum mümkün olmayacaktır. Github reposu üzerinden nasıl kurulum yapabileceğinizi "Projeye Nasıl Katkı Sağlayabilirsiniz" bölümünden öğrenebilirsiniz.

Bağımlılıklar proje tam anlamıyla pakete dönüştürülene kadar Laravel projenizin composer.json dosyası ile yönetilecektir. Alternatif bir yol için tavsiyelerinize açığız.

#### Projeyeyi Nasıl Çalıştırabilirsiniz?
Öncelikle projeyi klonlamalı ya da manuel olarak indirmelisiniz. Nasıl indirebileceğinizi öğrenmek için **"Projeye Nasıl Katkı Sağlayabilirsiniz?"** bölümünü inceleyebilirsiniz. İndirdiğiniz paketin laravel içerisinde çalışır hale gelebilmesi için;
- Paketin `composer.json` dosyasındaki bağımlılıkları(Bağımlılığı öngörülen paketler) Laravel projenizin `composer.json` dosyasına ekleyerek. `composer update` komutunu çalıştırmalısınız.

    **Bağımlılığı öngörülen paketler;**
    - barryvdh/laravel-debugbar
    - etrepat/baum
    - briannesbitt/Carbon
    - jenssegers/date
    - intervention/image

- Projenizin Config/app.php dosyasında providers bölümüne aşağıdaki satırı yapıştırınız.
```php
    Herkod\Core\HerkodCoreServiceProvider::class,
```

- Sonrasında projenizin `autoload`, `PSR-4` bölümünü aşağıdaki gibi güncellemeniz yeterlidir.
```json

"psr-4": {
    "App\\": "app/",
    "Herkod\\Core\\": "vendor/herkod/herkod-core/src/"
}
```

#### Projeye Nasıl Katkı Sağlayabilirsiniz?

Projeye katkı sağlamak için öncelikle projeden fork ile çatal oluşturmalısınız. Sonrasında oluşturduğunuz çataldan projeyi klonlamalı ya da manuel olarak indirmelisiniz.
Forkunuzdan Projeyi `vendor/herkod/herkod-core` klasörüne klonlamalı ya da manuel olarak indirerek bu klasöre çıkartmalısınız.
Sonrasında yapmak istediğiniz güncellemeleri yaparak sırasıyla;
```bash

git add .
git commit -m "Projede xxx değişikliği yapıldı."
git push origin master
```
komutlarını çalıştırıyoruz. Bu komutlar sonrasında projeden oluşturduğunuz çatala göz atabilirsiniz. Yaptığınız commitler görünecektir. Bu işlemlerden sonra `Create Pull Request` göndererek işlemi tamamlayabilirsiniz. Katkılarınız en kısa sürede incelenecek ve dönüş yapılacaktır.

#### Test nedir? Niçin Yazılır? Nasıl Yazılır?

Hazırlanıyor...

#### İletişim

Bizimle iletişime geçmek için **github@herkod.com** mail adresine mail atabilirsiniz. Pakette acil düzeltilmesi gereken yerler olduğunda mail adresimizden bize ulaşırsanız hatalar ivedilikle çözülecektir. Sormak istediğiniz sorular için, tavsiyeleriniz içinde bizlere mail atmaktan lütfen çekinmeyin.
<br>
<br>
<p align="center">
  <a href="https://www.herkod.com"><img src="https://herkod.com/images/logo/logo.svg" width="250"></a>
</p>
