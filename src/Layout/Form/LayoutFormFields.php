<?php namespace Anomaly\Streams\Platform\Layout\Form;

/**
 * Class LayoutFormFields
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class LayoutFormFields
{

    /**
     * Handle the fields.
     *
     * @param LayoutFormBuilder $builder
     */
    public function handle(LayoutFormBuilder $builder)
    {
        $builder->setFields(
            [
                'sections' => [
                    'type'   => 'anomaly.field_type.textarea',
                    'config' => [
                        'default_value' => serialize([]),
                    ],
                ],
            ]
        );
    }
}
