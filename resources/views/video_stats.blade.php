<div style="margin-top: 35px;">
<?php
$stats = \App\VideoLog::select(DB::raw('wrestler, sum(shots_attempted) AS shots_attempted, sum(shots_scored) as shots_scored, sum(shots_against) as shots_against, sum(shots_scored_against) as shots_scored_against, sum(reattacks_for) as reattacks_for, sum(reattacks_against) as reattacks_against, sum(counter_scores_for) as counter_scores_for, sum(counter_scores_against) as counter_scores_against, sum(4pt_attacks_for) as 4pt_attacks_for, sum(4pt_attacks_against) as 4pt_attacks_against, sum(front_head_attempted) as front_head_attempted, sum(front_head_scored) as front_head_scored, sum(front_head_against) as front_head_against, sum(front_head_scores_against) as front_head_scores_against, sum(attack_outs_for) as attack_outs_for, sum(attack_outs_against) as attack_outs_against, sum(takedown_to_turns_for) as takedown_to_turns_for, sum(takedown_to_turns_against) as takedown_to_turns_against, sum(guts_for) as guts_for, sum(guts_against) as guts_against, sum(laces_for) as laces_for, sum(laces_against) as laces_against, sum(high_guts_for) as high_guts_for, sum(high_guts_against) as high_guts_against, sum(other_turns_for) as other_turns_for, sum(other_turns_against) as other_turns_against, sum(pins_for) as pins_for, sum(pins_against) as pins_against, sum(tech_for) as tech_for, sum(tech_against) as tech_against, sum(decision_for) as decision_for, sum(decision_against) as decision_against, sum(shot_clock_for) as shot_clock_for, sum(shot_clock_against) as shot_clock_against, sum(first_to_score) as first_to_score, sum(scored_first_30) as scored_first_30, sum(scored_last_30) as scored_last_30, sum(scored_on_first_30) as scored_on_first_30, sum(scored_on_last_30) as scored_on_last_30'))->get();
dd($stats);
?>
    <table>
    @foreach($stats)

    @endforeach
    </table>
</div>