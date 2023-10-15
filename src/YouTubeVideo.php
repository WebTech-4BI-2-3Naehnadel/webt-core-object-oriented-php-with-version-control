<?php

namespace Naehnadeln\ObjectOrientedPhpWithVersionControl;

class YouTubeVideo extends AVideo
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

        return <<< ELEMENT
<div class="box2">
<h1>Title: "{$this->getName()}" </h1>
<h2>Origin: YouTube</h2>
<iframe class="box" src="{$this->getSource()}"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
</div>
ELEMENT;
    }
}
