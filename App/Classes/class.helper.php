<?php

class Helper {

    public static function Load()
    {
        $helperDir = realpath('.') .'/App/Helper/'; // Ana dizinimiz / App / Helper
        if($dh = opendir($helperDir)){ // Dosyaları aç $dh değişkenine aktar
            while($file = readdir($dh)){ // Dosyaları oku $file değişkenine aktar
                if(is_file($helperDir. '/' .$file)){ // Böyle bir dosya var mı ?
                    require $helperDir. '/' .$file; // Var olan dosyaları require ile yükle
                }
            }
        }
    }

}
