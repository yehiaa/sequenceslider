<?php namespace Yehiaa\SequenceSlider\Models;

use Model;

/**
 * SliderItem Model
 */
class SliderItem extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yehiaa_sequenceslider_slider_items';

    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        // 'image' => '',
        // 'title' => '',
        // 'subtitle' => '',
        // 'paragraph' => '',

        // 'linkText' => '',
        // 'link' => '',
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = ['image'=> ['System\Models\File']];
    public $attachMany = [];

}