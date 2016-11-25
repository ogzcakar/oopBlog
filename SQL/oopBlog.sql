-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Kas 2016, 19:36:25
-- Sunucu sürümü: 5.6.21
-- PHP Sürümü: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `projects_oopblog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categorys`
--

CREATE TABLE IF NOT EXISTS `categorys` (
`categoryId` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `categoryNameSlug` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `categorys`
--

INSERT INTO `categorys` (`categoryId`, `categoryName`, `categoryNameSlug`) VALUES
(1, 'Kategori 1', 'kategori-1'),
(2, 'Kategori 2', 'kategori-2'),
(3, 'Kategori 3', 'kategori-3'),
(4, 'Kategori 4', 'kategori-4'),
(5, 'Kategori 5', 'kategori-5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`commentId` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `postId` int(11) NOT NULL,
  `commentDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`commentId`, `comment`, `postId`, `commentDate`) VALUES
(1, 'Hürriyet Gazetesi Api Kullanımı Yorum 1', 1, '2016-11-24 17:01:57'),
(2, 'Hürriyet Gazetesi Api Kullanımı 2', 1, '2016-11-24 17:02:09'),
(3, 'Hürriyet Gazetesi Api Kullanımı Yorum 3', 1, '2016-11-24 17:02:20'),
(4, 'League Of Legends Api Kullanımı Yorum 1', 2, '2016-11-24 17:06:34'),
(5, 'League Of Legends Api Kullanımı Yorum 2', 2, '2016-11-24 17:06:37'),
(6, 'League Of Legends Api Kullanımı Yorum 3', 2, '2016-11-24 17:06:40'),
(7, 'Arabam.com Botu Yorum 1', 5, '2016-11-24 17:07:06'),
(8, 'Arabam.com Botu Yorum 2', 5, '2016-11-24 17:07:09'),
(9, 'Arabam.com Botu Yorum 3', 5, '2016-11-24 17:07:11'),
(10, 'OneSignal Api Kullanımı Yorum 1', 4, '2016-11-24 17:07:26'),
(11, 'OneSignal Api Kullanımı Yorum 2', 4, '2016-11-24 17:07:30'),
(12, 'OneSignal Api Kullanımı Yorum 3', 4, '2016-11-24 17:07:34'),
(13, 'Twitter Api Kullanımı Yorum 1', 3, '2016-11-24 17:07:49'),
(14, 'Twitter Api Kullanımı Yorum 2', 3, '2016-11-24 17:07:52'),
(15, 'Twitter Api Kullanımı Yorum 3', 3, '2016-11-24 17:07:54');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`postId` int(11) NOT NULL,
  `postTitle` varchar(100) NOT NULL,
  `post` text NOT NULL,
  `categoryId` int(11) NOT NULL,
  `postTitleSlug` text NOT NULL,
  `downloadLink` text NOT NULL,
  `demoLink` text NOT NULL,
  `postTime` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `posts`
--

INSERT INTO `posts` (`postId`, `postTitle`, `post`, `categoryId`, `postTitleSlug`, `downloadLink`, `demoLink`, `postTime`) VALUES
(1, 'Hürriyet Gazetesi Api Kullanımı', 'Merhaba arkadaşlar. Yakın bir zamanda yayınlanan Hürriyet gazetesinin Hürriyet Geliştirici Platformu yani Api özelliği hakkında küçük bir php tabanlı proje geliştirdim. Daha önce api kullanmamış ve api kullanımını öğrenmek isteyenler için başlangıç olarak Hürriyet apiden başlamak çok mantıklı olacaktır. Çünkü Api dökümantasyonları genelde ingilizcedir ve ingilizceniz yeterli değilse api başlangıcı zor ve pek eğlenceli olmayacaktır. Bunun aksine ise Hürriyet Api dökümanyastonu Türkçe ve İngilizce şeklinde hazırlanmıştır. Lafı çok fazla uzatmaya gerek yok zaten sizde kullandıkça dediklerimi çok daha iyi anlayacaksınız :)', 1, 'hurriyet-gazetesi-api-kullanimi', 'https://github.com/ogzcakar/HurriyetApi', 'http://ogzcakar.net/demo/hurriyetApi/', '2016-11-24 15:52:23'),
(2, 'League Of Legends Api Kullanımı', 'Merhaba Arkadaşlar. Api ders konusunda da Laravel dersleri kadar destek verdiğiniz için teşekkür ederim :) Öncelikle Hürriyet Api ile ilgili yazdığım makalemden sonra OOP yapısını kullanmam önerildi ve tabi ki buna bende sonuna kadar katılıyorum ki bende uzun zamandır bu şekilde kod yazmadığımdan garip de hissettim kendimi :) Ama amacım OOP yapısını hala bilmeyen ve öğrenmeyide düşünmeyen kişilerinde bundan yararlanabilmesi. Elbet ki doğru yolu bulacaklardır ama bu yolda değilken de en azından Api derslerinden yararlanmasının sakıncası yok :)  Anladığınız üzerine de League Of Legends için de OOP yapısı kullanmadım :)', 2, 'league-of-legends-api-kullanimi', 'https://github.com/ogzcakar/League-Of-Legends-Api', '', '2016-11-24 17:03:18'),
(3, 'Twitter Api Kullanımı', 'Merhaba arkadaşlar :) Hürriyet Api ve League Of Legends Api sistemi ile api kullanımı konusunda fikir yapınızın oturduğunu düşünüyorum. Şimdi ise yavaştan sosyal medyalara giriş yapalım ve ilk olarak twitter ile başlayalım :) Twitter Api içerisinde istemeyeceğiniz kadar çok method bulunuyor resmen kendi twitterınızı yapabilirsiniz diyebilirim :) Method fazla diyede gözünüz korkmasın kullanım çok fazla kolay  çünkü aslında biz twitter api tamamıyla baştan yazmıycaz :) Şimdi dersimize yavaş yavaş detaylıca giderek başlayalım. Sırayla: Uygulama Oluşturma , Kütüphane Listesi ve Kullanacağımız Kütüphane , Döküman Sayfası , Hazırladığım Proje anlatımı ve Github &amp; Demo ile makaleyi sonlandıracağım. Umarım yararlı olur :)', 3, 'twitter-api-kullanimi', 'https://github.com/ogzcakar/TwitterApi', 'http://www.ogzcakar.net/demo/twitterApi/', '2016-11-24 17:04:51'),
(4, 'OneSignal Api Kullanımı', 'Merhaba arkadaşlar. Sizlere çok hoşuma giden bir sistemden bahsetmek istiyorum :) Bugün bir çok farklı websitelerde Abone Ol şeklinde bir sistem var. Mantık gayet basit abone olmak için mail adresi girilir ve gerekli kodlamalar ile dinamik olarak mail gönderimi yapar. Çok işe yarıyor ama bence Tarayıcı Bildirim Sistemi olaya daha farklı bir renk katıyor :) Tarayıcı Bildirim Sistemini sıfırdan nasıl yazabiliriz açıkcası bunu araştırmadan birşey diyemem bakmak lazım .) ki zaten bir çok yazılımcıdan da duyduğum bir söz bu cümleye tam uyacaktır :) Amerikayı tekrar keşfetmeye gerek yok :)\r\n \r\nBöyle bir sistem için bize yardımcı olacak şey OneSignal. Bildirim gönderimi manuel olarak çok basit zaten ama tabi ki bunu otomatik bir sisteme çevirmemiz işimizi çok kolaştıracaktır. Bu konuda da bize tabi ki api sistemi yardımcı olacak.\r\n \r\nVakit kaybetmeden başlayalım. İlk olarak OneSignal adresine girip bir üyelik oluşturalım.Üye olup giriş yaptıktan sonra karşımıza ilk çıkan sayfa oluşturduğumuz tüm uygulamaları gösteren bir sayfa (All Applications). Add a new app diyerek uygulama oluşturmaya başlıyoruz ve karşımıza bir popup penceresi geliyor. Uygulamaya bir isim vereceğiz. Buraya gireceğimiz isim bize özel bir isim olacağından tanımlayıcı bir isim girmenizde bir sakınca yok. İsimi girdikten sonra bize 7 farklı bir seçenek sunuyor. Bunlar : İos , Android , Windows Phone , Amazon Fire , WebSite Push , Chrome Apps , Mac Os X. Gördüğünüz gibi Seçenek çok :) Bir çok farklı yazılım dalın da bize yardımcı olabileceğini bence kanıtladı bu seçenekler ile :) WebSite Push seçeneği ile yolumuza devam ediyoruz. Google Chrome &amp; Mozilla Firefox ve Apple Safari olarak bize 2 ayrı seçenek sunuyor. &quot;Ya siteme giren kişi Safari kullanıyorsa ama uygulamada Chrome seçeceğim ne yapmalıyım&quot; Şeklinde hiç düşünmenize gerek yok. Böyle bir durumda 2 farklı şekilde uygulamayı oluşturmamızda hiç bir sorun olmaz. Api Sdk kullanımında bu hesaba katılmış birşey :) Google Chrome &amp; Mozilla Firefox seçerek ben devam ediyorum siz Apple Safariyi de seçebilirsiniz tercih sizin. Daha sonra uygulamayı kullanacağımız site adresini giriyoruz ve sitenizde SSH desteği yok ise My site is not fully HTTPS kısmını seçili hale getiriyoruz. Bu seçeneği seçikten sonra aşağı kısımlarda Choose Subdomain seçeneği bulunmaktadır. OneSignal üzerinde bir subdomain oluşturacağız. Burada oluşturduğumuz adres bildirimin geleceği adres olacaktır. Yani bu adres abone olan herkese gözükecektir. Ayrıyeten URL Yazdığımız kısımın altında Icon desteğide mevcut bulunmaktadır. 192x192 şeklinde icon adresini girerseniz uygulamanızda belirlediğiniz icon gözükecektir. Next diyerek devam ettikten sonra WebSite Push , Wordpress ve Server Api seçeneklerini bize sunuyor. WebSite Push diyerek devam edelim. Son sayfadayız aslında uygulama oluşturuldu fakat bize uygulamayı test edip abone olmamızı istiyor. Şimdi bu sayfada bulunan Your App ID olduğunu görelim ve  sayfayı kenara koyup uygulama test ortamımızı hazırlayalım ki uygulamayı test ettikten sonra Check Subscribed Users butonunu tıklayalım.', 4, 'onesignal-api-kullanimi', 'https://github.com/ogzcakar/OneSignal-Api', 'http://www.ogzcakar.net/demo/oneSignal/', '2016-11-24 17:05:33'),
(5, 'Arabam.com Botu', 'Merhaba arkadaşlar. Müşterimin isteği üzerine arabam.com bir bot çalışmasına başladım ne yazıkki proje iptal oldu bende tamamlayıp sizle paylaşmak istedim :)\r\n \r\nBot bize ;\r\n \r\nKategoriler ,\r\nHerhangi bir kategorinin Alt Kategorileri ,\r\nHerhangi bir kategorinin içerisinde bulunan ilanlar ,\r\nHerhangi bir kategorinin herhangi bir alt kategorisinin içerisinde bulunan ilanlar ,\r\nKategori veya alt kategoride bulunan ilanların diğer sayfaları ,\r\n \r\ngibi bilgileri çekmemize yarıyor. Ayrıyeten OOP daha önce kullanmadıysanız mantık kavraması konusunda yardımcı olacağınıda düşünüyorum :) \r\n \r\nindex.php içerisinde fonksiyon çalıştırma örnekleri bulunuyor zaten tek yapmanız gereken yorum satırından çıkarmanız olacaktır. Ama yinede küçük bir örnek göstereyim\r\n \r\nprint_r($arabamCom-&gt;categoryListContent(''Klasik Araçlar'' , ''Cadillac '' , ''2'' ));\r\n \r\nBu kod bize Klasik Araçlar Kategorisinin Cadillac Alt Kategorisinin 2. Sayfasındaki ilanları listeleyecektir. 1. Sayfayı listelemek için ise \r\n \r\nprint_r($arabamCom-&gt;categoryListContent(''Klasik Araçlar'' , ''Cadillac '' ));\r\n \r\nyapmanız yeterli olacaktır. Bu arada olmayan sayfayı çekme gibi kontroller yapmadım bu durumlarda hata olacaktır. Vaktim olursa geliştiririm :) Anlamadığınız bir yer olursa lütfen sormaktan çekinmeyin. İşinize yaraması dileğiyle :)', 5, 'arabam-com-botu', 'https://github.com/ogzcakar/Arabam.com-Botu', 'http://ogzcakar.net/demo/arabamCom/', '2016-11-24 17:06:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`userId`, `userName`, `userPassword`) VALUES
(1, 'user', '123456');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `categorys`
--
ALTER TABLE `categorys`
 ADD PRIMARY KEY (`categoryId`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`commentId`);

--
-- Tablo için indeksler `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`postId`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categorys`
--
ALTER TABLE `categorys`
MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Tablo için AUTO_INCREMENT değeri `posts`
--
ALTER TABLE `posts`
MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
