<?php

use Beebmx\KirbyEnv;

KirbyEnv::load(path: './');

date_default_timezone_set('Europe/Berlin');

return [
    'debug' => env(key: 'SHOW_DEBUG_INFORMATION'),
    'panel' => [
        'install' => env(key: 'ALLOW_PANEL_INSTALLATION')
    ],
    'languages' => env(key: 'ENABLE_LANGUAGES'),
    'date'  => [
        'handler' => 'strftime'
    ],
    'bvdputte.autopublish.poormanscron' => true,
    'bvdputte.autopublish.poormanscron.interval' => 1,
    'routes' => [
        [
            'pattern' => 'sitemap.xml',
            'action' => function () {
                $pages = site()->pages()->index();

                // fetch the pages to ignore from the config settings,
                // if nothing is set, we ignore the error page
                $ignore = kirby()->option('sitemap.ignore', ['error']);

                $content = snippet(
                    name: 'sitemap',
                    data: compact('pages', 'ignore'),
                    return: true
                );

                // return response with correct header type
                return new Kirby\Cms\Response($content, 'application/xml');
            }
        ],
        [
            'pattern' => 'sitemap',
            'action'  => function () {
                return go('sitemap.xml', 301);
            }
        ],
    ],
    'sitemap.ignore' => ['error'],
];
