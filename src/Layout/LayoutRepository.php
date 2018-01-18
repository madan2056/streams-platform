<?php namespace Anomaly\Streams\Platform\Field;

use Anomaly\Streams\Platform\Layout\Contract\LayoutRepositoryInterface;
use Anomaly\Streams\Platform\Layout\LayoutModel;
use Anomaly\Streams\Platform\Model\EloquentRepository;

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
}
