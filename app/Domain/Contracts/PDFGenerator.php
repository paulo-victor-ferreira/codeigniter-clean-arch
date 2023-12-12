<?php

namespace App\Domain\Contracts;

interface PDFGenerator
{
    public function loadTemplate(string $template, $data = []);
    public function setPaper(string $paper = 'A4', string $oriatation = 'portrait');
    public function render(string $pdfName);
    public function download();
}
