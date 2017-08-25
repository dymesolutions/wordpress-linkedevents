<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a1e52afe413dfb48f0c6d087193d509
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Metatavu\\LinkedEvents\\' => 22,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Metatavu\\LinkedEvents\\' => 
        array (
            0 => __DIR__ . '/..' . '/metatavu/linkedevents-php-client/lib',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a1e52afe413dfb48f0c6d087193d509::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a1e52afe413dfb48f0c6d087193d509::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
