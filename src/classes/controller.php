<?php

namespace PhpWebsite;

class Controller
{
    private $page = null;

    public function __construct($page)
    {
        $this->page = $page;
    }
}