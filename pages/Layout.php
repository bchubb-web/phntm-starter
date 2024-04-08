<?php

namespace Pages;
 
use bchubbweb\phntm\Resources\Layout as LayoutTemplate;

class Layout extends LayoutTemplate
{
    public function __construct() {

        $this->setContent(<<<HTML
        <html>
            <head>
                <title>Phntm</title>
                <script src="https://cdn.tailwindcss.com"></script>
                <!-- head /-->
            </head>
            <body class="relative">
                <header class="py-8 px-4 max-w-3xl mx-auto w-full">
                    <h1 class="text-3xl font-bold">Phntm</h1>
                </header>
                <main class="py-8 px-4 max-w-3xl mx-auto w-full">
                    <!-- content /-->
                </main>
                <footer class="py-8 px-4 max-w-3xl mx-auto w-full">
                    <ul class="flex justify-end">
                        <li class="mr-4">
                            <a href="/">Home</a>
                        </li>
                        <li class="mr-4">
                            <a href="/about">About</a>
                        </li>
                        <li class="mr-4">
                            <a href="/contact">Contact</a>
                        </li>
                    </ul>
                </footer>
            </body>
        </html>
        HTML);
    }
}

