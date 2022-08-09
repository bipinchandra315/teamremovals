<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcee099c06fda549a6f965bb6c3ef60a3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcee099c06fda549a6f965bb6c3ef60a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcee099c06fda549a6f965bb6c3ef60a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcee099c06fda549a6f965bb6c3ef60a3::$classMap;

        }, null, ClassLoader::class);
    }
}
