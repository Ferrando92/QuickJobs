<?php
	class Muser extends CI_Model
	{
		function __construct()
		{
			parent__contstruct();
		}

		function Muser()
		{
			$this->table="users";
			$this->name_id="id_user";
			parent::Model();
		}

		function count_users()
		{
			$this->db->from('users');
			return $this->db->count_all_results();
		}

		function getUserData($id)
		{
			$this->db->where("id_user",$id);
			$this->db->get("users");
			return $query->result();
		}

		function getUserName($id)
		{
			$this->db->select("username");
			$this->db->where("id_user",$id);
			return $this->db->get("usuarios");
		}

	}