<?php

/**
 * Events  model config
 */

return array(

    'title' => 'Events',

    'single' => 'Event',

    'model' => 'App\Event',

    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'event_date_start',
        'direction' => 'desc',
    ),

    /**
     * The display columns
     */
    'columns' => array(
        'roster' => array(
            'title' => 'Roster',
            'relationship' => 'roster',
            'select' => "(:table).name",
        ),
        'event_date_start' => array(
            'title' => 'Event Start Date',
        ),
        'event_date_end' => array(
            'title' => 'Event End Date',
        ),
        'name' => array(
            'title' => 'Name',
        ),
        'description' => array(
            'title' => 'Description',
        ),
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'roster' => array(
            'title' => 'Roster',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'event_date_start' => array(
            'title' => 'Event Start Date',
            'type' => 'date',
        ),
        'event_date_end' => array(
            'title' => 'Event End Date',
            'type' => 'date',
        ),
        'name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
        'description' => array(
            'title' => 'Description',
            'type' => 'text',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'roster' => array(
            'title' => 'Roster',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'event_date_start' => array(
            'title' => 'Event Start Date',
            'type' => 'date',
        ),
        'event_date_end' => array(
            'title' => 'Event End Date',
            'type' => 'date',
        ),
        'name' => array(
            'title' => 'Name',
            'type' => 'text',
        ),
        'description' => array(
            'title' => 'Description',
            'type' => 'text',
        ),
    ),
);

