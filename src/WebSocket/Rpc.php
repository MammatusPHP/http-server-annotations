<?php declare(strict_types=1);

namespace Mammatus\Http\Server\Annotations\WebSocket;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
final class Rpc
{
    /**
     * @var string
     */
    private $rpc;

    /**
     * @param string[] $rpc
     */
    public function __construct(array $rpc)
    {
        $this->rpc = \current($rpc);
    }

    /**
     * @return string
     */
    public function rpc(): string
    {
        return $this->rpc;
    }
}
