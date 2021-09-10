<?php

return [
    'dashboard' => 'Dashboard',
    'language' => [
        'en' => 'English',
        'vi' => 'Vietnamese',
    ],
    'colums' => [
        'stt' => 'STT',
        'product_name' => 'Product name',
        'category_name' => 'Category name',
        'status' => 'Status',
        'description' => 'Description',
        'qty' => 'Quantity',
        'action' => 'Action',
    ],
    'status' => [
        'active' => 'Active',
        'deactive' => 'Deactive',
    ],
    'notification' => [
        'category' => [
            'create' => 'Create Category Success',
            'update' => 'Update Category Success',
            'delete' => 'Delete Category Success',
        ],
        'product' => [
            'create' => 'Create Product Success',
            'update' => 'Update Product Success',
            'delete' => 'Delete Product Success',
        ],
    ],
    'validate' => [
        'category' => [
            'name' => 'The name is required.',
        ],
        'product' => [
            'name' => 'The name is required.',
            'category' => 'The category is required.',
            'description' => 'The description is required.',
            'qty_rq' => 'The quantity is required.',
            'qty_min' => 'Not less than 0.',
        ],
    ],
    'label' => [
        'name' => 'Name',
        'status' => 'Status',
        'category' => 'Category',
        'description' => 'Description',
        'qty' => 'Quantity',
    ],
];
