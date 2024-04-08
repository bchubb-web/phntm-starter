<?php

namespace Pages;
 
use bchubbweb\phntm\Resources\Layout as LayoutTemplate;

class Layout extends LayoutTemplate
{
    public function __construct() {

        $this->registerAsset('/assets/style.css');
        $this->setContent(<<<HTML
        <html>
            <head>
                <title>Phntm</title>
                <!-- head /-->
            </head>
            <body class="relative">
                <header class="py-8 px-4 max-w-3xl mx-auto w-full">
                    <h1 class="text-3xl font-bold">Phntm</h1>
                </header>
                <main class="py-8 px-4 max-w-3xl mx-auto w-full flex flex-col item-stretch gap-2">
                    <!-- content /-->
                </main>
                <footer class="py-8 px-4 max-w-3xl mx-auto w-full">
                    <ul class="flex justify-end">
                        <li class="mr-4">
                            <a href="/">Home</a>
                        </li>
                        <li class="mr-4">
                            <a href="mailto: billy@bchubb.co.uk">Contact</a>
                        </li>
                        <li class="mr-4">
                            <a href="https://github.com/bchubb-web/phntm">Github</a>
                        </li>
                    </ul>
                </footer>
            </body>
        </html>
        HTML);
    }
}

