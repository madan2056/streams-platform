<?php namespace Anomaly\Streams\Platform\Layout\Form;

use Anomaly\Streams\Platform\Layout\Contract\LayoutRepositoryInterface;

/**
 * Class LayoutFormSections
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class LayoutFormSections
{

    /**
     * Handle the sections.
     *
     * @param LayoutFormBuilder $builder
     */
    public function handle(LayoutFormBuilder $builder, LayoutRepositoryInterface $layouts)
    {
        $builder->setSections([]);

        if ($layout = $layouts->findByStreamAndSlug($builder->getStream(), $builder->getLayout())) {
            $builder->setSections($layout->getSections());
        }
    }
}
