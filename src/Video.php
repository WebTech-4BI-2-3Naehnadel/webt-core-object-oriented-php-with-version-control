<?php

namespace Naehnadeln\ObjectOrientedPhpWithVersionControl;
interface Video
{
    public function getName(): string;

    public function getEmbededCode(): string;

    public function getSource(): string;
}
