<?php declare(strict_types=1);

namespace Mammatus\Http\Server\Annotations\WebSocket;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
final class Subscription
{
    private string $realm;
    private string $bus;
    private string $topic;
    public string $command;

    /**
     * @param mixed[] $values
     */
    public function __construct(array $values)
    {
        $this->realm = $values['realm'] ?? null;
        $this->bus = $values['bus'] ?? null;
        $this->topic = $values['topic'] ?? null;
        $this->command = $values['command'] ?? null;
    }

    public function realm(): string
    {
        return $this->realm;
    }

    public function bus(): string
    {
        return $this->bus;
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
