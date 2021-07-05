<?php 
require_once './src/PromptPay.php';
$promptpay = new bogiesoft\PromptPay();

// Grab parameter from URI
// Sample url parameter
// ?amount=99.25&targer=0810993011
$amount = $_GET['amount'] ?? 99.00;
$target = $_GET['target'] ?? '0810993011';

// Display qrcode as PNG image
$promptpay->generateQrCode($target, $amount);

