<?php

namespace models;

use core\Database;

class Pelanggaran
{
	private Database $db;
	public function __construct()
	{
		$this->db = new Database();
	}
	public function __destruct() {
		unset($this->db);
	}

	public function getAllTingkatan(): array
	{
		$this->db->prepare("SELECT * FROM pelanggaran");
		return $this->db->resultSet();
	}

	public function getTingkatan($tingkat)
	{
		$this->db->prepare("SELECT * FROM pelanggaran WHERE tingkatan =:tingkatan");
		$tingkat = "Tingkat " . $tingkat;
		$this->db->bind(":tingkatan", $tingkat);
		return $this->db->single();
	}

	public function getAllJenisFromTingkatan($tingkatan = []): array
	{
		$arrJenis = [];
		foreach ($tingkatan as $elm) {
			$noTingkat = $elm['tingkatan'];
			$this->db->prepare("SELECT no_jenis, jenis FROM jenis_pelanggaran WHERE tingkatan =:tingkatan ORDER BY no_jenis");
			$this->db->bind(":tingkatan", $noTingkat);
			$arrJenis[$noTingkat] = $this->db->resultSet();
		}
		return $arrJenis;
	}

	public function getAllJenisTingkatan($data = []): array
	{
		$data = $data['tingkatan'];
		$this->db->prepare("SELECT jenis FROM jenis_pelanggaran WHERE tingkatan =:tingkatan ");
		$this->db->bind(":tingkatan", $data);
		return $this->db->resultSet();
	}

	public function getAllSanksi($data = []): array
	{
		$data = $data['tingkatan'];
		$this->db->prepare("SELECT sanksi FROM sanksi_pelanggaran WHERE tingkatan =:tingkatan ");
		$this->db->bind(":tingkatan", $data);
		return $this->db->resultSet();
	}
}