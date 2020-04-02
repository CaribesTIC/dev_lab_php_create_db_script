<?php

require_once 'CreateDb/CreateTable.php';
require_once 'CreateDb/CreateField.php';

abstract class Index
{
    public function run()
    {
        require_once 'config/createDb.php';
        for ( $i=0; $i < count($aTable) ; $i++) {
            $sql = new CreateTable("CreateTablePg");
            $sql->addTable( $aTable[$i]["tableName"] );
            foreach ( $aTable[$i]["aFields"] as $aField ) {
                $sql->addField( new CreateField( $aField["fieldName"], 
                                                 $aField["fieldDataType"], 
                                                 $aField["fieldDefaultValue"], 
                                                 $aField["fieldNotNull"],
                                                 "CreateFieldPg"
                                               )
                              );
            }
            echo $sql->__toString();
        }
    }
}

Index::run();

