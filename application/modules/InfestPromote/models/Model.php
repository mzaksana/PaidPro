<?php

use SleekDB\SleekDB;

/* Class Model dibuat dengan implementasi SleekDB
 * setiap data harus dalam bentuk array
 * table dibuat otomatis jika tidak ada
 * */
class Model extends CI_Model
{

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function Update($table, $where, $data)
	{
		require_once FCPATH . "/core/InfestPromote/db/SleekDB.php";
		$dataDir = FCPATH . "/core/InfestPromote/databases";
		try {
			$db = SleekDB::store($table, $dataDir);
			try {
				return $results = $db->where($where['fieldName'],$where['condition'],$where['value'])->update($data);
			} catch (Exception $e) {
				return $e;
			}
		} catch (Exception $e) {
			return $e;
		}
	}

	function Delete($table, $where)
	{
		require_once FCPATH . "/core/InfestPromote/db/SleekDB.php";
		$dataDir = FCPATH . "/core/InfestPromote/databases";
		try {
			$db = SleekDB::store($table, $dataDir);
			try {
				return $results = $db->where($where['fieldName'],$where['condition'],$where['value'])->delete();
			} catch (Exception $e) {
				return $e;
			}
		} catch (Exception $e) {
			return $e;
		}
	}

	function SelectWhere($table, $where)
	{
		require_once FCPATH . "/core/InfestPromote/db/SleekDB.php";
		$dataDir = FCPATH . "/core/InfestPromote/databases";
		try {
			$db = SleekDB::store($table, $dataDir);
			try {
				return $results = $db->where($where['fieldName'],$where['condition'],$where['value'])->fetch();
			} catch (Exception $e) {
				return $e;
			}
		} catch (Exception $e) {
			return $e;
		}
	}

	function insert($table, $data)
	{
		require_once FCPATH . "/core/InfestPromote/db/SleekDB.php";
		$dataDir = FCPATH . "/core/InfestPromote/databases";
		try {
			$db = SleekDB::store($table, $dataDir);
			try {
				return $results = $db->insert($data);
			} catch (Exception $e) {
				return $e;
			}
		} catch (Exception $e) {
			return $e;
		}
	}

	function all($table)
	{
		require_once FCPATH . "/core/InfestPromote/db/SleekDB.php";
		$dataDir = FCPATH . "/core/InfestPromote/databases";
		try {
			$db = SleekDB::store($table, $dataDir);
			return $db->orderBy('desc','_id')->fetch();
		} catch (Exception $e) {
			return $e;
		}
	}

	function delDB($table){
		require_once FCPATH . "/core/InfestPromote/db/SleekDB.php";
		$dataDir = FCPATH . "/core/InfestPromote/databases";
		try {
			$db = SleekDB::store($table, $dataDir);
			return $db->deleteStore();
		} catch (Exception $e) {
			return $e;
		}
	}

	function Login($table, $where)
	{
		require_once FCPATH . "/core/InfestPromote/db/SleekDB.php";
		$dataDir = FCPATH . "/core/InfestPromote/databases";
		try {
			$db = SleekDB::store($table, $dataDir);
			try {
				return $results = $db
									->where($where[0]['fieldName'],$where[0]['condition'],$where[0]['value'])
									->where($where[1]['fieldName'],$where[1]['condition'],$where[1]['value'])
									->fetch();
			} catch (Exception $e) {
				return $e;
			}
		} catch (Exception $e) {
			return $e;
		}
	}
}

?>
