<?php namespace Anomaly\Streams\Platform\Addon\Module;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Foundation\Application;

/**
 * Class ModuleServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Platform\Addon\Module
 */
class ModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Create a new ModuleServiceProvider instance.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);

        $this->app['events']->listen(
            'streams.boot',
            '\Anomaly\Streams\Platform\Addon\Module\ModuleListener@whenStreamsIsBooting'
        );

        $this->app['events']->listen(
            'Anomaly.Streams.Platform.Addon.*',
            '\Anomaly\Streams\Platform\Addon\Module\ModuleListener'
        );

        $this->app->bind(
            'Anomaly\Streams\Platform\Addon\Module\ModuleModel',
            config('streams.modules.model')
        );

        $this->app->bind(
            'Anomaly\Streams\Platform\Addon\Module\Contract\ModuleRepositoryInterface',
            config('streams.modules.repository')
        );
    }
}
