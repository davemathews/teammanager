<div style="margin-top: 35px;">
<?php
$stats = \App\VideoLog::select('sum(shots_attempted) as shots_attempted')->get();
dd($stats);
?>

</div>