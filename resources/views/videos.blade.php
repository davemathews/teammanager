<div style="margin-top: 35px;">
<?php
//Show first page of results, Set the number of items to show on each page to 50, Sort by relevance, Show results in descending order, and Filter only Creative Commons License videos
$searchResults = Vimeo::request('/me/videos', array('page' => 1, 'per_page' => 10));
print_r($searchResults);
?>
@foreach($searchResults['body']['data'] as $videoData)
    <h2>{{ $videoData['name'] }}</h2>
    {!! $videoData['embed']['html'] !!}
@endforeach
</div>