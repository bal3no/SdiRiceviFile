<?php

namespace EnumType;

/**
 * This class stands for erroreInvio_Type EnumType
 * @subpackage Enumerations
 */
class ErroreInvio_Type
{
    /**
     * Constant for value 'EI01'
     * @return string 'EI01'
     */
    const VALUE_EI_01 = 'EI01';
    /**
     * Constant for value 'EI02'
     * @return string 'EI02'
     */
    const VALUE_EI_02 = 'EI02';
    /**
     * Constant for value 'EI03'
     * @return string 'EI03'
     */
    const VALUE_EI_03 = 'EI03';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_EI_01
     * @uses self::VALUE_EI_02
     * @uses self::VALUE_EI_03
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EI_01,
            self::VALUE_EI_02,
            self::VALUE_EI_03,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
