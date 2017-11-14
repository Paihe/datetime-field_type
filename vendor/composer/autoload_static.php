<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31975f5b4260b8c5e1d9a4c872ba2a67
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Anomaly\\DatetimeFieldType\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Anomaly\\DatetimeFieldType\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Anomaly\\DatetimeFieldType\\DatetimeFieldType' => __DIR__ . '/../..' . '/src/DatetimeFieldType.php',
        'Anomaly\\DatetimeFieldType\\DatetimeFieldTypeModifier' => __DIR__ . '/../..' . '/src/DatetimeFieldTypeModifier.php',
        'Anomaly\\DatetimeFieldType\\DatetimeFieldTypePresenter' => __DIR__ . '/../..' . '/src/DatetimeFieldTypePresenter.php',
        'Anomaly\\DatetimeFieldType\\DatetimeFieldTypeQuery' => __DIR__ . '/../..' . '/src/DatetimeFieldTypeQuery.php',
        'Anomaly\\DatetimeFieldType\\DatetimeFieldTypeServiceProvider' => __DIR__ . '/../..' . '/src/DatetimeFieldTypeServiceProvider.php',
        'Anomaly\\DatetimeFieldType\\Support\\Config\\DateFormatHandler' => __DIR__ . '/../..' . '/src/Support/Config/DateFormatHandler.php',
        'Anomaly\\DatetimeFieldType\\Support\\Config\\TimeFormatHandler' => __DIR__ . '/../..' . '/src/Support/Config/TimeFormatHandler.php',
        'Anomaly\\DatetimeFieldType\\Support\\DatetimeConverter' => __DIR__ . '/../..' . '/src/Support/DatetimeConverter.php',
        'Anomaly\\DatetimeFieldType\\Validation\\ValidateDatetime' => __DIR__ . '/../..' . '/src/Validation/ValidateDatetime.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31975f5b4260b8c5e1d9a4c872ba2a67::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31975f5b4260b8c5e1d9a4c872ba2a67::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31975f5b4260b8c5e1d9a4c872ba2a67::$classMap;

        }, null, ClassLoader::class);
    }
}
