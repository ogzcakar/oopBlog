<?php

function __autoload($className){ // Sınıfları Otomatik yükle
    $classFile = __DIR__. '/Classes/class.' .strtolower($className). '.php';
    if(file_exists($classFile)) { // Böyle bir dosya var mı ?
        require $classFile; // Var olan dosyaları require ile yükle
    }
}

Helper::Load(); // Helper sınıfının Load fonksiyonunu yükle

// System/config.php dosyasını çek
require 'System/config.php';

// Dil Dosyasını Çağır
require 'Language/'. $config['default_language'] .'/lang.php';

$db = new basicdb($config['db']['host'] , $config['db']['name'] , $config['db']['user'] , $config['db']['pass']);
