<?php namespace Anomaly\Streams\Platform\Layout;

use Anomaly\Streams\Platform\Model\EloquentModel;

/**
 * Class LayoutModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class LayoutModel extends EloquentModel
{

    /**
     * The model table.
     *
     * @var string
     */
    protected $table = 'streams_layouts';

    /**
     * Get the sections.
     *
     * @return array
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Get the sections attribute.
     *
     * @return array
     */
    public function getSectionsAttribute()
    {
        return unserialize($this->attributes['sections'] ?: 'a:0:{}');
    }

}
