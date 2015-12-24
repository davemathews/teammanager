<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Athlete
 *
 * @package App
 */
class Athlete extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'athletes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'weight',
        'age',
        'dob',
        'signed',
        'signed_date',
        'amount',
        'high_school_graduation_year',
        'college_graduation_year',
        'roster_id'
    ];

    /**
     * The rules for an Athlete .
     *
     * @var array
     */
    protected $rules = [
        'first_name' => 'required',
        'last_name'  => 'required',
    ];

    /**
     * Make sure to case variables accordingly
     *
     * @var array
     */
    protected $casts = [
        'id'                          => 'integer',
        'roster_id'                   => 'integer',
        'weight'                      => 'integer',
        'age'                         => 'integer',
        'signed'                      => 'integer',
        'high_school_graduation_year' => 'integer',
        'college_graduation_year'     => 'integer',
    ];

    /**
     * Defines relationship between Athletes and Rosters
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roster()
    {
        return $this->belongsTo('App\Roster');
    }
}
