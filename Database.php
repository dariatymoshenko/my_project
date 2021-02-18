<?php

namespace App\Services;

class Database
{
    private $db;

    public function __construct()
    {
        $this->db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

        if (!$this->db) {
            exit ('No connection database!');
        }
        if (!mysqli_select_db($this->db, DATABASE)) {
            exit ('No table!');
        }
        return $this->db;
    }

    public function getAllDb($sql)
    {
        $res = mysqli_query($this->db, $sql);
        if (!$res) {
            return array();
        }

        while ($row = mysqli_fetch_assoc($res)) {
            $res_row[] = $row;
        }

        return $res_row;
    }

    public function getOneDb($sql)
    {
        $res = mysqli_query($this->db, $sql);

        return $res ? mysqli_fetch_assoc($res) : [];
    }

    public function insertToDb($sql)
    {
        $res = mysqli_query($this->db, $sql);

        return $res ? $this->db->insert_id : [];

    }

    public function updateToDb($sql)
    {
        $res = mysqli_query($this->db, $sql);

        return $res ? $this->db->insert_id : [];

    }

    public function deleteFromDb($sql)
    {
        $res = mysqli_query($this->db, $sql);

        return $res ? $this->db->insert_id : [];

    }
}