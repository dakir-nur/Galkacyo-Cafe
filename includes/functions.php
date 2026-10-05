<?php
// Returns a greeting based on the time of day
function greeting()
{
    $hour = date('H');

    if ($hour < 12) {
        return 'Good morning';
    } elseif ($hour < 17) {
        return 'Good afternoon';
    } else {
        return 'Good evening';
    }
}

// Returns only the menu items marked as featured
function featuredItems($items)
{
    $featured = [];

    foreach ($items as $item) {
        if ($item['featured']) {
            $featured[] = $item;
        }
    }

    return $featured;
}