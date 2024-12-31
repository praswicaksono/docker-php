<?php
declare(strict_types=1);

namespace PRSW\Docker\Stream;

use Generator;

/**
 * @template T
 */
interface ResponseStreamInterface
{
    /**
     * @return Generator<null,null,T,void>
     */
    public function getGenerator(): Generator;

    public function close(): void;
}