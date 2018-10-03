<?php

/**
 * Extension Manager/Repository config file for ext "weimaranervomhimmelreich".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'WeimaranerVomHimmelreich',
    'description' => 'Site-Template von Weimaraner vom Himmelreich',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'form' => '8.7.0-9.5.99',
            'news' => '8.7.0-9.5.99',
            'cookiebanner' => '8.7.0-9.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Domneuk\\Weimaranervomhimmelreich\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Dominik Neukamm',
    'author_email' => 'domneuk@gmail.com',
    'author_company' => 'Domneuk',
    'version' => '1.2.0',
];
