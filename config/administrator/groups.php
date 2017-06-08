<?php

return [
    'title' => 'Groups',
    'single' => 'group',
    'model' => 'App\Groups',
    'columns' => [
        'id',
        'title',
        'isActive'
    ],
    'edit_fields' => [
        'title' => [
            'type' => 'text'
        ],
        'isActive' => [
            'type' => 'bool'
        ]
    ]
];