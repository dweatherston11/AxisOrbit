<?php
/**
 * Tests for AxisOrbit
 */

use PHPUnit\Framework\TestCase;
use Axisorbit\Axisorbit;

class AxisorbitTest extends TestCase {
    private Axisorbit $instance;

    protected function setUp(): void {
        $this->instance = new Axisorbit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Axisorbit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
