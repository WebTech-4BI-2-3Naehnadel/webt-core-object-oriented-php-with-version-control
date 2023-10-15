<?php
require_once 'AVideo.php';
class VimeoVideo extends AVideo
{
    private string $source;

    public function __construct($name, $source) {
        parent::__construct($name);
        $this->source = $source;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getEmbededCode(): string
    {

        return '<iframe src="'.$this->source.'" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
    }
}