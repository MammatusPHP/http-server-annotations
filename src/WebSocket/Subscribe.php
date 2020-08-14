<?php declare(strict_types=1);

namespace Mammatus\Http\Server\Annotations\WebSocket;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
final class Subscribe
{
    /**
     * @var string
     */
    private $topic;

    /**
     * @param string[] $topics
     */
    public function __construct(array $topics)
    {
        $this->topic = \current($topics);
    }

    /**
     * @return string
     */
    public function topic(): string
    {
        return $this->topic;
    }
}
