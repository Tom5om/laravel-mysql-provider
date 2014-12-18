<?php namespace SCM\MySQLe\Database\Schema\Grammars;

use Illuminate\Support\Fluent;

class MysqlGrammar extends \Illuminate\Database\Schema\Grammars\MySqlGrammar {

    /**
     * Create the column definition for a varbinary type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeBinary(Fluent $column)
    {
        return "binary({$column->length})";
    }

    protected function typeUpdatedTimeStamp(Fluent $column) {
        $column['nullable'] = true;
        return "TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NULL DEFAULT NULL";
    }
}