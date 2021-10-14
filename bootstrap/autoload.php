<?php
/**
 * App setup file
 *
 * PHP Version 7.4
 * @author		Ollie Lowson ( @ollielowson )
 */

 // Created using PHPStorm: 2021-10-13, 22:41

// Enable composer PSR-4 autoloading
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

// Load environment config
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->safeLoad();
