<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Background Video for Bootstrap Package',
    'description' => 'Add background videos to EXT:bootstrap_package',
    'category' => 'fe',
    'state' => 'beta',
    'clearcacheonload' => true,
    'author' => 'Stephan Kellermayr',
    'author_email' => 'typo3@quellenform.at',
    'author_company' => 'Kellermayr KG',
    'version' => '0.1.2',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-14.9.99',
            'bootstrap_package' => '13.0.5-16.9.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
