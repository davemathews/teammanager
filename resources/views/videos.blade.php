<div style="margin-top: 35px;">
<?php
//Show first page of results, Set the number of items to show on each page to 50, Sort by relevance, Show results in descending order, and Filter only Creative Commons License videos
$searchResults = Vimeo::request('/me/videos', array('page' => 1, 'per_page' => 12));
//print_r($searchResults);
?>
    <a href="@if($searchResults['body']['paging']['previous']) {{ "?page=".($searchResults['body']['page'] - 1) }} @endif"><-Prev</a> <a href="@if($searchResults['body']['paging']['next']) {{ "?page=".($searchResults['body']['page'] + 1) }} @endif">Next-></a>
@foreach($searchResults['body']['data'] as $videoData)
    <div style="display:inline-block;">
        <iframe src="https://player.vimeo.com/{{ preg_replace("/\/videos/","video",$videoData['uri']) }}?badge=0&autopause=0&player_id=0" width="512" height="288" frameborder="0" title="{{ $videoData['name'] }}" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
@endforeach
</div>