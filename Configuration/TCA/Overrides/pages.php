<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'weimaranervomhimmelreich';

    /**
     * Default PageTS for Weimaranervomhimmelreich
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/PageTS/All.txt',
        'WeimaranerVomHimmelreich'
    );
});
