<?php

return [
    'name'       => 'Quản lý người dùng',
    'route'      => '',
    'sort'       => 100,
    'active'     => 'user',
    'icon'       => 'fas fa-user',
    'middleware' => [],
    'group'      => [
        'user_group' => [
            'name'       => 'Quản lý nhóm người dùng',
            'route'      => route('user_group.get.list'),
            'sort'       => 100,
            'active'     => 'user_group',
            'middleware' => []
        ],
        'recruiter_category' => [
            'name'       => 'Quản lý nhà tuyển dụng',
            'route'      => route('user.get.recruiter_list'),
            'sort'       => 100,
            'active'     => 'recruiter_category',
            'middleware' => []
        ],
        'student' => [
            'name'       => 'Quản lý sinh viên',
            'route'      => route('user.get.student_list'),
            'sort'       => 100,
            'active'     => 'student',
            'middleware' => []
        ]
    ]
];
