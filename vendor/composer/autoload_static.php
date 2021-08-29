<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3aa5f297be577dafb5f29cd867994b36
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3aa5f297be577dafb5f29cd867994b36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3aa5f297be577dafb5f29cd867994b36::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3aa5f297be577dafb5f29cd867994b36::$classMap;

        }, null, ClassLoader::class);
    }
}