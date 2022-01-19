<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umkm_model extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM umkm";

		$data = $this->db->query($sql);

		return $data->result();
	}

    public function update($data) {
		$sql = "UPDATE umkm SET nama_pemilik ='" .$data['nama_pemilik'] ."', nama_umkm='" .$data['nama_umkm'] ."', kampung='" .$data['kampung'] ."', rt='" .$data['rt'] ."', rw='" .$data['rw'] ."', desa='" .$data['desa'] ."', kecamatan='" .$data['kecamatan'] ."', jenis_usaha='" .$data['jenis_usaha'] ."', tahun_berdiri=" .$data['tahun_berdiri'] ." WHERE id='" .$data['id_profil'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id_profil) {
		$sql = "DELETE FROM umkm WHERE id_profil='" .$id_profil ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$id_profil = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO umkm VALUES('{$id_profil}','" .$data['nama_pemilik'] ."','" .$data['nama_umkm'] ."','" .$data['kampung'] ."','" .$data['rt'] ."'," .$data['rw'] ."," .$data['desa'] ."," .$data['kecamatan'] ."," .$data['jenis_usaha'] ."," .$data['tahun_berdiri'] .",1)";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
