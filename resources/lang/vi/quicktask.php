<?php

return [
    'dashboard' => 'Trang chủ',
    'language' => [
        'en' => 'Tiếng Anh',
        'vi' => 'Tiếng Việt',
    ],
    'colums' => [
        'stt' => 'STT',
        'product_name' => 'Tên sản phẩm',
        'category_name' => 'Tên danh mục',
        'status' => 'Trạng thái',
        'description' => 'Mô tả',
        'qty' => 'Số lượng',
        'action' => 'Tác vụ',
    ],
    'status' => [
        'active' => 'Hoạt động',
        'deactive' => 'Vô hiệu hóa',
    ],
    'notification' => [
        'category' => [
            'create' => 'Thêm danh mục thành công',
            'update' => 'Sửa danh mục thành công',
            'delete' => 'Xóa danh mục thành công',
        ],
        'product' => [
            'create' => 'Thêm sản phẩm thành công',
            'update' => 'Sửa sản phẩm thành công',
            'delete' => 'Xóa sản phẩm thành công',
        ],
    ],
    'validate' => [
        'category' => [
            'name' => 'Vui lòng không để trống tên',
        ],
        'product' => [
            'name' => 'Vui lòng không để trống tên.',
            'category' => 'Vui lòng không để trống danh mục.',
            'description' => 'Vui lòng không để trống mô tả.',
            'qty_rq' => 'Vui lòng không để trống số lượng.',
            'qty_min' => 'Số lượng không nhỏ hơn 0.',
        ],
    ],
    'label' => [
        'name' => 'Tên',
        'status' => 'Trạng thái',
        'category' => 'Danh mục',
        'description' => 'Mô tả',
        'qty' => 'Số lượng',
    ],
];
