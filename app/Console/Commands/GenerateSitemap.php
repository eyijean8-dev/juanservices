<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Génère le sitemap XML pour Google';

    public function handle()
    {
        Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/services'))
            ->add(Url::create('/projets'))
            ->add(Url::create('/a_propos'))
            ->add(Url::create('/contact'))
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap généré avec succès !');
    }
}
