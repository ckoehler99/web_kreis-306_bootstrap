<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'kreis-306_bootstrap';

    /**
     * Default TypoScript for kreis-306_bootstrap
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'kreis-306_bootstrap'
    );
});
