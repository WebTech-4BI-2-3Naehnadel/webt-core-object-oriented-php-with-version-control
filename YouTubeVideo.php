<?php
require_once 'AVideo.php';
class YouTubeVideo extends AVideo {
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

        return '<iframe class="box" src="'.$this->source.'"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>';
    }
}
