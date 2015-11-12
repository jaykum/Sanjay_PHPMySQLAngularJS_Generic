<?php

require "table1.php";
/**
 * generic database table data
 *
 * 
 *
 * @version 1.0
 * @author Sanjay
 */
class dbtable
{
    private static $table1 = array();

    protected static function init(){

        require "dbinfo.php";  //database login information
        $tableName = "cds";  //specify the table name to access

        $table1 = array();
    
        if(!$db = mysqli_connect($hn, $un, $pw, $dn))
        {
            die("<font color='red'>Failed to connect to MySQL. </font><br/><br/>");
        }

        //$sql = 'SELECT titel, interpret, jahr FROM cds';  //add your select statement for the database in dbinfo.php
        $sql = 'SELECT * FROM '.$tableName;  //sql statement here gets all the columns

        if(!$result = mysqli_query($db, $sql))
        {
            die("<font color='red'> Error with query to database.</font><br/><br/>");
        }
        mysqli_close($db);

        foreach($result as $row){
            array_push($table1,
                new table1($row));  //this will assign each row in the table as an array to the column in $table1  
        }

        self::$table1 = $table1;

    }

    public static function getTable(){
        if(count(self::$table1) === 0){
            self::init();
        }
        return self::$table1;
    }
    
}
