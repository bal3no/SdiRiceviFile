<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rispostaSdIRiceviFile_Type StructType
 * @subpackage Structs
 */
class RispostaSdIRiceviFile_Type extends AbstractStructBase
{
    /**
     * The IdentificativoSdI
     * Meta informations extracted from the WSDL
     * - totalDigits: 12
     * @var int
     */
    public $IdentificativoSdI;
    /**
     * The DataOraRicezione
     * @var string
     */
    public $DataOraRicezione;
    /**
     * The Errore
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Errore;
    /**
     * Constructor method for rispostaSdIRiceviFile_Type
     * @uses RispostaSdIRiceviFile_Type::setIdentificativoSdI()
     * @uses RispostaSdIRiceviFile_Type::setDataOraRicezione()
     * @uses RispostaSdIRiceviFile_Type::setErrore()
     * @param int $identificativoSdI
     * @param string $dataOraRicezione
     * @param string $errore
     */
    public function __construct($identificativoSdI = null, $dataOraRicezione = null, $errore = null)
    {
        $this
            ->setIdentificativoSdI($identificativoSdI)
            ->setDataOraRicezione($dataOraRicezione)
            ->setErrore($errore);
    }
    /**
     * Get IdentificativoSdI value
     * @return int|null
     */
    public function getIdentificativoSdI()
    {
        return $this->IdentificativoSdI;
    }
    /**
     * Set IdentificativoSdI value
     * @param int $identificativoSdI
     * @return \StructType\RispostaSdIRiceviFile_Type
     */
    public function setIdentificativoSdI($identificativoSdI = null)
    {
        // validation for constraint: totalDigits
        if (is_float($identificativoSdI) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $identificativoSdI)) !== 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 12 digits, "%d" given', strlen(substr($identificativoSdI, strpos($identificativoSdI, '.')))), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($identificativoSdI) && !is_numeric($identificativoSdI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($identificativoSdI)), __LINE__);
        }
        $this->IdentificativoSdI = $identificativoSdI;
        return $this;
    }
    /**
     * Get DataOraRicezione value
     * @return string|null
     */
    public function getDataOraRicezione()
    {
        return $this->DataOraRicezione;
    }
    /**
     * Set DataOraRicezione value
     * @param string $dataOraRicezione
     * @return \StructType\RispostaSdIRiceviFile_Type
     */
    public function setDataOraRicezione($dataOraRicezione = null)
    {
        // validation for constraint: string
        if (!is_null($dataOraRicezione) && !is_string($dataOraRicezione)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dataOraRicezione)), __LINE__);
        }
        $this->DataOraRicezione = $dataOraRicezione;
        return $this;
    }
    /**
     * Get Errore value
     * @return string|null
     */
    public function getErrore()
    {
        return $this->Errore;
    }
    /**
     * Set Errore value
     * @uses \EnumType\ErroreInvio_Type::valueIsValid()
     * @uses \EnumType\ErroreInvio_Type::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $errore
     * @return \StructType\RispostaSdIRiceviFile_Type
     */
    public function setErrore($errore = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ErroreInvio_Type::valueIsValid($errore)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $errore, implode(', ', \EnumType\ErroreInvio_Type::getValidValues())), __LINE__);
        }
        $this->Errore = $errore;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RispostaSdIRiceviFile_Type
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
