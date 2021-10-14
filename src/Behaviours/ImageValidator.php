<?php
/**
 * Trait for image validation
 *
 * PHP version 7.4
 * @author        Ollie Lowson ( @ollielowson )
 */

// Created using PhpStorm: 14/10/2021, 10:19


namespace Ollielowson\StorageDemo\Behaviours;

use Ollielowson\StorageDemo\Behaviours\ThingLogger;
use Ollielowson\StorageDemo\Model\ImageFile;

trait ImageValidator
{
    protected $errors = [];

    public function getErrors()
    {
        return $this->errors;
    }

    public function isValidImage(ImageFile $imageFile)
    {
        if (empty($imageFile->getFilename())) {
            $this->errors[] = 'No filename provided';
            return false;
        }

        if (!file_exists($imageFile->getFilename())) {
            $this->errors[] = 'File does not exist';
            return false;
        }

        return true;
    }
}
