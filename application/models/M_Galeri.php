<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class M_Galeri extends CI_Model {
    public function lihat($periode)
    {
        $query = $this->db->select("periode.periode_keterangan, galeri.*")->from("galeri")->where("galeri_periode", $periode)
        ->join("periode", "galeri.galeri_periode=periode.periode_id")
        ->get();
        if ($query->num_rows() > 0) {
            return array(
                "status" => 200,
                "keterangan" => array(
                    "periode" => $query->row()->galeri_periode,
                    "periode_keterangan" => $query->row()->periode_keterangan,
                    "instagram" => $query->row()->galeri_instagram
                )
            );
        }
        else {
            return array(
                "status" => 204,
                "keterangan" => "Profil organisasi tidak ditemukan."
            );
        }
    }
}