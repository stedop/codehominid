<?php declare(strict_types=1);

namespace App\Types;

use MyCLabs\Enum\Enum;

/**
 * Class PostStatus
 *
 * @package App\Types;
 */
class PostStatus extends Enum
{
    const __default = self::Draft;

    const Draft = 'draft';
    const Publish = 'publish';
}