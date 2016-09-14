<?php
return [
    'form_elements' => [
        'factories' => [
            'Ark\Form\ConfigForm' => 'Ark\Service\Form\ConfigFormFactory',
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view/admin/',

        ],
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
                'text_domain' => null,
            ],
        ],
    ],
];
