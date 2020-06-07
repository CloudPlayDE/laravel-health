<?php

namespace PragmaRX\Health\Tests\PhpUnit\Support;

use PragmaRX\Health\Support\Yaml;
use PHPUnit\Framework\TestCase;

class YamlTest extends TestCase
{
    public function testCanParseStrRandom()
    {
        $yaml = new Yaml();
        $results = $yaml->loadYamlFromDir(__DIR__ . '/../__files');

        self::assertCount(2,$results);
    }
}
