<?php

return [
    'title' => 'Schedule',
    'single' => 'record',
    'model' => 'App\Schedules',
    'columns' => [
        'day_of_week',
        'lesson_id',
        'group_id',
        'audience_id',
        'lesson_order',
        'lesson_type'
    ],
    'edit_fields' => [
        'day_of_week' => [
            'type' => 'enum',
            'options' => [
                'Понеділок',
                'Вівторок',
                'Середа',
                'Четвер',
                'П`ятниця'
            ]
        ],
        'lesson_id' => [
            'type' => 'number'
        ],
        'group_id' => [
            'type' => 'number'
        ],
        'audience_id' => [
            'type' => 'number'
        ],
        'lesson_order' => [
            'type' => 'enum',
            'options' => [
                '1',
                '2',
                '3',
                '4',
                '5',
                '6'
            ]
        ],
        'lesson_type' => [
            'type' => 'enum',
            'options' => [
                'Л',
                'П',
                'Лр'
            ]
        ]
    ]
];