<?php

namespace SDICoop/SdiRiceviFile;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'fileSdIBase_Type' => '\\SDICoop/SdiRiceviFile\\StructType\\FileSdIBase_Type',
            'fileSdI_Type' => '\\SDICoop/SdiRiceviFile\\StructType\\FileSdI_Type',
            'rispostaSdIRiceviFile_Type' => '\\SDICoop/SdiRiceviFile\\StructType\\RispostaSdIRiceviFile_Type',
        );
    }
}
