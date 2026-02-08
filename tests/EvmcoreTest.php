<?php
/**
 * Tests for EVMCore
 */

use PHPUnit\Framework\TestCase;
use Evmcore\Evmcore;

class EvmcoreTest extends TestCase {
    private Evmcore $instance;

    protected function setUp(): void {
        $this->instance = new Evmcore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Evmcore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
