<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7186028adf473c30460b3164286c066
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'def43f6c87e4f8dfd0c9e1b1bab14fe8' => __DIR__ . '/..' . '/symfony/polyfill-iconv/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZBateson\\StreamDecorators\\' => 26,
            'ZBateson\\MbWrapper\\' => 19,
            'ZBateson\\MailMimeParser\\' => 24,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Iconv\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZBateson\\StreamDecorators\\' => 
        array (
            0 => __DIR__ . '/..' . '/zbateson/stream-decorators/src',
        ),
        'ZBateson\\MbWrapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zbateson/mb-wrapper/src',
        ),
        'ZBateson\\MailMimeParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/zbateson/mail-mime-parser/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Iconv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-iconv',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7186028adf473c30460b3164286c066::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7186028adf473c30460b3164286c066::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
