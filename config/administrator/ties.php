<?php

/**
 * Ties  model config
 */

return array(

    'title' => 'Ties',

    'single' => 'Ties',

    'model' => 'App\Tie',

    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'name',
        'direction' => 'asc',
    ),

    /**
     * The display columns
     */
    'columns' => array(
        'name' => array(
            'title' => 'Name',
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
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
    ),
);

