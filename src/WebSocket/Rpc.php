<?php declare(strict_types=1);

namespace Mammatus\Http\Server\Annotations\WebSocket;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
final class Rpc
{
    private ?string $realm;
    private ?string $bus;
    private ?string $rpc;
    private ?string $command;
    private ?string $transformer;

    /**
     * @param mixed[] $values
     */
    public function __construct(array $values)
    {
        $this->realm = $values['realm'] ?? null;
        $this->bus = $values['bus'] ?? null;
        $this->rpc = $values['rpc'] ?? null;
        $this->command = $values['command'] ?? null;
        $this->transformer = $values['transformer'] ?? null;
    }

    public function realm(): ?string
    {
        return $this->realm;
    }

    public function bus(): ?string
    {
        return $this->bus;
    }

    public function rpc(): ?string
    {
        return $this->rpc;
    }

    public function command(): ?string
    {
        return $this->command;
    }

    public function transformer(): ?string
    {
        return $this->transformer;
    }
}
