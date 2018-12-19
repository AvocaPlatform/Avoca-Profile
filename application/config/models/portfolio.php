<?php
/**
 * Created by AVOCA.IO
 * Website: http://avoca.io
 * User: Jacky
 * Email: hungtran@up5.vn | jacky@youaddon.com
 * Person: tdhungit@gmail.com
 * Skype: tdhungit
 * Git: https://github.com/tdhungit
 */

return [
    'title' => 'name',
    'list' => [
        'name' => [],
        'link' => [],
        'category' => [],
        'times' => [],
    ],
    'record' => [
        'name' => [],
        'image' => ['type' => 'image'],
        'link' => [],
        'source_link' => [],
        'category' => [
            'type' => 'dropdown',
            'options' => 'portfolioCategory',
        ],
        'times' => ['type' => 'number'],
        'date_start' => ['type' => 'date'],
        'date_end' => ['type' => 'date'],
        'description' => ['type' => 'textarea'],
    ]
];