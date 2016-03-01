<?php
//Show first page of results, Set the number of items to show on each page to 50, Sort by relevance, Show results in descending order, and Filter only Creative Commons License videos
$search_results = Vimeo::request('/me/videos', array('page' => 1, 'per_page' => 10));
print_r($search_results);
?>