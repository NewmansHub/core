<?php
/*
 * This file is part of ContaoOveleonThemeManagerBundle.
 *
 * (c) https://www.oveleon.de/
 */

// Add configuration dca for themes
$GLOBALS['BE_MOD']['design']['themes']['tables'][] = 'tl_oveleon';

// Add sources
$GLOBALS['TC_SOURCES'] = array(
    'basePath'    => 'bundles/contaooveleonthememanager/framework/scss/',
    'configFile'  => '_config.scss',
    'configField' => 'themeConfig',
    'files'       => array
    (
        '_grid.scss',
        '_theme.scss'
    )
);

// Add content element components group
array_insert($GLOBALS['TL_CTE'], 2, array
(
    'components' => array(),
    'componentLists' => array()
));

$GLOBALS['TL_HOOKS']['initializeSystem'][] = array('Oveleon\ContaoOveleonThemeManagerBundle\ThemeManager', 'extendHeadlineField');
$GLOBALS['TL_HOOKS']['parseTemplate'][]    = array('Oveleon\ContaoOveleonThemeManagerBundle\ThemeManager', 'addHeadlineFieldsToTemplate');