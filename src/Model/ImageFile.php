<?php
/**
 * Basic definition of an image
 *
 * PHP version 7.2
 * @author        Ollie Lowson ( @ollielowson )
 */

// Created using PhpStorm: 14/10/2021, 09:28


namespace Ollielowson\StorageDemo\Model;

class ImageFile
{
    private $filename;

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param  mixed  $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

}
