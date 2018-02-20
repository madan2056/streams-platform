<?php namespace Anomaly\Streams\Platform\Layout;

use Anomaly\Streams\Platform\Layout\Contract\LayoutInterface;
use Anomaly\Streams\Platform\Layout\Contract\LayoutRepositoryInterface;
use Anomaly\Streams\Platform\Model\EloquentRepository;
use Anomaly\Streams\Platform\Stream\Contract\StreamInterface;

/**
 * Class LayoutRepository
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class LayoutRepository extends EloquentRepository implements LayoutRepositoryInterface
{

    /**
     * The layout model.
     *
     * @var LayoutModel
     */
    protected $model;

    /**
     * Create a new LayoutRepository instance.
     *
     * @param LayoutModel $model
     */
    public function __construct(LayoutModel $model)
    {
        $this->model = $model;
    }

    /**
     * Find a layout by it's stream and slug.
     *
     * @param StreamInterface $stream
     * @param                 $slug
     * @return LayoutInterface|null
     */
    public function findByStreamAndSlug(StreamInterface $stream, $slug)
    {
        return $this->model
            ->where('stream_id', $stream->getId())
            ->where('slug', $slug)
            ->first();
    }

}
