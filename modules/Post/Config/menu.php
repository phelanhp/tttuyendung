<?php

return [
        'name' => 'Quản lý bài đăng',
        'route' => route('get.list.admin'),
        'sort' => 100,
        'active'=> 'post-management',
        'icon' => 'far fa-newspaper',
        'middleware' => [],
        'group'      => [
            'recruiter_category' => [
                'name'       => 'Thể loại bài đăng',
                'route'      => route('post_category.get.list'),
                'sort'       => 100,
                'active'     => 'post_category',
                'middleware' => []
            ],
            'major' => [
                'name'       => 'Bài đăng',
                'route'      => route('post.get.list'),
                'sort'       => 100,
                'active'     => 'post',
                'middleware' => []
            ],
        ]
];
