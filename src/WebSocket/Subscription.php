<?php declare(strict_types=1);

namespace Mammatus\Http\Server\Annotations\WebSocket;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
final class Subscription
{
    private string $topic;

    public string $command;

    /**
     * @param mixed[] $values
     */
    public function __construct(array $values)
    {
        $this->topic = $values['topic'] ?? null;
        $this->command = $values['command'] ?? null;
    }

    public function topic(): string
    {
        return $this->topic;
    }

    public function command(): string
    {
        return $this->command;
    }
}
