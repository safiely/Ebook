<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1d0f6cddae68fced6902943e3c3d99e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1d0f6cddae68fced6902943e3c3d99e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1d0f6cddae68fced6902943e3c3d99e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
