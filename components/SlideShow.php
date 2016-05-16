<?php namespace Yehiaa\Sequenceslider\Components;

use Cms\Classes\ComponentBase;
use Yehiaa\Sequenceslider\Models\Slider;

class SlideShow extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'slideShow Component',
            'description' => 'basic sequence slider .. hay it\'s still in beta :) '
        ];
    }

    public function defineProperties()
    {
        return [
            'slider' => [
                'description'       => 'select slider ',
                'title'             => 'select slider ',
                'required'          => true,
                'type'              => 'dropdown',
            ],
        ];
    }

    public function sliderItems()
    {
        return Slider::find($this->property("slider"))->slideritems ;
    }

    public function getSliderOptions()
    {
        return Slider::lists("name", "id") ;
    }


    public function onRun()
    {
        $this->addCss('assets/css/sequence-theme.modern-slide-in.css');

        $this->addJs('assets/js/sequence.js');
        $this->addJs('assets/js/sequence-theme.modern-slide-in.js');
    }

}