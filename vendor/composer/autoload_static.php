<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit172b4b942079a1fa326f9e2a1484fbbd
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit172b4b942079a1fa326f9e2a1484fbbd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit172b4b942079a1fa326f9e2a1484fbbd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
