<?php

namespace Pages;

use bchubbweb\phntm\Resources\Page as PageTemplate;

class Page extends PageTemplate
{
    public function __construct() {
        parent::__construct();

        $this->setContent(<<<HTML
                <h1>Home</h1>
        HTML);
    }
}

