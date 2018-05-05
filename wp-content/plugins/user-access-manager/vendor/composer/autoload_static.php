<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit521363114c3caa4461c6489e0638e52a
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UserAccessManager\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UserAccessManager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit521363114c3caa4461c6489e0638e52a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit521363114c3caa4461c6489e0638e52a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
