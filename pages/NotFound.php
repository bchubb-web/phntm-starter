<?php

namespace Pages;

use bchubbweb\phntm\Resources\Page as PageTemplate;

class NotFound extends PageTemplate
{
    public function __construct() {
        parent::__construct();

        $this->setContent(<<<HTML
            <h1>404</h1>
        HTML);
    }
}
