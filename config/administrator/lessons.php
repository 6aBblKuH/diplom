<?php

return [
    'title' => 'Lessons',
    'single' => 'lesson',
    'model' => 'App\Lessons',
    'columns' => [
        'id',
        'title',
        'teacher'
    ],
    'edit_fields' => [
        'title' => [
            'type' => 'text'
        ],
        'teacher' => [
            'type' => 'text'
        ]
    ]
];