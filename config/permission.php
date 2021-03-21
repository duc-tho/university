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
        'news' => [
            'display_name' => 'Tin tức',
            'access' => [
                'list' => 'news_list',
                'create' => 'news_create',
                'edit' => 'news_edit',
                'delete' => 'news_delete',
            ]
        ],
        'about' => [
            'display_name' => 'Giới thiệu',
            'access' => [
                'list' => 'about_list',
                'create' => 'about_create',
                'edit' => 'about_edit',
                'delete' => 'about_delete',
            ]
        ],
        'category' => [
            'display_name' => 'Chuyên mục',
            'access' => [
                'list' => 'category_list',
                'create' => 'category_create',
                'edit' => 'category_edit',
                'delete' => 'category_delete',
            ]
        ],
        'collab' => [
            'display_name' => 'Logo Hợp Tác',
            'access' => [
                'list' => 'collab_list',
                'create' => 'collab_create',
                'edit' => 'collab_edit',
                'delete' => 'collab_delete',
            ]
        ],
        'contact' => [
            'display_name' => 'Liên hệ',
            'access' => [
                'list' => 'contact_list',
                'edit' => 'contact_edit',
            ]
        ],
        'image' => [
            'display_name' => 'Hình ảnh',
            'access' => [
                'list' => 'image_list',
                'create' => 'image_create',
                'edit' => 'image_edit',
                'delete' => 'image_delete',
            ]
        ],
        'permission' => [
            'display_name' => 'Quyền',
            'access' => [
                'create' => 'permission_create',
            ]
        ],
        'role' => [
            'display_name' => 'Vai trò',
            'access' => [
                'list' => 'role_list',
                'create' => 'role_create',
                'edit' => 'role_edit',
                'delete' => 'role_delete',
            ]
        ],
        'setting' => [
            'display_name' => 'Cài đặt thông tin',
            'access' => [
                'list' => 'setting_list',
                'edit' => 'setting_edit',
            ]
        ],
        'specialized' => [
            'display_name' => 'Ngành',
            'access' => [
                'list' => 'specialized_list',
                'create' => 'specialized_create',
                'edit' => 'specialized_edit',
                'delete' => 'specialized_delete',
            ]
        ],
        'statistic' => [
            'display_name' => 'Số liệu',
            'access' => [
                'list' => 'statistic_list',
                'create' => 'statistic_create',
                'edit' => 'statistic_edit',
                'delete' => 'statistic_delete',
            ]
        ],
        'video' => [
            'display_name' => 'Video',
            'access' => [
                'list' => 'video_list',
                'create' => 'video_create',
                'edit' => 'video_edit',
                'delete' => 'video_delete',
            ]
        ],
        'image_category' => [
            'display_name' => 'Chuyên mục hình ảnh',
            'access' => [
                'list' => 'image_category_list',
                'create' => 'image_category_create',
                'edit' => 'image_category_edit',
                'delete' => 'image_category_delete',
            ]
        ],
        'footer_link_category' => [
            'display_name' => 'Chuyên mục liên kết footer',
            'access' => [
                'list' => 'footer_link_category_list',
                'create' => 'footer_link_category_create',
                'edit' => 'footer_link_category_edit',
                'delete' => 'footer_link_category_delete',
            ]
        ],
        'footer_link' => [
            'display_name' => 'Liên kết footer',
            'access' => [
                'list' => 'footer_link_list',
                'create' => 'footer_link_create',
                'edit' => 'footer_link_edit',
                'delete' => 'footer_link_delete',
            ]
        ],
    ],
];
