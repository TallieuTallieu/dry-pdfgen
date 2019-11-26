<?php

namespace Tnt\PdfGen;

use Dompdf\Dompdf;
use Dompdf\Options;
use Oak\Contracts\Container\ContainerInterface;
use Oak\ServiceProvider;

class PdfGenServiceProvider extends ServiceProvider
{
    public function boot(ContainerInterface $app)
    {
        //
    }

    public function register(ContainerInterface $app)
    {
        $app->set(PdfGenerator::class, PdfGenerator::class);

        $app->set(Dompdf::class, function ($app) {

            $opts = new Options();
            $opts->setIsRemoteEnabled(true);

            return new Dompdf($opts);
        });
    }
}