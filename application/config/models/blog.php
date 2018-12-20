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
        'image' => [],
        'date_publish' => [],
        'category' => [],
        'is_hot' => [],
    ],
    'record' => [
        'image' => [],
        'name' => [],
        'slug' => [
            'type' => 'readonly'
        ],
        'date_publish' => [
            'type' => 'date'
        ],
        'category' => [

        ],
        'is_hot' => [
            'type' => 'select',
            'options' => [
                'No' => 'No',
                'Yes' => 'Yes',
            ]
        ],
        'summary' => [
            'type' => 'textarea'
        ],
        'content' => [
            'type' => 'textarea',
            'class' => 'editorWYSIWYG',
        ],
    ]
];