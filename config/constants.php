<?php
return [
    'text' => [
        'minLength' => '5',
        'maxLength' => '255'
    ],

    'phone' => [
        'pattern' => '~^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$~'
    ],
    'system' => [
        'storage' => 'Database',
    ],
];
