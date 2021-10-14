<?php
/**
 * Logger config
 *
 * @todo Done as a singleton for now - ideally this would be handled by DI:
 * * Harder to test
 * * Harder to customise
 * * Generally to be avoided :(
 *
 * PHP version 7.4
 * @author        Ollie Lowson ( @ollielowson )
 */

// Created using PhpStorm: 14/10/2021, 09:48

namespace Ollielowson\StorageDemo\Config;

use Monolog\Handler\StreamHandler;
use Monolog\Logger as MonoLogger;

class Logger
{
    /** @var MonoLogger $logger */
    public static $logger;

    public static function getLogger(): MonoLogger {
        if (empty(self::$logger)) {
            self::$logger = new MonoLogger('store log');
            self::$logger->pushHandler(new StreamHandler('logs/system.log'));
        }

        return self::$logger;
    }
}
