<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RecruitNote
 *
 * @package App
 */
class RecruitNote extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recruit_notes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'recruit_id',
        'contact_date',
        'contacted_how',
        'note'
    ];

    /**
     * The rules for an Match .
     *
     * @var array
     */
    protected $rules = [
        'recruit_id' => 'required',
        'note'       => 'required',
    ];

    /**
     * Make sure to case variables accordingly
     *
     * @var array
     */
    protected $casts = [
        'id'         => 'integer',
        'recruit_id' => 'integer',
    ];

    /**
     * Defines relationship between RecruitNote and Recruit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recruit()
    {
        return $this->belongsTo('App\Recruit');
    }
}
