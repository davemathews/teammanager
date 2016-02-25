<?php

/**
 * Recruit Notes  model config
 */

return array(

    'title' => 'Recruit Notes',

    'single' => 'Recruit Note',

    'model' => 'App\RecruitNote',

    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'contact_date',
        'direction' => 'asc',
    ),

    /**
     * The display columns
     */
    'columns' => array(
        'recruit' => array(
            'title' => 'Recruit',
            'relationship' => 'recruit',
            'select' => "Concat((:table).first_name, ' ', (:table).last_name)",
        ),
        'contact_date' => array(
            'title' => 'Contact Date',
        ),
        'contacted_how' => array(
            'title' => 'Contacted How',
        ),
        'note' => array(
            'title' => 'Note',
        ),
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'recruit' => array(
            'title' => 'Recruit',
            'type' => 'relationship',
            'name_field' => 'last_name',
        ),
        'contact_date' => array(
            'title' => 'Contact Date',
            'type' => 'date',
        ),
        'contacted_how' => array(
            'title' => 'Contacted How',
            'type' => 'text',
        ),
        'note' => array(
            'title' => 'Note',
            'type' => 'text',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'recruit' => array(
            'title' => 'Recruit',
            'type' => 'relationship',
            'name_field' => 'last_name',
        ),
        'contact_date' => array(
            'title' => 'Contact Date',
            'type' => 'date',
        ),
        'contacted_how' => array(
            'title' => 'Contacted How',
            'type' => 'text',
        ),
        'note' => array(
            'title' => 'Note',
            'type' => 'text',
        ),
    ),
);

