Not: Bu paket hala geliştirilme aşamasındadır.
------

### Herkod E-ticaret Çözümü

Laravel paketi halinde, Türkiye şartları için hazırlanmış bir e-ticaret çözümüdür. Tamamen Türkçe olarak, Türk ödeme sistemleri, Türk kargo firmaları ve Türkiyede ki ticaret şartları göz önünde bulundurularak hazırlanmaktadır. Stok yönetimi, Fatura, Kasa gibi e-ticaret modülü için ekstra olan, ön muhasebe modülleride geliştirilmektedir. Sadece ön muhasebe amaçlıda kullanılabilir.

Şu anda içinde bulunduğunuz proje e-ticaret çözümünün çekirdek işlemleri için geliştirilmektedir.

##### Planlanan Örnek Methodlar;

```php

//Cart
Cart::add($product_id, 1)

//Category

//Comment

//Currency
Currency::create()

//Data

//Deposit

//Invoice

//Mailer

//Media

//Menu

//Order
Order::list()
Order::Cancel()

//Page

//Parameter

//Payment

//Post
Post::create()

//Product
Product::create()
Product::list()->filterBy()

//Promotion

//Shipping

//Stock
Stock::depleted()

//Subscriber
Subscriber::filterBy()->sendEmail()

//Tag

//Tax

//Users
Users::create()

//Utils

```

#### Genel Bilgilendirme

Projenin öncelikli amacı Türkiye şartlarına uygun bir e-ticaret çözümü ortaya çıkarmaktır. Ancak projenin ilerleyen süreçte globalleşme ihtimali göz önünde bulundurularak veritabanı tasarlanırken ve fonksiyon isimledirmeleri oluşturulurken ingilizce dili kullanılacaktır. Php dökümantasyonu şu aşamada Türkçe olarak oluşturulacaktır.

Türkiye'den dünyaya satış yapmak isteyenler için para birimi, çoklu dil desteği, vergi çeşitleri göz önünde bulundurularak tasarım yapılmaktadır.

Bu proje e-ticaret çözümü olmasının yanında aslında gelişmiş bir CMS(İçerik Yönetim Sistemi) olarakda düşünülebilir. Medya(Ortam), Blog Yazıları, Sayfalar başlıca CMS modülleridir. Veritabanı tasarımında Wordpress'in esnekliğinden esinlenilmiştir.

Bunun dışında Fatura, Kasa, Stok yönetimi ile ön muhasebe yazılımlarının işlevlerinide barındırmaktadır.

Neden Laravel paketi olarak geliştiriliyor; Laravel'in php frameworkler arasındaki yerini açıklamaya sanıyorum lüzum yoktur. Google'da ufak bir araştırma ile Laravel hakkında bilgi edinebilirsiniz. Neden paket olarak geliştirildiğine gelecek olursak; Laravel geliştiriciler için esnek bir altyapı sağlamak, güncelleme kolaylığı, yeni çıkacak Laravel LTS sürümleri için paketin kolay upgrade edilebilmesi gibi nedenler sıralanabilir.

İlerleyen zamanlarda çekirdek paket yani şu anda içinde bulunduğumuz paket kullanılarak api hazırlanacaktır. Türkiye'de api tabanlı e-ticaret altyapısı sağlayan firma bulunmamaktadır. Bu açık böylece kapatılarak, mobil e-ticaret çözümleri, masaüstü e-ticaret çözümleri, web tabanlı e-ticaret çözümleri için bir platform ve kaynak olacaktır.

Projede geliştirilme dili olarak Türkçe seçilmesinin temel nedeni, yabancı dil noktasında sıkıntı yaşayan Türk yazılımcıların tecrübelerini bizimle paylaşmaktan çekinmemelerini sağlamak ve Github gibi bir platforma alışmalarını kolaylaştırmaktır. Ayrıca Github üzerindeki Türk geliştirici sayısını arttırıp varolanları daha aktif hale getirebilme düşünceside Türkçe noktasında bizi etkilemiştir. Bu doğrultuda Github'ın kullanımı ile ilgili Türkçe dökümanlarda hazırlanacaktır. Ayrıca Laravel çatısı kullanılarak hazırlanmış, Türkçe olarak geliştirilmiş bir proje örneği kazandırmış olacağız.

İsimlendirme neden Herkod-Core; Herkod, [Herkod Yazılım][herkod]'ın tescilli markasıdır. O yüzden isim aramak yerine şimdilik bu şekilde isimlendirilmiştir. İsmin değişmesi ile ilgili herhangi bir kısıtlama yoktur ve günü geldiğinde projenin geneli için isim değişikliği yapılabilir.

Ödeme sistemleri olarak öncelikle Payu ve Iyzico ile entegrasyon yapılacaktır.

#### Yazılım Geliştirme Tercihleri

Yazılan kodun mümkün olduğunca test edilebilir olması birincil hedeflerimizdendir.

Pakette bir modülü geliştirmeden önce testlerini yazarak daha sonra paketi geliştirmeye başlamayı hedefliyoruz. Yani öncelikli amaç testlerin yazılmasıdır. Projeye katkı sağlamak isteyenlerden de öncelikle geliştirmek istedikleri modül için veya düzelmek istedikleri hata için yazılabiliyorsa testini bekleyeceğiz.

Core paketinin klasör yapısını inceleyerek nasıl bir klasör yapısı tercih ettiğimizi direk anlayabilirsiniz.

Bu paket şu anda Laravel'in LTS sürümü olan 5.1.* versiyonu için geliştirilmektedir. Bir sonraki LTS versiyonu yayınlandığında o versiyona upgrade edilecektir.

Php standartları açısından PSR standartları göz önünde bulundurulmaktadır. Standartlara uygunluk için [php-cs-fixer][php-cs-fixer] kullanılmaktadır.

Çoğu e-ticaret çözümünde olduğu gibi, gerçekleştirilen işlemlerde gerekli görülenler için hooks|events geliştirilerek geliştirilebilir bir yapı hedeflenmektedir.

Tam anlamıyla kararlı sürümü yayınlanmadan Packagist üzerinden composer ile kurulum mümkün olmayacaktır. Github reposu üzerinden nasıl kurulum yapabileceğinizi "Projeye Nasıl Katkı Sağlayabilirsiniz" bölümünden öğrenebilirsiniz.

Bağımlılıklar proje tam anlamıyla pakete dönüştürülene kadar Laravel projenizin composer.json dosyası ile yönetilecektir. Alternatif bir yol için tavsiyelerinize açığız.

#### Projeye Nasıl Katkı Sağlayabilirsiniz
Bu bölümde projenin geliştirme aşamasında nasıl kullanılabilir ve geliştirilebilir hale getirilebileceğiniz anlatacağız.


#### İletişim

Bizimle iletişime geçmek için **github@herkod.com** mail adresine mail atabilirsiniz. Pakette acil düzeltilmesi gereken yerler olduğunda mail adresimizden bize ulaşırsanız hatalar ivedilikle çözülecektir. Sormak istediğiniz sorular için, tavsiyeleriniz içinde bizlere mail atmaktan lütfen çekinmeyin.



[php-cs-fixer]:http://cs.sensiolabs.org/
[herkod]:https://www.herkod.com/
