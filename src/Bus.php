<?php declare(strict_types=1);

namespace Mammatus\Http\Server\Annotations;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
final class Bus
{
    /**
     * @var string
     */
    private $bus;

    /**
     * @param string[] $busses
     */
    public function __construct(array $busses)
    {
        $this->bus = \current($busses);
    }

    /**
     * @return string
     */
    public function bus(): string
    {
        return $this->bus;
    }
}
