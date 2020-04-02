<?php
class CreateTable
{

    private $obj;

    public function __construct($createTableManejador = "CreateTablePg")
    {
        require_once "Manajer/".$createTableManejador.".php";
        $this->_obj= new $createTableManejador();
    }

    public function addTable($table)
    {
        $this->_obj->addTable($table);
    }

    public function addField($field)
    {
        $this->_obj->addField($field);
    }

    public function __toString()
    {
        return $this->_obj->__toString();
    }

}

