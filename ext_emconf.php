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
            'typo3' => '9.5.0',
            'fluid_styled_content' => '^9.5.0',
            'rte_ckeditor' => '^9.0.0',
            'form' => '^9.5.0',
            'cookiebanner' => '^1.2.4',
            'just_news' => '^1.0.3',
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
    'version' => '1.3.1',
];
