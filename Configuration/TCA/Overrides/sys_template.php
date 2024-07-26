<?php

defined('TYPO3') || die();

// Add static typoscript configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'bp_background_video',
    'Configuration/TypoScript/',
    'Background Video for Bootstrap Package'
);
