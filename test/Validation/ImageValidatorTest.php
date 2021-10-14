<?php
/**
 * Tests for image validation
 *
 * PHP version 7.4
 * @author        Ollie Lowson ( @ollielowson )
 */

// Created using PhpStorm: 14/10/2021, 10:25


namespace Validation;

use Ollielowson\StorageDemo\Behaviours\ImageValidator;
use Ollielowson\StorageDemo\Model\ImageFile;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

class ImageValidatorTest extends TestCase
{
    use ImageValidator;

    /** @test */
    public function testIsValidImage()
    {
        // given
        $image = (new ImageFile())->setFilename("no-more-catnip.png");

        // when
        $result = $this->isValidImage($image);

        // then
        assertTrue($result);
    }
}
