<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DateTime;

/**
 * Class Video Log
 *
 * @package App
 */
class VideoLog extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'video_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '*'
    ];

    /**
     * The rules for an Athlete .
     *
     * @var array
     */
    protected $rules = [
        'wrestler'   => 'required',
        'opponent'   => 'required',
        'weight'     => 'required',
        'match_date' => 'required',
    ];

    /**
     * Make sure to case variables accordingly
     *
     * @var array
     */
    protected $casts = [
        'id'                          => 'integer',
        'weight'                      => 'integer',
        'match_date'                  => 'date',
    ];

}