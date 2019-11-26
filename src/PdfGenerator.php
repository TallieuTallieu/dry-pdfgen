<?php

namespace Tnt\PdfGen;

use Dompdf\Dompdf;

class PdfGenerator
{
    /**
     * @var Dompdf $dompdf
     */
    private $dompdf;

    /**
     * Pdf constructor.
     * @param Dompdf $dompdf
     */
    public function __construct(Dompdf $dompdf)
    {
        $this->dompdf = $dompdf;
    }

    /**
     * Load the html to generate a pdf from
     * @param string $html
     * @return $this
     */
    public function fromHtml(string $html)
    {
        $this->dompdf->loadHtml($html);
        $this->dompdf->render();

        return $this;
    }

    /**
     * Stream the pdf
     */
    public function stream()
    {
        $this->dompdf->stream();
    }

    /**
     * Get the pdf contents
     * @return null|string
     */
    public function output()
    {
        return $this->dompdf->output();
    }
}