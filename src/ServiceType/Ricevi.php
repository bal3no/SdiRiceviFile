<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Ricevi ServiceType
 * @subpackage Services
 */
class Ricevi extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RiceviFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FileSdIBase_Type $parametersIn
     * @return \StructType\RispostaSdIRiceviFile_Type|bool
     */
    public function RiceviFile(\StructType\FileSdIBase_Type $parametersIn)
    {
        try {
            $this->setResult($this->getSoapClient()->RiceviFile($parametersIn));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RispostaSdIRiceviFile_Type
     */
    public function getResult()
    {
        return parent::getResult();
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
