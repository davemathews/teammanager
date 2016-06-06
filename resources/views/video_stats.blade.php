<div style="margin-top: 35px;">
<?php
$stats = \App\VideoLog::select(DB::raw('sum(shots_attempted) AS shots_attempted'))->get();
dd($stats);
?>

</div>