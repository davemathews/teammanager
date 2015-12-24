<?php

/**
 * Rosters  model config
 */

return array(

    'title' => 'Rosters',

    'single' => 'Roster',

    'model' => 'App\Roster',

    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'year',
        'direction' => 'asc',
    ),

    /**
     * The display columns
     */
    'columns' => array(
        'name' => array(
            'title' => 'Name',
        ),
        'year' => array(
            'title' => 'Year',
        ),
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
        'year' => array(
            'title' => 'Year',
            'type' => 'number',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
        'year' => array(
            'title' => 'Year',
            'type' => 'number',
        ),
    ),
);

