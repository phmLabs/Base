<?php

namespace phmLabs\Base\Www\Html\Tag;

class Body
{
    private $content;

    public function __construct($htmlContent)
    {
        $this->content = $htmlContent;
    }
}