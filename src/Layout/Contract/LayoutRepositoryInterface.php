<?php namespace Anomaly\Streams\Platform\Layout\Contract;

use Anomaly\Streams\Platform\Stream\Contract\StreamInterface;

/**
 * Interface LayoutRepositoryInterface
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
interface LayoutRepositoryInterface
{

    /**
     * Find a layout by it's stream and slug.
     *
     * @param StreamInterface $stream
     * @param                 $slug
     * @return LayoutInterface|null
     */
    public function findByStreamAndSlug(StreamInterface $stream, $slug);

}
