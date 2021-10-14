<?php
/**
 * Command to greet the end user
 *
 * PHP version 7.4
 * @author        Ollie Lowson ( @ollielowson )
 */

// Created using PhpStorm: 13/10/2021, 22:07

namespace Ollielowson\StorageDemo\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Greet extends Command
{
    protected static $defaultName = 'greet';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($_ENV['GREETING']);

        return Command::SUCCESS;
    }
}
