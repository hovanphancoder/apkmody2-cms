<?php
/**
 * File for vendor customization, you can change here paths or some behaviour,
 * which vendors such as Linux distributions might want to change.
 *
 * For changing this file you should know what you are doing. For this reason
 * options here are not part of normal configuration.
 */

declare(strict_types=1);

if (! defined('PHPMYADMIN')) {
    exit;
}

return [
    /**
     * Path to vendor autoload file. Useful when you want to have vendor dependencies somewhere else.
     */
    'autoloadFile' => PATH_ROOT . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php',

    /**
     * Directory where cache files are stored.
     */
    'tempDir' => PATH_ROOT . 'tmp' . DIRECTORY_SEPARATOR,

    /**
     * Path to changelog file, can be gzip compressed.
     * Useful when you want to have documentation somewhere else, e.g. /usr/share/doc.
     */
    'changeLogFile' => PATH_ROOT . 'ChangeLog',

    /**
     * Path to license file. Useful when you want to have documentation somewhere else, e.g. /usr/share/doc.
     */
    'licenseFile' => PATH_ROOT . 'LICENSE',

    /**
     * Directory where SQL scripts to create/upgrade configuration storage reside.
     */
    'sqlDir' => PATH_ROOT . 'sql' . DIRECTORY_SEPARATOR,

    /**
     * Filename of a configuration file.
     */
    'configFile' => PATH_ROOT . 'config.inc.php',

    /**
     * Filename of custom header file.
     */
    'customHeaderFile' => PATH_ROOT . 'config.header.inc.php',

    /**
     * Filename of custom footer file.
     */
    'customFooterFile' => PATH_ROOT . 'config.footer.inc.php',

    /**
     * Default value for check for version upgrades.
     */
    'versionCheckDefault' => true,

    /**
     * Path to files with compiled locales (*.mo)
     */
    'localePath' => PATH_ROOT . 'locale' . DIRECTORY_SEPARATOR,

    /**
     * Define the cache directory for routing cache and other cache files
     */
    'cacheDir' => PATH_ROOT . 'libraries' . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR,

    /**
     * Suffix to add to the phpMyAdmin version
     */
    'versionSuffix' => '',
];
