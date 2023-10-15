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

        return '<iframe src="' . $this->source . '"allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
    }
}