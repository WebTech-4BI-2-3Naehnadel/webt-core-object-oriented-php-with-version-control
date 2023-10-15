<?php

namespace Naehnadeln\ObjectOrientedPhpWithVersionControl;

class VimeoVideo extends AVideo
{
    private string $source;

    public function __construct($name, $source)
    {
        parent::__construct($name);
        $this->source = $source;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getEmbededCode(): string
    {

        return <<<ELEMENT
<div class="box2">
<h1> Title: "{$this->getName()}"</h1>
<h2>Origin: Vimeo</h2>
<iframe class="box" src="{$this->getSource()}" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
</div>
ELEMENT;
    }
}