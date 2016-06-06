<div style="margin-top: 35px;">
<?php
$stats = \App\VideoLog::select(DB::raw('wrestler, sum(shots_attempted) AS shots_attempted, sum(shots_scored) as shots_scored, sum(shots_against) as shots_against, sum(shots_scored_against) as shots_scored_against, sum(reattacks_for) as reattacks_for, sum(reattacks_against) as reattacks_against, sum(counter_scores_for) as counter_scores_for, sum(counter_scores_against) as counter_scores_against, sum(4pt_attacks_for) as 4pt_attacks_for, sum(4pt_attacks_against) as 4pt_attacks_against, sum(front_head_attempted) as front_head_attempted, sum(front_head_scored) as front_head_scored, sum(front_head_against) as front_head_against, sum(front_head_scores_against) as front_head_scores_against, sum(attack_outs_for) as attack_outs_for, sum(attack_outs_against) as attack_outs_against, sum(takedown_to_turns_for) as takedown_to_turns_for, sum(takedown_to_turns_against) as takedown_to_turns_against, sum(guts_for) as guts_for, sum(guts_against) as guts_against, sum(laces_for) as laces_for, sum(laces_against) as laces_against, sum(high_guts_for) as high_guts_for, sum(high_guts_against) as high_guts_against, sum(other_turns_for) as other_turns_for, sum(other_turns_against) as other_turns_against, sum(pins_for) as pins_for, sum(pins_against) as pins_against, sum(tech_for) as tech_for, sum(tech_against) as tech_against, sum(decision_for) as decision_for, sum(decision_against) as decision_against, sum(shot_clock_for) as shot_clock_for, sum(shot_clock_against) as shot_clock_against, sum(first_to_score) as first_to_score, sum(scored_first_30) as scored_first_30, sum(scored_last_30) as scored_last_30, sum(scored_on_first_30) as scored_on_first_30, sum(scored_on_last_30) as scored_on_last_30'))->get();
//dd($stats);
?>
    <table>
    @foreach($stats as $stat)
        <tr>
            <td>{{ $stat->wrestler }}</td>
            <td>{{ $stat->shots_attempted }}</td>
            <td>{{ $stat->shots_scored }}</td>
            <td>{{ round(($stat->shots_scored / $stat->shots_attempted) * 100, 2) }}</td>
            <td>{{ $stat->shots_against }}</td>
            <td>{{ $stat->shots_scored_against }}</td>
            <td>{{ round(($stat->shots_scored_against / $stat->shots_against) * 100, 2) }}</td>
            <td>{{ $stat->reattacks_for }}</td>
            <td>{{ $stat->reattacks_against }}</td>
            <td>{{ $stat->counter_scores_for }}</td>
            <td>{{ $stat->counter_scores_against }}</td>
            <td>{{ $stat->attribute['4pt_attacks_for'] }}</td>
            <td>{{ $stat->attribute['4pt_attacks_against'] }}</td>
            <td>{{ $stat->front_head_attempted }}</td>
            <td>{{ $stat->front_head_scored }}</td>
            <td>{{ round(($stat->front_head_scored / $stat->front_head_attempted) * 100, 2) }}</td>
            <td>{{ $stat->front_head_against }}</td>
            <td>{{ $stat->front_head_scores_against }}</td>
            <td>{{ round(($stat->front_head_scores_against / $stat->front_head_against) * 100, 2) }}</td>
            <td>{{ $stat->attack_outs_for }}</td>
            <td>{{ $stat->attack_outs_against }}</td>
            <td>{{ $stat->takedown_to_turns_for }}</td>
            <td>{{ $stat->takedown_to_turns_against }}</td>
            <td>{{ $stat->guts_for }}</td>
            <td>{{ $stat->guts_against }}</td>
            <td>{{ $stat->laces_for }}</td>
            <td>{{ $stat->laces_against }}</td>
            <td>{{ $stat->high_guts_for }}</td>
            <td>{{ $stat->high_guts_against }}</td>
            <td>{{ $stat->other_turns_for }}</td>
            <td>{{ $stat->other_turns_against }}</td>
            <td>{{ $stat->pins_for }}</td>
            <td>{{ $stat->pins_against }}</td>
            <td>{{ $stat->tech_for }}</td>
            <td>{{ $stat->tech_against }}</td>
            <td>{{ $stat->decision_for }}</td>
            <td>{{ $stat->decision_against }}</td>
            <td>{{ $stat->shot_clock_for }}</td>
            <td>{{ $stat->shot_clock_against }}</td>
            <td>{{ $stat->first_to_score }}</td>
            <td>{{ $stat->scored_first_30 }}</td>
            <td>{{ $stat->scored_last_30 }}</td>
            <td>{{ $stat->scored_on_first_30 }}</td>
            <td>{{ $stat->scored_on_last_30 }}</td>
        </tr>
    @endforeach
    </table>
</div>
<style>
    table {
        width: 100%;
        border: 1px solid black;
        border-collapse: collapse;
    }
    th {
        height: 50px;
    }
    th, td {
        border: 1px solid #ddd;
    }
</style>