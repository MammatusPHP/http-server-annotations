<?php declare(strict_types=1);

namespace Mammatus\Http\Server\Annotations\WebSocket;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
final class Broadcast
{
    private string $realm;

    /**
     * @param mixed[] $values
     */
    public function __construct(array $values)
    {
        $this->realm = $values['realm'] ?? null;
    }

    public function realm(): string
    {
        return $this->realm;
    }
}
