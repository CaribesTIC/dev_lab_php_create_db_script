<?php
class CreateField
{

    private $obj;

    public function __construct( $fielName             = "", 
                                 $fieldDataType        = "", 
                                 $fieldDefaultValue    = "", 
                                 $fieldNotNull         = false,
                                 $createTableManejador = "CreateTablePg") {
        
        require_once "Manajer/".$createTableManejador.".php";

        $this->_obj =  new $createTableManejador( $fielName, 
                                                  $fieldDataType,
                                                  $fieldDefaultValue,
                                                  $fieldDefaultValue);         
    }

    public function __toString()
    { 
        return $this->_obj->__toString();
    }

}

