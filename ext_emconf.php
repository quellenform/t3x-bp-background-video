<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Background Video for Bootstrap Package',
    'description' => '',
    'category' => 'fe',
    'state' => 'alpha',
    'clearcacheonload' => true,
    'author' => 'Stephan Kellermayr',
    'author_email' => 'typo3@quellenform.at',
    'author_company' => 'Kellermayr KG',
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.9.99',
            'bootstrap_package' => '13.0.10-14.9.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
