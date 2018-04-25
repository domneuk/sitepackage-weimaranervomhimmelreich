<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'weimaranervomhimmelreich';

    /**
     * Default TypoScript for Weimaranervomhimmelreich
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'WeimaranerVomHimmelreich'
    );
});
