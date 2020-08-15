<?php declare(strict_types=1);

namespace Mammatus\Http\Server\Annotations\WebSocket;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
final class Realm
{
    /**
     * @var string
     */
    private $realm;

    /**
     * @param string[] $vhosts
     */
    public function __construct(array $vhosts)
    {
        $this->realm = \current($vhosts);
    }

    /**
     * @return string
     */
    public function realm(): string
    {
        return $this->realm;
    }
}
