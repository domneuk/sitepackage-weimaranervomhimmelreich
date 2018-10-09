<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:weimaranervomhimmelreich/Resources/Private/Language/locallang_be.xlf:CType.news_menu_subpages',
        'news_menu_subpages',
        'apps-pagetree-justnews'
    ],
    'menu_sitemap_pages',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['news_menu_subpages'] = $GLOBALS['TCA']['tt_content']['types']['menu_subpages'];
