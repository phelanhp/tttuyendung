<?php

return [
    'name'       => 'Danh mục',
    'route'      => '',
    'sort'       => 100,
    'active'     => 'category',
    'icon'       => 'fas fa-list',
    'middleware' => [],
    'group'      => [
        'recruiter_category' => [
            'name'       => 'Chuyên ngành tuyển dụng',
            'route'      => route('recruiter_category.get.list'),
            'sort'       => 100,
            'active'     => 'recruiter_category',
            'middleware' => []
        ],
        'major' => [
            'name'       => 'Chuyên ngành sinh viên',
            'route'      => route('major.get.list'),
            'sort'       => 100,
            'active'     => 'major',
            'middleware' => []
        ],
    ]
];
