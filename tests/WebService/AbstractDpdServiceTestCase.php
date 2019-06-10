<?php

use PHPUnit\Framework\TestCase;

abstract class AbstractDpdServiceTestCase extends TestCase
{
    protected function createService(string $className)
    {
        $number = getenv('DPD_CLIENT_NUMBER');
        $key = getenv('DPD_CLIENT_KEY');
        if (empty($number) || empty($key)) {
            throw new \LogicException('Env not set DPD_CLIENT_NUMBER or DPD_CLIENT_KEY');
        }
        $refClass = new \ReflectionClass($className);
        return $refClass->newInstance($number, $key, true);
    }
}