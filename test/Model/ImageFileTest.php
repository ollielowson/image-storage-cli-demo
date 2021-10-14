<?php
/**
 * Image file tester
 *
 * PHP version 7.2
 * @author        Ollie Lowson ( @ollielowson )
 */

// Created using PhpStorm: 14/10/2021, 09:30


namespace Model;

use Ollielowson\StorageDemo\Model\ImageFile;
use PHPUnit\Framework\TestCase;

class ImageFileTest extends TestCase
{
    /** @test */
    public function itHasAFilename()
    {
        // given
        $imageFile = new ImageFile();

        // when
        $imageFile->setFilename("filename");

        // then
        $this->assertEquals("filename", $imageFile->getFilename());
    }
}
