<?php

require_once('db.php');

/**
 * Main Class
 */
class mainClass extends DB
{

    public function create($table, $fields)
    {
        $SQL = "";
        $SQL .= "INSERT INTO `$table` ORDER BY marketId ASC";
        $SQL .= " (`".implode("`,`", array_keys($fields))."`) VALUES ";
        $SQL .= "('".implode("','", array_values($fields))."')";
        $query = $this->Jigo->query($SQL);

        if ($query) {
            return true;
        }
    }

    public function readMarket($table)
    {
       $sql = "SELECT * FROM `".$table;
        $array = array();
        $query = $this->Jigo->query($sql);

        while ($row = $query->fetch_array()) {
            $array[] = $row;
        }
        return $array;
    }


    public function readProductById($table, $id)
    {
        $sql = "SELECT * FROM `".$table;
        $sql .= "` WHERE `marketId` = ".$id;
        $array = array();
        $query = $this->Jigo->query($sql);
         if($query->num_rows > 0){
            while ($row = $query->fetch_array()) {
                $array[] = $row;
            }
            return $array;
        }else{
            return false;
        }
    }

    public function coutTable($table, $Id)
    {
        $sql = "SELECT * FROM `".$table;
        $sql .= "` WHERE `status` = '404'";
        $query = $this->Jigo->query($sql);
        $tableCount = $query->num_rows;

        return $tableCount;
    }
}


?>