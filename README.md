# oopBlog

PHP ile OOP yapısını kullanarak hazırlanmış Blog projesi.

# Proje İçeriği

Kullanıcı Paneli:

 - Kategoriler - Kategori İçerikleri
 - Yazılar - Sayfalama - Yazı İçeriği - Demo Link - Download Link - Yorum Yapma
 - Facebook & Twitter & Youtube Linkleri - Son Yorumlar
 
Yönetim Paneli:

 - Kategoriler - Kategori Ekle - Kategori Güncelle - Kategori Sil
 - Yazılar - Yazı Ekle - Yazı Güncelle - Yazı Sil
 - Yorumlar - Yorum Sil


# Kurulum

App/System/config.php içerisinde bulunan :

 - dizin ayarını düzenleyin.

``` php
define ('url' , 'http://'. $_SERVER['SERVER_NAME']);
```

 - Veritabanı ayarlarını düzenleyip SQL dosyasını aktarın.


``` php
$config['db'] = ([ 
    'host' => 'localhost',
    'name' => '',
    'user' => '',
    'pass' => ''
]);
```

 - Kişileştirmek için Facebook , Twitter ve Youtube adreslerini düzenleyin.


``` php
define ('facebookUrl' ,  'https://www.facebook.com/ogzcakar');
define ('twitterUrl' ,  'https://www.twitter.com/ogzcakar');
define ('youtubeUrl' ,  '#');
```

# Projenin Anlatımı & Demosu

Anlatım : [oopBlog Anlatımı](http://www.ogzcakar.net/oopblog) 

Demo : [oopBlog](http://www.ogzcakar.net/demo/oopBlog/) - [oopBlog Yönetim Paneli](http://www.ogzcakar.net/demo/oopBlog/admin)