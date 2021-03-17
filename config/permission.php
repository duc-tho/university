<?php

$defaut_perms = [
    [
        'name' => 'list',
        'display_name' => 'Xem danh sách',
    ],
    [
        'name' => 'create',
        'display_name' => 'Tạo',
    ],
    [
        'name' => 'edit',
        'display_name' => 'Sửa',
    ],
    [
        'name' => 'delete',
        'display_name' => 'Xóa',
    ]
];

return [
    'module' => [
        /* ví dụ về 1 module quyền
        * sau khi khai báo module xong vào trang admin phần quản trị quyền
        * chọn module và quyền của module
        * sau đó ấn tạo quyền để khởi tạo module
        */
        // [
        //     'name' => 'demo',
        //     'display_name' => 'Ví dụ',
        //     'permission' => array_merge($defaut_perms, [
        //         [
        //             'name' => 'Download',
        //             'display_name' => 'Tải xuống',
        //         ],
        //     ])
        // ],
        [
            'name' => 'faculty',
            'display_name' => 'Khoa',
            'permission' => array_merge($defaut_perms, [])
        ],
        [
            'name' => 'slide',
            'display_name' => 'Slide',
            'permission' => array_merge($defaut_perms, [])
        ],
        [
            'name' => 'student',
            'display_name' => 'Sinh viên',
            'permission' => array_merge($defaut_perms, [])
        ],
        [
            'name' => 'teacher',
            'display_name' => 'Giáo viên',
            'permission' => array_merge($defaut_perms, [])
        ],
        [
            'name' => 'user',
            'display_name' => 'Người dùng',
            'permission' => array_merge($defaut_perms, [])
        ],
    ],

    'access' => [
        // Faculty
        'faculty_list' => 'faculty_list',
        'faculty_create' => 'faculty_create',
        'faculty_edit' => 'faculty_edit',
        'faculty_delete' => 'faculty_delete',
        // Slide
        'slide_list' => 'slide_list',
        'slide_create' => 'slide_create',
        'slide_edit' => 'slide_edit',
        'slide_delete' => 'slide_delete',
        // Student
        'student_list' => 'student_list',
        'student_create' => 'student_create',
        'student_edit' => 'student_edit',
        'student_delete' => 'student_delete',
        // Teacher
        'teacher_list' => 'teacher_list',
        'teacher_create' => 'teacher_create',
        'teacher_edit' => 'teacher_edit',
        'teacher_delete' => 'teacher_delete',
        // User
        'user_list' => 'user_list',
        'user_create' => 'user_create',
        'user_edit' => 'user_edit',
        'user_delete' => 'user_delete',
    ]
];
