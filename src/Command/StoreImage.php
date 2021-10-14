<?php
/**
 * Command to handle storing image
 *
 * PHP version 7.2
 * @author        Ollie Lowson ( @ollielowson )
 */

// Created using PhpStorm: 14/10/2021, 09:05


namespace Ollielowson\StorageDemo\Command;

use Ollielowson\StorageDemo\Behaviours\ImageValidator;
use Ollielowson\StorageDemo\Behaviours\ThingLogger;
use Ollielowson\StorageDemo\Model\ImageFile;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class StoreImage extends \Symfony\Component\Console\Command\Command
{
    use ThingLogger, ImageValidator;

    const IMAGE_FAILED_VALIDATION = 'Image failed validation';
    const IMAGE_IS_VALID = 'Image is valid';

    protected static $defaultName = 'image:store';

    protected function configure()
    {
        parent::configure();

        $this->addArgument('filename', InputArgument::REQUIRED, 'Filename to store');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $filename = $input->getArgument('filename');
        $imageFile = (new ImageFile())->setFilename($filename);

        if (!$this->isValidImage($imageFile)) {
            $this->getLogger()->error(self::IMAGE_FAILED_VALIDATION, $this->getErrors());
            $output->writeln(self::IMAGE_FAILED_VALIDATION);
            return Command::INVALID;
        }

        $output->writeln(self::IMAGE_IS_VALID);
        $this->getLogger()->info('Storing ' . $filename);
        return Command::SUCCESS;
    }
}
