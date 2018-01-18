<?php namespace Anomaly\Streams\Platform\Layout\Form;

use Anomaly\Streams\Platform\Stream\Contract\StreamInterface;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class LayoutFormBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class LayoutFormBuilder extends FormBuilder
{

    /**
     * @TODO remove this when finished
     * @var bool
     */
    protected $model = false;

    /**
     * The stream instance.
     *
     * @var StreamInterface
     */
    protected $stream;

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [
        'sections' => [
            'type' => 'anomaly.field_type.textarea',
        ],
    ];

    /**
     * The form buttons.
     *
     * @var array
     */
    protected $buttons = [
        'add_tabs'    => [
            'text'     => 'Add Tabs',
            'data-add' => 'tabs',
        ],
        'add_section' => [
            'text'     => 'Add Tabs',
            'data-add' => 'section',
        ],
    ];

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [
        'scripts.js' => [
            'streams::js/layout/layout.js',
        ],
    ];

    /**
     * Get the stream.
     *
     * @return StreamInterface
     */
    public function getStream()
    {
        return $this->stream;
    }

    /**
     * Set the stream.
     *
     * @param StreamInterface $stream
     * @return $this
     */
    public function setStream(StreamInterface $stream)
    {
        $this->stream = $stream;

        return $this;
    }

}
