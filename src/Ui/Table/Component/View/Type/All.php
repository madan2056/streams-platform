<?php namespace Anomaly\Streams\Platform\Ui\Table\Component\View\Type;

use Anomaly\Streams\Platform\Ui\Table\Component\View\Query\AllQuery;
use Anomaly\Streams\Platform\Ui\Table\Component\View\View;

/**
 * Class All
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class All extends View
{

    /**
     * The view query.
     *
     * @var string
     */
    protected $query = AllQuery::class;
}
