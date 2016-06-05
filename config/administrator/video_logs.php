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
        'notes' => array(
            'title' => 'Notes',
        ),
        'shots_attempted' => array(
            'title' => 'Shots Attempted',
        ),
        'shots_scored' => array(
            'title' => 'Shots Scored',
        ),
        'shots_against' => array(
            'title' => 'Shots Against',
        ),
        'shots_scored_against' => array(
            'title' => 'Shots Scored Against',
        ),
        'reattacks_for' => array(
            'title' => 'ReAttacks For',
        ),
        'reattacks_against' => array(
            'title' => 'ReAttacks Against',
        ),
        'counter_scores_for' => array(
            'title' => 'Counter Scores For',
        ),
        'counter_scores_against' => array(
            'title' => 'Counter Scores Against',
        ),
        '4pt_attacks_for' => array(
            'title' => '4pt Attacks For',
        ),
        '4pt_attacks_against' => array(
            'title' => '4pt Attacks Against',
        ),
        'front_head_attempted' => array(
            'title' => 'Front Head Attempted',
        ),
        'front_head_scored' => array(
            'title' => 'Front Head Scored',
        ),
        'front_head_against' => array(
            'title' => 'Front Head Against',
        ),
        'front_head_scores_against' => array(
            'title' => 'Front Head Scored Against',
        ),
        'attack_outs_for' => array(
            'title' => 'Attack Outs For',
        ),
        'attack_outs_against' => array(
            'title' => 'Attack Outs Against',
        ),
        'takedown_to_turns_for' => array(
            'title' => 'Takedown To Turns For',
        ),
        'takedown_to_turns_against' => array(
            'title' => 'Takedown To Turns Against',
        ),
        'guts_for' => array(
            'title' => 'Guts For',
        ),
        'guts_against' => array(
            'title' => 'Guts Against',
        ),
        'laces_for' => array(
            'title' => 'Laces For',
        ),
        'laces_against' => array(
            'title' => 'Laces Against',
        ),
        'high_guts_for' => array(
            'title' => 'High Guts For',
        ),
        'high_guts_against' => array(
            'title' => 'High Guts Against',
        ),
        'other_turns_for' => array(
            'title' => 'Other Turns For',
        ),
        'other_turns_against' => array(
            'title' => 'Other Turns Against',
        ),
        'pins_for' => array(
            'title' => 'Pins For',
        ),
        'pins_against' => array(
            'title' => 'Pins Against',
        ),
        'tech_for' => array(
            'title' => 'Tech For',
        ),
        'tech_against' => array(
            'title' => 'Tech Against',
        ),
        'decision_for' => array(
            'title' => 'Decision For',
        ),
        'decision_against' => array(
            'title' => 'Decision Against',
        ),
        'shot_clock_for' => array(
            'title' => 'Shot Clock For',
        ),
        'shot_clock_against' => array(
            'title' => 'Shot Clock Against',
        ),
        'first_to_score' => array(
            'title' => 'First To Score',
        ),
        'scored_first_30' => array(
            'title' => 'Scored First 30',
        ),
        'scored_last_30' => array(
            'title' => 'Scored Last 30',
        ),
        'scored_on_first_30' => array(
            'title' => 'Scored In First 30',
        ),
        'scored_on_last_30' => array(
            'title' => 'Scored In Last 30',
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
        'opponent' => array(
            'title' => 'Opponent',
            'type' => 'text',
        ),
        'weight' => array(
            'title' => 'Weight',
            'type' => 'number',
        ),
        'pins_for' => array(
            'title' => 'Pins For',
            'type' => 'bool',
        ),
        'pins_against' => array(
            'title' => 'Pins Against',
            'type' => 'bool',
        ),
        'tech_for' => array(
            'title' => 'Tech For',
            'type' => 'bool',
        ),
        'tech_against' => array(
            'title' => 'Tech Against',
            'type' => 'bool',
        ),
        'decision_for' => array(
            'title' => 'Decision For',
            'type' => 'bool',
        ),
        'decision_against' => array(
            'title' => 'Decision Against',
            'type' => 'bool',
        ),
        'shot_clock_for' => array(
            'title' => 'Shot Clock For',
            'type' => 'bool',
        ),
        'shot_clock_against' => array(
            'title' => 'Shot Clock Against',
            'type' => 'bool',
        ),
        'first_to_score' => array(
            'title' => 'First To Score',
            'type' => 'bool',
        ),
        'scored_first_30' => array(
            'title' => 'Scored First 30',
            'type' => 'bool',
        ),
        'scored_last_30' => array(
            'title' => 'Scored Last 30',
            'type' => 'bool',
        ),
        'scored_on_first_30' => array(
            'title' => 'Scored In First 30',
            'type' => 'bool',
        ),
        'scored_on_last_30' => array(
            'title' => 'Scored In Last 30',
            'type' => 'bool',
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
        'opponent' => array(
            'title' => 'Opponent',
            'type' => 'text',
        ),
        'weight' => array(
            'title' => 'Weight',
            'type' => 'number',
        ),
        'notes' => array(
            'title' => 'Notes',
            'type' => 'text',
        ),
        'shots_attempted' => array(
            'title' => 'Shots Attempted',
            'type' => 'number',
        ),
        'shots_scored' => array(
            'title' => 'Shots Scored',
            'type' => 'number',
        ),
        'shots_against' => array(
            'title' => 'Shots Against',
            'type' => 'number',
        ),
        'shots_scored_against' => array(
            'title' => 'Shots Scored Against',
            'type' => 'number',
        ),
        'reattacks_for' => array(
            'title' => 'ReAttacks For',
            'type' => 'number',
        ),
        'reattacks_against' => array(
            'title' => 'ReAttacks Against',
            'type' => 'number',
        ),
        'counter_scores_for' => array(
            'title' => 'Counter Scores For',
            'type' => 'number',
        ),
        'counter_scores_against' => array(
            'title' => 'Counter Scores Against',
            'type' => 'number',
        ),
        '4pt_attacks_for' => array(
            'title' => '4pt Attacks For',
            'type' => 'number',
        ),
        '4pt_attacks_against' => array(
            'title' => '4pt Attacks Against',
            'type' => 'number',
        ),
        'front_head_attempted' => array(
            'title' => 'Front Head Attempted',
            'type' => 'number',
        ),
        'front_head_scored' => array(
            'title' => 'Front Head Scored',
            'type' => 'number',
        ),
        'front_head_against' => array(
            'title' => 'Front Head Against',
            'type' => 'number',
        ),
        'front_head_scores_against' => array(
            'title' => 'Front Head Scored Against',
            'type' => 'number',
        ),
        'attack_outs_for' => array(
            'title' => 'Attack Outs For',
            'type' => 'number',
        ),
        'attack_outs_against' => array(
            'title' => 'Attack Outs Against',
            'type' => 'number',
        ),
        'takedown_to_turns_for' => array(
            'title' => 'Takedown To Turns For',
            'type' => 'number',
        ),
        'takedown_to_turns_against' => array(
            'title' => 'Takedown To Turns Against',
            'type' => 'number',
        ),
        'guts_for' => array(
            'title' => 'Guts For',
            'type' => 'number',
        ),
        'guts_against' => array(
            'title' => 'Guts Against',
            'type' => 'number',
        ),
        'laces_for' => array(
            'title' => 'Laces For',
            'type' => 'number',
        ),
        'laces_against' => array(
            'title' => 'Laces Against',
            'type' => 'number',
        ),
        'high_guts_for' => array(
            'title' => 'High Guts For',
            'type' => 'number',
        ),
        'high_guts_against' => array(
            'title' => 'High Guts Against',
            'type' => 'number',
        ),
        'other_turns_for' => array(
            'title' => 'Other Turns For',
            'type' => 'number',
        ),
        'other_turns_against' => array(
            'title' => 'Other Turns Against',
            'type' => 'number',
        ),
        'pins_for' => array(
            'title' => 'Pins For',
            'type' => 'bool',
        ),
        'pins_against' => array(
            'title' => 'Pins Against',
            'type' => 'bool',
        ),
        'tech_for' => array(
            'title' => 'Tech For',
            'type' => 'bool',
        ),
        'tech_against' => array(
            'title' => 'Tech Against',
            'type' => 'bool',
        ),
        'decision_for' => array(
            'title' => 'Decision For',
            'type' => 'bool',
        ),
        'decision_against' => array(
            'title' => 'Decision Against',
            'type' => 'bool',
        ),
        'shot_clock_for' => array(
            'title' => 'Shot Clock For',
            'type' => 'bool',
        ),
        'shot_clock_against' => array(
            'title' => 'Shot Clock Against',
            'type' => 'bool',
        ),
        'first_to_score' => array(
            'title' => 'First To Score',
            'type' => 'bool',
        ),
        'scored_first_30' => array(
            'title' => 'Scored First 30',
            'type' => 'bool',
        ),
        'scored_last_30' => array(
            'title' => 'Scored Last 30',
            'type' => 'bool',
        ),
        'scored_on_first_30' => array(
            'title' => 'Scored In First 30',
            'type' => 'bool',
        ),
        'scored_on_last_30' => array(
            'title' => 'Scored In Last 30',
            'type' => 'bool',
        ),
    ),
);

