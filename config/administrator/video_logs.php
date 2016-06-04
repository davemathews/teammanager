<?php

/**
 * Video Logs  model config
 */

return array(

    'title' => 'Video Logs',

    'single' => 'Video Log',

    'model' => 'App\VideoLog',

    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'wrestler',
        'direction' => 'asc',
    ),

    /**
     * The display columns
     */
    'columns' => array(
        'wrestler' => array(
            'title' => 'Name',
        ),
        'opponent' => array(
            'title' => 'Opponent',
        ),
        'weight' => array(
            'title' => 'Weight',
        ),
        'match_date' => array(
            'title' => 'Date',
        ),
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'wrestler' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'wrestler' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
    ),
);

