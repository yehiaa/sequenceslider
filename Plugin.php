<?php namespace Yehiaa\SequenceSlider;

use Backend;
use System\Classes\PluginBase;

/**
 * SequenceSlider Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'SequenceSlider',
            'description' => 'simple sequence slider plugin ',
            'author'      => 'Yehia AbdulHamid yehia.abdulhamid@gmail.com',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        // return []; // Remove this line to activate

        return [
            'Yehiaa\SequenceSlider\Components\SlideShow' => 'slideShow',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'yehiaa.sequenceslider.some_permission' => [
                'tab' => 'SequenceSlider',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        // return []; // Remove this line to activate

        return [
            'sequenceslider' => [
                'label'       => 'Sequence Slider',
                'url'         => Backend::url('yehiaa/sequenceslider/slider'),
                'icon'        => 'icon-leaf',
                'permissions' => ['yehiaa.sequenceslider.*'],
                'order'       => 500,
            ],
        ];
    }

}
