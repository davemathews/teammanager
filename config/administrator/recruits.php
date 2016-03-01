<?php

/**
 * Recruits  model config
 */

return array(

    'title' => 'Recruits',

    'single' => 'Recruit',

    'model' => 'App\Recruit',

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
        'high_school' => array(
            'title' => 'High School',
        ),
        'high_school_graduation_year' => array(
            'title' => 'High School Grad',
        ),
        'gpa' => array(
            'title' => 'GPA',
        ),
        'act' => array(
            'title' => 'ACT',
        ),
        'sat' => array(
            'title' => 'SAT',
        ),
        'reading_taken' => array(
            'title' => 'Reading Taken',
            'select' => "IF((:table).reading_taken, 'yes', 'no')",
        ),
        'intended_major' => array(
            'title' => 'Intended Major',
        ),
        'signed' => array(
            'title' => 'Signed',
            'select' => "IF((:table).signed, 'yes', 'no')",
        ),
        'signed_date' => array(
            'title' => 'Signed Date',
        ),
        'offer' => array(
            'title' => 'Offer',
        ),
        'declined' => array(
            'title' => 'Declined',
            'select' => "IF((:table).declined, 'yes', 'no')",
        ),
        'declined_date' => array(
            'title' => 'Declined Date',
        ),
        'school_declined_for' => array(
            'title' => 'School Declined For',
        ),
        'roster' => array(
            'title' => 'Roster',
            'relationship' => 'roster',
            'select' => "(:table).year",
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
        'high_school' => array(
            'title' => 'High School',
            'type' => 'text',
        ),
        'high_school_graduation_year' => array(
            'title' => 'High School Grad',
            'type' => 'number',
            'thousands_separator' => '',
        ),
        'gpa' => array(
            'title' => 'GPA',
            'type' => 'number',
            'decimals' => 2,
            'thousands_separator' => '',
        ),
        'act' => array(
            'title' => 'ACT',
            'type' => 'number',
        ),
        'sat' => array(
            'title' => 'SAT',
            'type' => 'number',
        ),
        'reading_taken' => array(
            'title' => 'Reading Taken',
            'type' => 'bool',
        ),
        'intended_major' => array(
            'title' => 'Intended Major',
            'type' => 'text',
        ),
        'signed' => array(
            'title' => 'Signed',
            'type' => 'bool',
        ),
        'signed_date' => array(
            'title' => 'Signed Date',
            'type' => 'date',
        ),
        'offer' => array(
            'title' => 'Offer',
            'type' => 'number',
        ),
        'declined' => array(
            'title' => 'Declined',
            'type' => 'bool',
        ),
        'declined_date' => array(
            'title' => 'Declined Date',
            'type' => 'date',
        ),
        'school_declined_for' => array(
            'title' => 'School Declined For',
            'type' => 'text',
        ),
        'roster' => array(
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
        'high_school' => array(
            'title' => 'High School',
            'type' => 'text',
        ),
        'high_school_graduation_year' => array(
            'title' => 'High School Grad',
            'type' => 'number',
            'thousands_separator' => '',
        ),
        'gpa' => array(
            'title' => 'GPA',
            'type' => 'number',
            'decimals' => 2,
            'thousands_separator' => '',
        ),
        'act' => array(
            'title' => 'ACT',
            'type' => 'number',
        ),
        'sat' => array(
            'title' => 'SAT',
            'type' => 'number',
        ),
        'reading_taken' => array(
            'title' => 'Reading Taken',
            'type' => 'bool',
        ),
        'intended_major' => array(
            'title' => 'Intended Major',
            'type' => 'text',
        ),
        'signed' => array(
            'title' => 'Signed',
            'type' => 'bool',
        ),
        'signed_date' => array(
            'title' => 'Signed Date',
            'type' => 'date',
        ),
        'offer' => array(
            'title' => 'Offer',
            'type' => 'number',
        ),
        'declined' => array(
            'title' => 'Declined',
            'type' => 'bool',
        ),
        'declined_date' => array(
            'title' => 'Declined Date',
            'type' => 'date',
        ),
        'school_declined_for' => array(
            'title' => 'School Declined For',
            'type' => 'text',
        ),
        'roster' => array(
            'title' => 'Roster',
            'type' => 'relationship',
            'name_field' => 'year',
        ),
    ),
);

