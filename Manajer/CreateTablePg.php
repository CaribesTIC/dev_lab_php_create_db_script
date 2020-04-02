<?php
require_once 'Interface/InterfaceCreateTable.php';

class CreateTablePg implements InterfaceCreateTable
{

    private $_from;
    private $_aField = [];

    public function addTable($table)
    {
        $this->_from = $table;
    }
    public function addField($field)
    {
        $this->_aField[] = $field;
    }
    public function __toString()
    {
        return $this->_generar();
    }
    private function _generar()
    {
        $from = $this->_from;
        $field = implode(',<br/>&nbsp;&nbsp;&nbsp;&nbsp;',array_unique($this->_aField));
        return $this->_syntaxOfCreate( $this->_from, $field);
    }
    private function _syntaxOfCreate( $from, $field )
    {
return <<<EOT
-- Table: $from<br/>
<br/>
-- DROP TABLE $from;<br/>
<br/>
CREATE $from<br/>
(<br/>
&nbsp;&nbsp;&nbsp;&nbsp;$field<br/>
)<br/>
WITH (<br/>
  OIDS=FALSE<br/>
);<br/>
ALTER TABLE $from<br/>
  OWNER TO postgres;<br/><br/><br/>
EOT;
    } 

}

