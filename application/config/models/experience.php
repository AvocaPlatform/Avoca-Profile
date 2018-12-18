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
        'workat' => [],
        'workat_address' => [],
        'date_start' => [],
        'date_end' => [],
    ],
    'record' => [
        'name' => [],
        'type' => [
            'type' => 'select',
            'options' => [
                'Jobs' => 'Jobs',
                'Educations' => 'Educations',
            ],
        ],
        'workat' => [],
        'workat_link' => [],
        'workat_address' => [],
        'date_start' => ['type' => 'date'],
        'date_end' => ['type' => 'date'],
        'description' => ['type' => 'textarea'],
    ]
];