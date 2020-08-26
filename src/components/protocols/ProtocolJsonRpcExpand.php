<?php
namespace extas\components\protocols;

use extas\components\expands\Expand;
use extas\components\http\THasJsonRpcRequest;
use extas\components\Item;
use extas\interfaces\http\IHasPsrRequest;
use Psr\Http\Message\RequestInterface;

/**
 * Class ProtocolJsonRpcExpand
 * 
 * @package extas\components\protocols
 * @author jeyroik <jeyroik@gmail.com>
 */
class ProtocolJsonRpcExpand extends Item
{
    public const PARAM__EXPAND = 'expand';

    use THasJsonRpcRequest;

    /**
     * @param array $args
     * @param RequestInterface $request
     */
    public function __invoke(array &$args, RequestInterface $request)
    {
        $this->config[IHasPsrRequest::FIELD__PSR_REQUEST] = $request;
        $jsonRpcRequest = $this->getJsonRpcRequest();
        $params = $jsonRpcRequest->getParams([]);
        $current = $args[Expand::ARG__EXPAND] ?? [];

        if (isset($params[static::PARAM__EXPAND])) {
            $args[Expand::ARG__EXPAND] = array_merge(
                $current,
                $this->normalizeExpand($params[static::PARAM__EXPAND])
            );
        }
    }

    /**
     * @param array $expands
     * @return array
     */
    protected function normalizeExpand(array $expands): array
    {
        foreach ($expands as $index => $expand) {
            $expands[$index] = trim(strtolower($expand));
        }

        return $expands;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return 'extas.protocol.jsonrpc.expand';
    }
}
