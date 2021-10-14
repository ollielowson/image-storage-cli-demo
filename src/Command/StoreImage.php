<?php
/**
 * Command to handle storing image
 *
 * PHP version 7.2
 * @author        Ollie Lowson ( @ollielowson )
 */

// Created using PhpStorm: 14/10/2021, 09:05


namespace Ollielowson\StorageDemo\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class StoreImage extends \Symfony\Component\Console\Command\Command
{
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        return Command::SUCCESS;
    }
}
