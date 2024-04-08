<?php

namespace Pages;

use bchubbweb\phntm\Resources\Page as PageTemplate;

class Page extends PageTemplate
{
    public function __construct() {
        parent::__construct();

        $this->setContent(<<<HTML
        <h2 class="text-xl mb-2">What is <span class="font-bold">phntm</span>?</h2>
        <p>In short, phntm is PHP implementation of NextJS and it's developer experience.</p>
        <p>A more verbose answer would be, phntm is a intuitive, structured, and opinionated PHP framework, which brings in modern practices from outside of the PHP ecosystem, but utilised in a way to comply with PHP's own standards and regulations.</p>
        <br>
        <h2 class="text-xl mb-2">Why would I use <span class="font-bold">phntm</span>?</h2>
        <p>Simply, why not?</p>
        <p>But in all seriousness, give it a try, as someone who's first taste of web frameworks was NextJS and React, using PHP and it's wide array of MVC frameworks was very different, GOOD, but different. I wondered why there was such a big difference between the <span="font-italic">structure</span> of these frameworks, and why no one had seemed to mix things up, on either side.</p>
        <p>So, I did.</p>
        <br>
        <h2 class="text-xl mb-2">Where it started</h2>
        <p>Initially phntm was a simple <a href="https://htmx.org/">HTMX</a> project, which ended up with me becoming obsessed with routing and all of the work that goes into them. As time went on I became distracted with work and other projects, until I had an idea: namespaces.</p>
        <p>Namespaces are a feature in PHP that allow you to organise your code into logical groups, and with PSR-4 classes are structured exactly like directory based routes in NextJS. So, I thought, why not make a PHP framework that uses namespaces as routes?</p>
        HTML);
    }
}

