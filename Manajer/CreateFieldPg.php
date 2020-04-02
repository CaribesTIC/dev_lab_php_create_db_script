<?php
require_once 'Interface/InterfaceCreateField.php';

class CreateFieldPg implements InterfaceCreateField
{
    private $_fieldName;
    private $_fieldDataType;
    private $_fieldDefaultValue;
    private $_fieldNotNull;

    public function __construct($fielName = "", $fieldDataType = "", $fieldDefaultValue = "", $fieldNotNull=false)  
    {
        $this->_fieldName = $fielName;
        $this->_fieldDataType = $fieldDataType;
        $this->_fieldDefaultValue = $fieldDefaultValue;
        $this->_fieldNotNull = $fieldNotNull?"":"NOT NULL";
        return $this->__toString();
    }  

    public function __toString()
    {
        return $this->_generar();
    }

    private function _generar()
    {
        return $this->_fieldName." ".$this->_fieldDataType." ".$this->_fieldDefaultValue." ".$this->_fieldNotNull;
    }

}

