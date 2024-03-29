<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39b850dc21f02251733b643b77b0df19
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JSlomian\\htmpl\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JSlomian\\htmpl\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39b850dc21f02251733b643b77b0df19::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39b850dc21f02251733b643b77b0df19::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39b850dc21f02251733b643b77b0df19::$classMap;

        }, null, ClassLoader::class);
    }
}
