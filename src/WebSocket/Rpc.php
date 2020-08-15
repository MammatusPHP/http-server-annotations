<?php declare(strict_types=1);

namespace Mammatus\Http\Server\Annotations\WebSocket;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
final class Rpc
{
    private string $rpc;

    public string $command;

    /**
     * @param mixed[] $values
     */
    public function __construct(array $values)
    {
        $this->rpc = $values['rpc'] ?? null;
        $this->command = $values['command'] ?? null;
    }

    public function rpc(): string
    {
        return $this->rpc;
    }

    public function command(): string
    {
        return $this->command;
    }
}
