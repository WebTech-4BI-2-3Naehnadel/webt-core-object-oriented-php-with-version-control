<?php

abstract class AVideo implements Video {
    private string $name;

    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}