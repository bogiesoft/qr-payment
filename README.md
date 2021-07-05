# bogiesoft/qr-payment

PHP Library to generate QR Code for QR-Payment and PromptPay

## Requirement
- PHP 7.2+
- [GD Extension](http://php.net/manual/en/book.image.php) (For Generate QR Code)

## Composer
This package available on [Packagist](https://packagist.org/packages/bogiesoft/qr-payment), Install the latest version with composer 

```
composer require bogiesoft/qr-payment
```

## Usage

```php
# To generate PromptPay QR Code
$promptpay = new bogiesoft\PromptPay();

// Grab parameter from URI
// ?amount=99.25&targer=0810993011
$amount = $_GET['amount'] ?? 99.99;
$target = $_GET['target'] ?? '0810993011';

// Display qrcode as PNG image
$promptpay->generateQrCode($target, $amount);


# To generate SCB QR-Payment
$scb = new bogiesoft\ScbQr();

// Grab parameter from URI
// ?amount=99.25&ref_1=CUST1100&ref_2=INV1001&billerId=0115311040039475101
$amount = $_GET['amount'] ?? 0;
$ref_1 = $_GET['ref_1'] ?? 'none';
$ref_2 = $_GET['ref_2'] ?? 'none';

// Put &rawdata=yes to return rawdata
$rawdata = $_GET['rawdata'] ?? 'no';

# '0115311040039475101'; // Biller ID TEST1
$billerId = $_GET['billerId'] ?? '0115311040039475101'; 

// Display qrcode as PNG image
$scb->getqrcode($amount, $ref_1, $ref_2, $billerId);
```

## Sample Generated PromptPay QR Code
<p align="center">
  <img src="images/promptpay.png" width="250" />
</p>

## Contributing
Feel free to contribute on this project, We'll be happy to work with you.

## License
This bundle is under the MIT license. For the full copyright and license information please view the LICENSE file that was distributed with this source code.
