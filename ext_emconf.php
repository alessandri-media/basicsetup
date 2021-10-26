<?php

/**
 * Extension Manager/Repository config file for ext "basicsetup".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Basic Setup',
    'description' => 'Basic setup and configuration for TYPO3 CMS',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'fluid_styled_content' => '10.4.0-10.4.99',
            'rte_ckeditor' => '10.4.0-10.4.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'AlessandriMedia\\basicsetup\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'René Alessandri',
    'author_email' => 'rene@alessandri-media.ch',
    'author_company' => 'Alessandri Media',
    'version' => '0.0.4',
];
