<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit089433e6fdd19b112cf5fe0ea3781ceb
{
    public static $files = array (
        '3f8bdd3b35094c73a26f0106e3c0f8b2' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/SendGrid.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SendGrid\\Stats\\' => 15,
            'SendGrid\\Mail\\' => 14,
            'SendGrid\\Contacts\\' => 18,
            'SendGrid\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SendGrid\\Stats\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/stats',
        ),
        'SendGrid\\Mail\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/mail',
        ),
        'SendGrid\\Contacts\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/contacts',
        ),
        'SendGrid\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/php-http-client/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit089433e6fdd19b112cf5fe0ea3781ceb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit089433e6fdd19b112cf5fe0ea3781ceb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit089433e6fdd19b112cf5fe0ea3781ceb::$classMap;

        }, null, ClassLoader::class);
    }
}