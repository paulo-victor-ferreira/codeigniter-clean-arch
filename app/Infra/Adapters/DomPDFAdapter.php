<?php

namespace App\Infra\Adapters;

use App\Domain\Contracts\PDFGenerator;

class DomPDFAdapter implements PDFGenerator
{

    public function loadTemplate(string $template, $data = [])
    {
    }
    public function setPaper(string $paper = 'A4', string $oriatation = 'portrait')
    {
    }
    public function render(string $pdfName)
    {
    }
    public function download()
    {
    }
}
