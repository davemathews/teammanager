<?php

/**
 * AthleteRoster  model config
 */

return array(

    'title' => 'Athlete Rosters',

    'single' => 'Athlete Roster',

    'model' => 'App\AthleteRoster',

    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'roster_id',
        'direction' => 'asc',
    ),

    /**
     * The display columns
     */
    'columns' => array(
        'roster' => array(
            'title' => 'Roster',
            'relationship' => 'roster',
            'select' => "(:table).year",
        ),
        'athlete' => array(
            'title' => 'Athlete',
            'relationship' => 'athlete',
            'select' => "CONCAT((:table).first_name, ' ', (:table).last_name)",
        ),
        'amount' => array(
            'title' => 'Amount',
        ),
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'roster' => array(
            'title' => 'Roster',
            'type' => 'relationship',
            'name_field' => 'year',
        ),
        'athlete' => array(
            'title' => 'Athlete',
            'type' => 'relationship',
            'name_field' => 'last_name',
        ),
        'amount' => array(
            'title' => 'Amount',
            'type' => 'number',
            'symbol' => '$', //optional, defaults to ''
            'decimals' => 2, //optional, defaults to 0
            'thousands_separator' => ',', //optional, defaults to ','
            'decimal_separator' => '.', //optional, defaults to '.'
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'roster' => array(
            'title' => 'Roster',
            'type' => 'relationship',
            'name_field' => 'year',
        ),
        'athlete' => array(
            'title' => 'Athlete',
            'type' => 'relationship',
            'name_field' => 'last_name',
        ),
        'amount' => array(
            'title' => 'Amount',
            'type' => 'number',
            'symbol' => '$', //optional, defaults to ''
            'decimals' => 2, //optional, defaults to 0
            'thousands_separator' => ',', //optional, defaults to ','
            'decimal_separator' => '.', //optional, defaults to '.'
        ),
    ),
);

