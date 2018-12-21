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
        'image' => [
            'type' => 'image',
            'style' => 'max-height: 120px',
        ],
        'name' => [],
        'slug' => [
            'type' => 'readonly'
        ],
        'date_publish' => [
            'type' => 'date'
        ],
        'category' => [
            'type' => 'relate',
            'multiple' => true,
            'related' => [
                'model' => 'blogcat',
                'id_field' => 'id',
                'text_field' => 'name',
            ],
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