<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37f6ff9c9b93648d0a703f82ca467076
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPJasper\\' => 10,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PHPJasper\\' => 
        array (
            0 => __DIR__ . '/..' . '/geekcom/phpjasper/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37f6ff9c9b93648d0a703f82ca467076::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37f6ff9c9b93648d0a703f82ca467076::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
