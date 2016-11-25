<?php

$config['db'] = ([ // Veritabanı bağlantı ayarları
    'host' => 'localhost',
    'name' => '',
    'user' => '',
    'pass' => ''
]);

// Varsayılan Dil
$config['default_language'] = 'tr';

// Sabit değişkenler
define ('dir' , realpath('.')); //dir değişkenini realpath('.') yani ana dizine eşitle
define ('controller', dir .'/App/Controller'); // controllar değişkenini anadizin/App/Controller eşitle
define ('view', dir .'/View'); // view değişkenini anadizin/App/View eşitle
define ('url' , 'http://'. $_SERVER['SERVER_NAME']); // Projenin bulunduğu ana dizini al

define ('facebookUrl' ,  'https://www.facebook.com/ogzcakar');
define ('twitterUrl' ,  'https://www.twitter.com/ogzcakar');
define ('youtubeUrl' ,  '#');
