<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a825358a28d38d24dedcf0a3f2846bd
{
    public static $files = array (
        '9c9a81795c809f4710dd20bec1e349df' => __DIR__ . '/..' . '/joshcam/mysqli-database-class/MysqliDb.php',
        '94df122b6b32ca0be78d482c26e5ce00' => __DIR__ . '/..' . '/joshcam/mysqli-database-class/dbObject.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Josantonius\\Session\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Josantonius\\Session\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/session/src',
        ),
    );

    public static $classMap = array (
        'Verot\\Upload\\Upload' => __DIR__ . '/..' . '/verot/class.upload.php/src/class.upload.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a825358a28d38d24dedcf0a3f2846bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a825358a28d38d24dedcf0a3f2846bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5a825358a28d38d24dedcf0a3f2846bd::$classMap;

        }, null, ClassLoader::class);
    }
}
