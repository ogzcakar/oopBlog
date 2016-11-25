<?php
// App/init.php dosyasını yüklüyoruz.
require 'App/init.php';

$urlParameters = get('url'); // App/Helper/url.php içerisinde bulunan get fonksiyonunu 'url' değeri ile çalıştır
$urlParameters = array_filter(explode('/' , $urlParameters)); // Boş / değerlerini sil ve $urlParameters değişkenini array haline getir

if(!isset($urlParameters[0])){ // $urlParameters değişkenin 0. değeri yok ise
    $urlParameters[0] = 'home'; // home olsun
}

if(!file_exists(controller($urlParameters[0]))){ // $urlParameters değişkenin 0.değeri bulunmuyorsa
    $urlParameters[0] = 'home'; // home olsun
}

$className = controller($urlParameters[0]); // $urlParameters değişkeninin 0.değişkenin yerini bul
require  $className; // Dosyayı buraya çağır
$class = new $urlParameters[0](); // Sınıfı oluştur

if(!isset($urlParameters[1])){ // $urlParameters değişkeninin 1. değeri boş ise
    $urlParameters[1] = 'index'; // index olsun
}

if(!method_exists($class , $urlParameters[1])) // $urlParameters değişkeninin 0. değerindeki dosyanın içinde $urlParameters değişkeninin 1.değer methodu bulunmuyorsa
{
    $urlParameters[1] = 'notFound'; // notFound olsun
}

$class->$urlParameters[1](); // methodu sayfaya çağır
