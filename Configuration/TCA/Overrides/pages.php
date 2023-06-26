<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'WirHelfenIndien_bootstrap';

    /**
     * Default PageTS for TsvWartenbergBootstrap
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'WirHelfenIndien-bootstrap'
    );
});
