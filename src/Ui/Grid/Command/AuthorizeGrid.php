<?php namespace Anomaly\Streams\Platform\Ui\Grid\Command;

use Anomaly\Streams\Platform\Ui\Grid\GridAuthorizer;
use Anomaly\Streams\Platform\Ui\Grid\GridBuilder;

/**
 * Class AuthorizeGrid
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AuthorizeGrid
{

    /**
     * The grid builder.
     *
     * @var GridBuilder
     */
    protected $builder;

    /**
     * Create a new AuthorizeGrid instance.
     *
     * @param GridBuilder $builder
     */
    public function __construct(GridBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Handle the command.
     *
     * @param GridAuthorizer $authorizer
     */
    public function handle(GridAuthorizer $authorizer)
    {
        $authorizer->authorize($this->builder);
    }
}
