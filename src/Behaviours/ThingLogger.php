<?php
/**
 * Logger config
 *
 * PHP version 7.4
 * @author        Ollie Lowson ( @ollielowson )
 */

// Created using PhpStorm: 14/10/2021, 09:48

namespace Ollielowson\StorageDemo\Behaviours;

use Monolog\Handler\StreamHandler;
use Monolog\Logger as MonoLogger;

trait ThingLogger
{
    /** @var MonoLogger $logger */
    public $logger;

    public function getLogger(): MonoLogger {
        if (empty($this->logger)) {
            $this->logger = new MonoLogger('store log');
            $this->logger->pushHandler(new StreamHandler('logs/system.log'));
        }

        return $this->logger;
    }
}
