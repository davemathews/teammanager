<?php

/**
 * Matches  model config
 */

return array(

    'title' => 'Matches',

    'single' => 'Match',

    'model' => 'App\Match',

    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'athlete_id',
        'direction' => 'desc',
    ),

    /**
     * The display columns
     */
    'columns' => array(
        'event' => array(
            'title' => 'Event',
            'relationship' => 'event',
            'select' => "(:table).name",
        ),
        'roster' => array(
            'title' => 'Roster',
            'relationship' => 'roster',
            'select' => "(:table).name",
        ),
        'athlete' => array(
            'title' => 'Athlete',
            'relationship' => 'athlete',
            'select' => "CONCAT((:table).first_name, ' ', (:table).last_name)",
        ),
        'weight' => array(
            'title' => 'Weight',
        ),
        'result' => array(
            'title' => 'Result',
            'select' => "IF((:table).result, 'Win', 'Loss')",
        ),
        'tech' => array(
            'title' => 'Tech',
            'select' => "IF((:table).tech, 'Yes', 'No')",
        ),
        'pin' => array(
            'title' => 'Pin',
            'select' => "IF((:table).pin, 'Yes', 'No')",
        ),
        'pin_time' => array(
            'title' => 'Pin Time',
        ),
        'team_points' => array(
            'title' => 'Team Points',
        ),
        'score_for' => array(
            'title' => 'Score For',
        ),
        'score_against' => array(
            'title' => 'Score Against',
        ),
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'event' => array(
            'title' => 'Event',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'roster' => array(
            'title' => 'Roster',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'athlete' => array(
            'title' => 'Athlete',
            'type' => 'relationship',
            'name_field' => 'last_name',
        ),
        'weight' => array(
            'title' => 'Weight',
            'type' => 'number',
        ),
        'result' => array(
            'title' => 'Result',
            'type' => 'bool',
        ),
        'tech' => array(
            'title' => 'Tech',
            'type' => 'bool',
        ),
        'pin' => array(
            'title' => 'Pin',
            'type' => 'bool',
        ),
        'pin_time' => array(
            'title' => 'Pin Time',
            'type' => 'number',
        ),
        'team_points' => array(
            'title' => 'Team Points',
            'type' => 'number',
        ),
        'score_for' => array(
            'title' => 'Score For',
            'type' => 'number',
        ),
        'score_against' => array(
            'title' => 'Score Against',
            'type' => 'number',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'event' => array(
            'title' => 'Event',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'roster' => array(
            'title' => 'Roster',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'athlete' => array(
            'title' => 'Athlete',
            'type' => 'relationship',
            'name_field' => 'last_name',
        ),
        'weight' => array(
            'title' => 'Weight',
            'type' => 'number',
        ),
        'result' => array(
            'title' => 'Result',
            'type' => 'bool',
        ),
        'tech' => array(
            'title' => 'Tech',
            'type' => 'bool',
        ),
        'pin' => array(
            'title' => 'Pin',
            'type' => 'bool',
        ),
        'pin_time' => array(
            'title' => 'Pin Time',
            'type' => 'number',
        ),
        'team_points' => array(
            'title' => 'Team Points',
            'type' => 'number',
        ),
        'score_for' => array(
            'title' => 'Score For',
            'type' => 'number',
        ),
        'score_against' => array(
            'title' => 'Score Against',
            'type' => 'number',
        ),
    ),
);

