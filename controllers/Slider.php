<?php namespace Yehiaa\SequenceSlider\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Slider Back-end Controller
 */
class Slider extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Yehiaa.SequenceSlider', 'sequenceslider', 'slider');
    }

    public function onDelete()
    {
        $checkedIds = post('checked');
        if ((is_array($checkedIds)) && (count($checkedIds) > 0)) {
            $deleted = \Yehiaa\SequenceSlider\Models\Slider::whereIn('id', $checkedIds)->delete();
            if (!$deleted) {
                return \Flash::error('sorry sliders have\'nt  been deleted ?');
            }
        }

        \Flash::success(\Lang::get('backend::lang.list.delete_selected_success', [
            'name' => 'deleted '
        ]));


        return $this->listRefresh();
    }
}