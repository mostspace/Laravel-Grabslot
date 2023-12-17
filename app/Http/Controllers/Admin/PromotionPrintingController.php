<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// require 'vendor/autoload.php'; // Autoload the Composer-generated files

// use BaconQrCode\Encoder\QrCode;
// use Endroid\QrCode\Writer\PngWriter;

class PromotionPrintingController extends Controller
{
    public function index() {
        return view('admin/promotion-printing');
    }

    // // Your data to be encoded in the QR code
    // $data = 'https://www.example.com';

    // // Generate QR code
    // $qrCode = new QrCode($data);
    // $writer = new PngWriter();
    // header('Content-Type: image/png');
    // echo $writer->write($qrCode);
}
