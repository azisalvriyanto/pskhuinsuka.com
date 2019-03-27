<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class M_Organisasi extends CI_Model {
    public function lihat($periode)
    {
        $query = $this->db->select("*")->from("organisasi")->where("organisasi_periode", $periode)->get();
        if ($query->num_rows() > 0) {
            $query = $query->row();
            return array(
                "status" => 200,
                "keterangan" => array(
                    "periode" => $query->organisasi_periode,
                    "nama_lengkap" => $query->organisasi_nama_lengkap,
                    "nama_pendek" => $query->organisasi_nama_pendek,
                    "visi" => $query->organisasi_visi,
                    "misi" => $query->organisasi_misi,
                    "deskripsi" => $query->organisasi_deskripsi,
                    "tentang" => $query->organisasi_tentang,
                    "sejarah" => $query->organisasi_sejarah,
                    "kontak" => array(
                        "alamat" => $query->organisasi_alamat,
                        "email" => $query->organisasi_email,
                        "telepon" => $query->organisasi_telepon,
                        "facebook" => $query->organisasi_facebook,
                        "twitter" => $query->organisasi_twitter,
                        "instagram" => $query->organisasi_instagram,
                        "youtube" => $query->organisasi_youtube,
                        "peta" => $query->organisasi_peta
                    )
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