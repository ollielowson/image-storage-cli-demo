<?php
/**
 * Unit test for Greet command
 *
 * PHP version 7.4
 * @author        Ollie Lowson ( @ollielowson )
 */

// Created using PhpStorm: 13/10/2021, 22:23


namespace Ollielowson\StorageDemo\Command;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Tester\CommandTester;

class GreetTest extends TestCase
{
    /** @test */
    public function itGreetsTheUser()
    {
        // Given
        $input = new ArgvInput([]);
        $output = \Mockery::mock(OutputInterface::class);
        $output->shouldReceive('writeLn');
        $greet = new Greet();

        // when
        $result = $greet->run($input, $output);

        // then
        $this->assertEquals(Command::SUCCESS, $result);
    }
}
