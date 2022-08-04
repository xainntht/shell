<?php

try {

    $baglanti = new PDO("mysql:host=localhost;dbname=mickeys_slot", "mickeys_slot", "Djddhsafj_++");
    $baglanti->exec("SET NAMES utf8");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sorgu = $baglanti->prepare("SELECT * FROM kisiler");
    $sorgu->execute();

 $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);
print_r($cikti);

} catch (PDOException $e) {
    die($e->getMessage());
}

$baglanti = null;

?>
