Not: Bu paket hala geliştirilme aşamasındadır.
------

### Herkod E-ticaret Çözümü

Laravel paketi halinde, Türkiye şartları için hazırlanmış bir e-ticaret çözümüdür. Tamamen Türkçe olarak, Türk ödeme sistemleri, Türk kargo firmaları ve Türkiyede ki ticaret şartları göz önünde bulundurularak hazırlanmaktadır. Stok yönetimi, Fatura, Kasa gibi e-ticaret modülü için ekstra olan, ön muhasebe modülleride geliştirilmektedir. Sadece ön muhasebe amaçlıda kullanılabilir.

Şu anda içinde bulunduğunuz proje e-ticaret çözümünün çekirdek işlemleri için geliştirilmektedir.

##### Örnek Çekirdek Methodları;

```php
User::create()
Product::create()
Product::list()->filterBy()
Currency::create()
Post::create()
Order::list()
Order::Cancel()
Subscriber::filterBy()->sendEmail()
Stock::depleted()
Cart::add($product_id, 1)
```

#### Genel Bilgilendirme

Projenin öncelikli amacı Türkiye şartlarına uygun bir e-ticaret çözümü ortaya çıkarmaktır. Ancak projenin ilerleyen süreçte globalleşme ihtimali göz önünde bulundurularak veritabanı tasarlanırken ve fonksiyon isimledirmeleri oluşturulurken ingilizce dili kullanılacaktır. Php dökümantasyonu şu aşamada Türkçe olarak oluşturulacaktır.

Türkiye'den dünyaya satış yapmak isteyenler için para birimi, çoklu dil desteği, vergi çeşitleri göz önünde bulundurularak tasarım yapılmaktadır.

Bu proje e-ticaret çözümü olmasının yanında aslında gelişmiş bir CMS(İçerik Yönetim Sistemi) olarakda düşünülebilir. Medya(Ortam), Blog Yazıları, Sayfalar başlıca CMS modülleridir. Veritabanı tasarımında Wordpress'in esnekliğinden esinlenilmiştir.

Bunun dışında Fatura, Kasa, Stok yönetimi ile ön muhasebe yazılımlarının işlevlerinide barındırmaktadır.

Neden Laravel paketi olarak geliştiriliyor; Laravel'in php frameworkler arasındaki yerini açıklamaya sanıyorum lüzum yoktur. Google'da ufak bir araştırma ile Laravel hakkında bilgi edinebilirsiniz. Neden paket olarak geliştirildiğine gelecek olursak; Laravel geliştiriciler için esnek bir altyapı sağlamak, güncelleme kolaylığı, yeni çıkacak Laravel LTS sürümleri için paketin kolay upgrade edilebilmesi gibi nedenler sıralanabilir.

İlerleyen zamanlarda çekirdek paket yani şu anda içinde bulunduğumuz paket kullanılarak api hazırlanacaktır. Türkiye'de api tabanlı e-ticaret altyapısı sağlayan firma bulunmamaktadır. Bu açık böylece kapatılarak, mobil e-ticaret çözümleri, masaüstü e-ticaret çözümleri, web tabanlı e-ticaret çözümleri için bir platform ve kaynak olacaktır.

Projede geliştirilme dili olarak Türkçe seçilmesinin temel nedeni, yabancı dil noktasında sıkıntı yaşayan Türk yazılımcıların tecrübelerini bizimle paylaşmaktan çekinmemelerini sağlamak ve Github gibi bir platforma alışmalarını kolaylaştırmaktır. Ayrıca Github üzerindeki Türk geliştirici sayısını arttırıp varolanları daha aktif hale getirebilme düşünceside Türkçe noktasında bizi etkilemiştir. Bu doğrultuda Github'ın kullanımı ile ilgili Türkçe dökümanlarda hazırlanacaktır. Ayrıca Laravel çatısı kullanılarak hazırlanmış, Türkçe olarak geliştirilmiş bir proje örneği kazandırmış olacağız.

#### Yazılım Geliştirme Tercihleri

Core paketinin klasör yapısını inceleyerek nasıl bir klasör yapısı tercih ettiğimizi direk anlayabilirsiniz.

Bu paket şu anda Laravel'in LTS sürümü olan 5.1.* versiyonu için geliştirilmektedir. Bir sonraki LTS versiyonu yayınlandığında o versiyona upgrade edilecektir.

Php standartları açısından PSR standartları göz önünde bulundurulmaktadır. Standartlara uygunluk için [php-cs-fixer][php-cs-fixer] kullanılmaktadır.


#### İletişim

Bizimle iletişime geçmek için **github@herkod.com** mail adresine mail atabilirsiniz. Pakette acil düzeltilmesi gereken yerler olduğunda mail adresimizden bize ulaşırsanız hatalar ivedilikle çözülecektir. Sormak istediğiniz sorular için, tavsiyeleriniz içinde bizlere mail atmaktan lütfen çekinmeyin.



[php-cs-fixer]:http://cs.sensiolabs.org/
