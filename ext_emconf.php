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
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99'
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
    'version' => '11.0.0',
];
