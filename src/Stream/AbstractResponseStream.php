<?php
declare(strict_types=1);

namespace PRSW\Docker\Stream;

use Generator;

/**
 * @template K
 * @template V
 */
abstract class AbstractResponseStream
{

    /**
     * @return Generator<null,K,V,void>
     */
    abstract public function getGenerator(): Generator;

    abstract public function close(): void;
}