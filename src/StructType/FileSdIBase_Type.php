<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for fileSdIBase_Type StructType
 * @subpackage Structs
 */
class FileSdIBase_Type extends AbstractStructBase
{
    /**
     * The NomeFile
     * Meta informations extracted from the WSDL
     * - pattern: [a-zA-Z0-9_\.]{9,50}
     * @var string
     */
    public $NomeFile;
    /**
     * The File
     * Meta informations extracted from the WSDL
     * - expectedContentTypes: *[:slash:]*
     * @var string
     */
    public $File;
    /**
     * Constructor method for fileSdIBase_Type
     * @uses FileSdIBase_Type::setNomeFile()
     * @uses FileSdIBase_Type::setFile()
     * @param string $nomeFile
     * @param string $file
     */
    public function __construct($nomeFile = null, $file = null)
    {
        $this
            ->setNomeFile($nomeFile)
            ->setFile($file);
    }
    /**
     * Get NomeFile value
     * @return string|null
     */
    public function getNomeFile()
    {
        return $this->NomeFile;
    }
    /**
     * Set NomeFile value
     * @param string $nomeFile
     * @return \StructType\FileSdIBase_Type
     */
    public function setNomeFile($nomeFile = null)
    {
        // validation for constraint: pattern
        if (is_scalar($nomeFile) && !preg_match('/[a-zA-Z0-9_\\.]{9,50}/', $nomeFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z0-9_\.]{9,50}", "%s" given', var_export($nomeFile, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($nomeFile) && !is_string($nomeFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nomeFile)), __LINE__);
        }
        $this->NomeFile = $nomeFile;
        return $this;
    }
    /**
     * Get File value
     * @return string|null
     */
    public function getFile()
    {
        return $this->File;
    }
    /**
     * Set File value
     * @param string $file
     * @return \StructType\FileSdIBase_Type
     */
    public function setFile($file = null)
    {
        // validation for constraint: string
        if (!is_null($file) && !is_string($file)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($file)), __LINE__);
        }
        $this->File = $file;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FileSdIBase_Type
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
