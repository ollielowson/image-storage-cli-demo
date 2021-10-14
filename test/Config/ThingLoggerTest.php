<?php
/**
 * Tests for logging
 *
 * PHP version 7.4
 * @author        Ollie Lowson ( @ollielowson )
 */

// Created using PhpStorm: 14/10/2021, 10:28


namespace Config;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\Mock;
use Monolog\Logger;
use Ollielowson\StorageDemo\Behaviours\ThingLogger;
use PHPUnit\Framework\TestCase;

class ThingLoggerTest extends TestCase
{
    use ThingLogger, MockeryPHPUnitIntegration;

    protected function setUp() : void
    {
        parent::setUp();

        $this->logger = \Mockery::mock(Logger::class);
    }

    /** @test */
    public function itLogsAThing()
    {
        // expect
        $this->logger->shouldReceive('info')->once();

        // when
        $this->logger->info('O hai');
    }
}
