<?php

try {
$baglanti = new PDO("mysql:host=localhost; dbname=eticaret", 'root' , ''    );
    #echo "bağlantı başarılı";
} catch(PDOException $e){
    echo $e->getMessage();
}




