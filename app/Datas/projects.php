<?php

function categories()
{
    return [['name' => 'Renovation', 'slug' => 'renovation']];
}

return [
    [
        'id' => 1,
        'name' => 'Guzampe',
        'category' => categories()[0],
        'slug' => 'guzampe',
        'show' => 'images/DJI_0002.jpg',
        'videos' => ['videos/GUZAMPE.mp4'],
        'images' => ['images/DJI_0003.jpg', 'images/DJI_0003.jpg'],
    ],
     [
        'id' => 2,
        'name' => 'LifeCamp',
        'category' => categories()[0],
        'slug' => 'lifecamp',
        'show' => 'images/DJI_0002.jpg',
        'videos' => ['videos/LIFECAMP .mp4'],
        'images' => ['images/DJI_0003.jpg', 'images/DJI_0003.jpg'],
    ],
     [
        'id' => 1,
        'name' => 'Lugbe',
        'category' => categories()[0],
        'slug' => 'lugbe',
        'show' => 'images/DJI_0002.jpg',
        'videos' => ['videos/LUGBE1.mp4','videos/LUGBE2.mp4','videos/LUGBE3.mp4',],
        'images' => ['images/DJI_0003.jpg', 'images/DJI_0003.jpg'],
    ],
     [
        'id' => 1,
        'name' => 'Makurdi',
        'category' => categories()[0],
        'slug' => 'makurdi',
        'show' => 'images/DJI_0002.jpg',
        'videos' => ['videos/MAKURDI.mp4'],
        'images' => ['images/DJI_0003.jpg', 'images/DJI_0003.jpg'],
    ],
];
