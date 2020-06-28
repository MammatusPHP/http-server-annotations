<?php declare(strict_types=1);

namespace Mammatus\Http\Server\Annotations;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
final class Vhost
{
    /**
     * @var string
     */
    private $vhost;

    /**
     * @param string[] $vhosts
     */
    public function __construct(array $vhosts)
    {
        $this->vhost = \current($vhosts);
    }

    /**
     * @return string
     */
    public function vhost(): string
    {
        return $this->vhost;
    }
}
