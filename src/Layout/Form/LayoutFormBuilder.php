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
     * The layout slug.
     *
     * @var string
     */
    protected $layout;

    /**
     * The form fields.
     *
     * @var string|array
     */
    protected $fields = LayoutFormFields::class;

    /**
     * The form sections.
     *
     * @var string|array
     */
    protected $sections = LayoutFormSections::class;

    /**
     * The form actions.
     *
     * @var array
     */
    protected $actions = [
        'save',
    ];

    /**
     * The form buttons.
     *
     * @var array
     */
    protected $buttons = [
        'add_section' => [
            'button' => 'add',
            'type'   => 'primary',
            'text'   => 'Add Section',
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

    /**
     * Get the layout.
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Set the layout.
     *
     * @param $layout
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;

        return $this;
    }

}
