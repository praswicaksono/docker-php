<?php
declare(strict_types=1);

namespace PRSW\Docker\Model;

use Generator;
use PRSW\Docker\Stream\AbstractResponseStream;

/**
 * @template K Key of generator
 * @template V Value of generator
 */
final readonly class Stream
{
    public function __construct(private AbstractResponseStream $stream)
    {

    }

    /**
     * @return Generator<null,K,V,void>
     */
    public function stream(): Generator
    {
        yield from $this->stream->getGenerator();
    }

    public function close(): void
    {
        $this->stream->close();
    }
}