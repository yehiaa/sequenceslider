<?php namespace Yehiaa\SequenceSlider\Models;

use Model;

/**
 * Slider Model
 */
class Slider extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yehiaa_sequenceslider_sliders';


    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name' => 'required|unique:yehiaa_sequenceslider_sliders',
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
    public $hasMany = ['slideritems'=> 'Yehiaa\SequenceSlider\Models\SliderItem'];

}