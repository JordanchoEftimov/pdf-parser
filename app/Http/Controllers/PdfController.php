<?php

namespace App\Http\Controllers;

use Spatie\PdfToText\Pdf;

class PdfController extends Controller
{
    public function __invoke(): void
    {
        /* run `which pdftotext` to see if you need to set the binPath
        * binPath by default is /usr/bin/pdftotext (https://github.com/spatie/pdf-to-text#usage)
        */
        $binPath = '/opt/homebrew/bin/pdftotext';
        $pdfPath = 'example.pdf';

        $pdfText = Pdf::getText($pdfPath, $binPath);

        $lines = explode(PHP_EOL, $pdfText);

        dd(implode(PHP_EOL, $lines));
    }
}
