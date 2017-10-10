<?php

namespace App\Types;

/**
 * Class PostStatus
 *
 * @package App\Types;
 */
class PostStatus extends \SplEnum
{
    const __default = self::Draft;

    const Draft = 'draft';
    const Publish = 'publish';
}