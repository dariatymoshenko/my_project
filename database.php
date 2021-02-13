<?php
class Database
{
    private $db;
    public function __construct(){
        $this->db = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

        if(!$this->db){
            exit ('No connection database!');
        }
        if(!mysqli_select_db($this->db, DATABASE)){
            exit ('No table!');
        }
        return $this->db;
    }
    
    protected function getAllDb($sql){
        $res = mysqli_query($this->db, $sql); 
        if(!$res){
            return array();
        }
        else{
            while ($row = mysqli_fetch_assoc($res)) {
                $res_row[] = $row;
            }
        }
        return $res_row;
    }
    protected function getOneDb($sql){
        $res = mysqli_query($this->db, $sql); 
        if(!$res){
            return array();
        }
        else{
            return mysqli_fetch_assoc($res);
        }
    }

    protected function insertToDb($sql){
        $res = mysqli_query($this->db, $sql); 
        if(!$res){
            return FALSE;
        }
        else{
            return $this->db->insert_id;
        }
    }

    protected function updateToDb($sql){
        $res = mysqli_query($this->db, $sql); 
        if(!$res){
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

    protected function deleteFromDb($sql){
        $res = mysqli_query($this->db, $sql);
        if(!$res){
            return FALSE;
        }
        else{
            return TRUE;
        }
    }
}