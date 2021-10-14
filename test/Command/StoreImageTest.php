<?php
/**
 * Test the store image command
 *
 * PHP version 7.2
 * @author        Ollie Lowson ( @ollielowson )
 * @copyright    2016-2021 System 15 Limited
 */

// Created using PhpStorm: 14/10/2021, 09:06


namespace Command;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use Ollielowson\StorageDemo\Command\Greet;
use Ollielowson\StorageDemo\Command\StoreImage;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Output\OutputInterface;

class StoreImageTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    /** @test */
    public function itExecutesWithProvidedFilename()
    {
        // Given
        $input = new ArgvInput(['filename' => 'FILENAME']);
        $output = \Mockery::mock(OutputInterface::class);
        $storeImage = new StoreImage();

        // expect


        // when
        $result = $storeImage->run($input, $output);

        // then
        $this->assertEquals(Command::SUCCESS, $result);
    }
}
