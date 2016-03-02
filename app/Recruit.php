<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;

/**
 * Class Recruit
 *
 * @package App
 */
class Recruit extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recruits';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'city',
        'state',
        'weight',
        'age',
        'dob',
        'high_school',
        'high_school_graduation_year',
        'gpa',
        'act',
        'sat',
        'reading_taken',
        'intended_major',
        'signed',
        'signed_date',
        'offer',
        'declined',
        'declined_date',
        'school_declined_for',
        'roster_id',
        'recruitment_form_info'
    ];

    /**
     * The rules for a Recruit .
     *
     * @var array
     */
    protected $rules = [
        'first_name' => 'required',
        'last_name'  => 'required',
        'email'      => 'email',
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
        'high_school_graduation_year' => 'integer',
        'act'                         => 'integer',
        'sat'                         => 'integer',
        'reading_taken'               => 'integer',
        'signed'                      => 'integer',
        'offer'                       => 'integer',
        'declined'                    => 'integer',
    ];

    public function setAgeAttribute($value) {
        if(empty($this->attributes['dob'])) {
            $this->attributes['age'] = '';
        }
        $date = new DateTime($this->attributes['dob']." 00:00:00");
        $now = new DateTime();
        $interval = $now->diff($date);
        $this->attributes['age'] =  $interval->y;
    }

    /**
     * Defines relationship between Recruits and RecruitNotes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recruitNotes()
    {
        return $this->hasMany('App\RecruitNote');
    }

    /**
     * Defines relationship between Recruits and Rosters
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roster()
    {
        return $this->belongsTo('App\Roster');
    }
}
