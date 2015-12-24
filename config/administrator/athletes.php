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
        'weight' => array(
            'title' => 'Weight',
        ),
        'age' => array(
            'title' => 'Age',
        ),
        'dob' => array(
            'title' => 'DOB',
        ),
        'signed' => array(
            'title' => 'Signed',
        ),
        'signed_date' => array(
            'title' => 'Signed Date',
        ),
        'amount' => array(
            'title' => 'Amount',
        ),
        'high_school_graduation_year' => array(
            'title' => 'High School Grad',
        ),
        'college_graduation_year' => array(
            'title' => 'College Grad',
        ),
        'roster' => array(
            'title' => 'Roster',
            'relationship' => 'roster',
            'select' => "(:table).name",
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
        'signed' => array(
            'title' => 'Signed',
            'type' => 'bool',
        ),
        'signed_date' => array(
            'title' => 'Signed Date',
            'type' => 'date',
        ),
        'amount' => array(
            'title' => 'Amount',
            'type' => 'number',
            'symbol' => '$', //optional, defaults to ''
            'decimals' => 2, //optional, defaults to 0
            'thousands_separator' => ',', //optional, defaults to ','
            'decimal_separator' => '.', //optional, defaults to '.'
        ),
        'high_school_graduation_year' => array(
            'title' => 'High School Grad',
            'type' => 'number',
        ),
        'college_graduation_year' => array(
            'title' => 'College Grad',
            'type' => 'number',
        ),
        'roster' => array(
            'title' => 'Roster',
            'type' => 'relationship',
            'name_field' => 'name',
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
        'signed' => array(
            'title' => 'Signed',
            'type' => 'bool',
        ),
        'signed_date' => array(
            'title' => 'Signed Date',
            'type' => 'date',
        ),
        'amount' => array(
            'title' => 'Amount',
            'type' => 'number',
            'symbol' => '$', //optional, defaults to ''
            'decimals' => 2, //optional, defaults to 0
            'thousands_separator' => ',', //optional, defaults to ','
            'decimal_separator' => '.', //optional, defaults to '.'
        ),
        'high_school_graduation_year' => array(
            'title' => 'High School Grad',
            'type' => 'number',
        ),
        'college_graduation_year' => array(
            'title' => 'College Grad',
            'type' => 'number',
        ),
        'roster' => array(
            'title' => 'Roster',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
    ),
);

