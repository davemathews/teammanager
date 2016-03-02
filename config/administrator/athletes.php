<?php

/**
 * Athletes  model config
 */

return array(

    'title' => 'Athletes',

    'single' => 'Athlete',

    'model' => 'App\Athlete',

    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'last_name',
        'direction' => 'asc',
    ),

    /**
     * The display columns
     */
    'columns' => array(
        'first_name' => array(
            'title' => 'First Name',
        ),
        'last_name' => array(
            'title' => 'Last Name',
        ),
        'email' => array(
            'title' => 'Email',
        ),
        'phone' => array(
            'title' => 'Phone',
        ),
        'city' => array(
            'title' => 'City',
        ),
        'state' => array(
            'title' => 'State',
        ),
        'weight' => array(
            'title' => 'Weight',
        ),
        'age' => array(
            'title' => 'Age',
        ),
        'dob' => array(
            'title' => 'DOB',
        ),
        'college_graduation_year' => array(
            'title' => 'College Grad',
        ),
        'rosters_all' => array(
            'title' => 'Roster',
            'relationship' => 'rosters',
            'select' => "GROUP_CONCAT((:table).year)",
        ),
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'first_name' => array(
            'title' => 'First Name',
            'type' => 'text',
        ),
        'last_name' => array(
            'title' => 'Last Name',
            'type' => 'text',
        ),
        'email' => array(
            'title' => 'Email',
            'type' => 'text',
        ),
        'phone' => array(
            'title' => 'Phone',
            'type' => 'text',
        ),
        'city' => array(
            'title' => 'City',
            'type' => 'text',
        ),
        'state' => array(
            'title' => 'State',
            'type' => 'text',
        ),
        'weight' => array(
            'title' => 'Weight',
            'type' => 'number',
        ),
        'age' => array(
            'title' => 'Age',
            'type' => 'number',
        ),
        'dob' => array(
            'title' => 'DOB',
            'type' => 'date',
        ),
        'college_graduation_year' => array(
            'title' => 'College Grad',
            'type' => 'number',
            'thousands_separator' => '',
        ),
        'rosters' => array(
            'title' => 'Roster',
            'type' => 'relationship',
            'name_field' => 'year',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'first_name' => array(
            'title' => 'First Name',
            'type' => 'text',
        ),
        'last_name' => array(
            'title' => 'Last Name',
            'type' => 'text',
        ),
        'email' => array(
            'title' => 'Email',
            'type' => 'text',
        ),
        'phone' => array(
            'title' => 'Phone',
            'type' => 'text',
        ),
        'city' => array(
            'title' => 'City',
            'type' => 'text',
        ),
        'state' => array(
            'title' => 'State',
            'type' => 'text',
        ),
        'weight' => array(
            'title' => 'Weight',
            'type' => 'number',
        ),
        'age' => array(
            'title' => 'Age',
            'type' => 'number',
        ),
        'dob' => array(
            'title' => 'DOB',
            'type' => 'date',
        ),
        'college_graduation_year' => array(
            'title' => 'College Grad',
            'type' => 'number',
            'thousands_separator' => '',
        ),
        'rosters' => array(
            'title' => 'Roster',
            'type' => 'relationship',
            'name_field' => 'year',
        ),
    ),
);

