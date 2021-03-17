<?php

return [
    'default_module_permission' => [
        [
            'name' => 'list',
            'display_name' => 'Xem danh sách'
        ],
        [
            'name' => 'create',
            'display_name' => 'Tạo'
        ],
        [
            'name' => 'edit',
            'display_name' => 'Sửa'
        ],
        [
            'name' => 'delete',
            'display_name' => 'Xóa'
        ],
    ],

    'module' => [
        'faculty' => [
            'display_name' => 'Khoa',
            'access' => [
                'list' => 'faculty_list',
                'create' => 'faculty_create',
                'edit' => 'faculty_edit',
                'delete' => 'faculty_delete',
            ]
        ],
        'slide' => [
            'display_name' => 'Slide',
            'access' => [
                'list' => 'slide_list',
                'create' => 'slide_create',
                'edit' => 'slide_edit',
                'delete' => 'slide_delete',
            ]
        ],
        'student' => [
            'display_name' => 'Sinh viên',
            'access' => [
                'list' => 'student_list',
                'create' => 'student_create',
                'edit' => 'student_edit',
                'delete' => 'student_delete',
            ]
        ],
        'teacher' => [
            'display_name' => 'Giáo viên',
            'access' => [
                'list' => 'teacher_list',
                'create' => 'teacher_create',
                'edit' => 'teacher_edit',
                'delete' => 'teacher_delete',

            ]
        ],
        'user' => [
            'display_name' => 'Người dùng',
            'access' => [
                'list' => 'user_list',
                'create' => 'user_create',
                'edit' => 'user_edit',
                'delete' => 'user_delete',
            ]
        ],
        'menu' => [
            'display_name' => 'Menu',
            'access' => [
                'list' => 'menu_list',
                'create' => 'menu_create',
                'edit' => 'menu_edit',
                'delete' => 'menu_delete',
            ]
        ],
    ],
];
