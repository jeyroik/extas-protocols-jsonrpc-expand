<?php
namespace tests\protocols;

use Dotenv\Dotenv;
use extas\components\http\TSnuffHttp;
use extas\components\protocols\ProtocolJsonRpcExpand;
use PHPUnit\Framework\TestCase;

/**
 * Class ProtocolJsonRpcExpandTest
 *
 * @package tests\protocols
 * @author jeyroik <jeyroik@gmail.com>
 */
class ProtocolJsonRpcExpandTest extends TestCase
{
    use TSnuffHttp;

    protected function setUp(): void
    {
        parent::setUp();
        $env = Dotenv::create(getcwd() . '/tests/');
        $env->load();
    }

    public function testProtocol()
    {
        $protocol = new ProtocolJsonRpcExpand();
        $args = ['expand' => ['from-header']];

        $protocol($args, $this->getPsrRequest());

        $this->assertEquals(
            ['expand' => ['from-header', 'from-jsonrpc']],
            $args,
            'Incorrect args: ' . print_r($args, true)
        );
    }
}
