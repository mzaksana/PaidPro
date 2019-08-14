<?php

class Model_lib extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    function Save($data,$table,$param)
    {
        $query=$this->db->update($table,$data,array('profile' => $param["profile"],'bio'=>$param["bio"]));
        return $query;
    }
    function Update($tabel,$data,$where)
    {
        $query=$this->db->update($tabel,$data,$where);
        return $query;
    }

    function Delete($tabel,$where)
    {
        $query=$this->db->query("delete from $tabel $where");
        return $query;
    }
    function Cek($table,$where)
    {
        $query=$this->db->query("select *from $table $where");
        return $query;
    }
    function Count($table,$where)
    {
        $query=$this->db->query("select count(*) from $table $where");
        return $query;
    }
    function SelectQuery($sql)
    {
        $query=$this->db->query($sql);
        return $query;
    }
    function SelectWhere($table,$where)
    {
         $query=$this->db->query("select *from $table $where");
         return $query;
    }
    function insert($tabel,$data)
    {
        $query=$this->db->insert($tabel, $data);
        return $query;
    }
}

?>
