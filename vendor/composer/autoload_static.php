<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23f717766a11cc7f4fe41b10e197f972
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WsdlToPhp\\PackageBase\\' => 22,
        ),
        'S' => 
        array (
            'SDICoop/SdiRiceviFile\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WsdlToPhp\\PackageBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagebase/src',
        ),
        'SDICoop/SdiRiceviFile\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'WsdlToPhp\\PackageBase\\AbstractSoapClientBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractSoapClientBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructArrayBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructArrayBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructBase.php',
        'WsdlToPhp\\PackageBase\\SoapClientInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/SoapClientInterface.php',
        'WsdlToPhp\\PackageBase\\StructArrayInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructArrayInterface.php',
        'WsdlToPhp\\PackageBase\\StructInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructInterface.php',
        'WsdlToPhp\\PackageBase\\Utils' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23f717766a11cc7f4fe41b10e197f972::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23f717766a11cc7f4fe41b10e197f972::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23f717766a11cc7f4fe41b10e197f972::$classMap;

        }, null, ClassLoader::class);
    }
}
