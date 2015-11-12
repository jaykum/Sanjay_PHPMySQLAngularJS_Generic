<?php

/**
 * this is a class describing members of the table you choose to query from the database
 *
 * table1 description
 *
 * @version 1.0
 * @author Sanjay
 */
class table1
{
    //table 1 will have one column to hold each row of data from a database table
    public $col1;

    public function __construct($col1=''){
        $this->col1 = $col1;
    }
    
}
