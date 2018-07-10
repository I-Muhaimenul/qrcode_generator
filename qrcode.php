<?php
    // Author: Muhaimenul Islam
    // Website: tekmio.com/muhaimenul
    header('Content-Type: image/png');
    // use Endroid\QrCode; or create new instance
    use Endroid\QrCode\QrCode;
    
    require_once 'vendor/autoload.php';
    

    $qr = new QrCode($_GET['inputText']);
    // $qr->setText();
    // $qr->setSize(200);

    echo $qr->writeString();

    die();



