<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class M_Pendahuluan extends CI_Model {
    public function umum($menu) {
        $data = array(
            "menu" => array(
                "judul" => $menu["judul"]
            )
        );

        $query = $this->db->select("*")->from("organisasi")->order_by("organisasi_periode", "desc")->get();
        if ($query->num_rows() > 0) {
            $query = $query->row();
            $data = @array_merge($data,
                array(
                    "organisasi" => array(
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
                )
            );
        }
        else {
            $data = @array_merge($data,
                array(
                    "organisasi" => array(
                        "periode" => "",
                        "nama_lengkap" => "",
                        "nama_pendek" => "",
                        "visi" => "",
                        "misi" => "",
                        "deskripsi" => "",
                        "tentang" => "",
                        "sejarah" => "",
                        "kontak" => array(
                            "alamat" => "",
                            "email" => "",
                            "telepon" => "",
                            "facebook" => "",
                            "twitter" => "",
                            "instagram" => "",
                            "youtube" => "",
                            "peta" => ""
                        )
                    )
                )
            );
        }

        return $data;
    }

    public function pengurus($menu, $username) {
        $data = array(
            "menu" => array(
                "judul" => $menu["judul"],
                "judul_sub" => $menu["judul_sub"]
            ),
            "api" => "http://localhost/pskhuinsuka.com.api"
        );

        $query = $this->db->select("organisasi_nama_lengkap, organisasi_nama_pendek")->from("organisasi")->order_by("organisasi_periode", "desc")->get();
        if ($query->num_rows() > 0) {
            $data = @array_merge($data,
                array(
                    "organisasi" => array(
                        "nama_panjang" => $query->row()->organisasi_nama_lengkap,
                        "nama_pendek" => $query->row()->organisasi_nama_pendek
                    )
                )
            );
        }
        else {
            $data = @array_merge($data,
                array(
                    "organisasi" => array(
                        "nama_panjang" => "",
                        "nama_pendek" => ""
                    )
                )
            );
        }

        $query = $this->db->select("keanggotaan_username, keanggotaan_nama, keanggotaan_divisi, keanggotaan_jabatan, akun_keterangan")->from("akun")
        ->join("keanggotaan","keanggotaan.keanggotaan_username=akun.akun_username")
        ->where("akun_username", $username)->get();
        if ($query->num_rows() > 0) {
            $data = @array_merge($data,
                array(
                    "pengguna" => array(
                        "username" => $query->row()->keanggotaan_username,
                        "nama" => $query->row()->keanggotaan_nama,
                        "keterangan" => $query->row()->akun_keterangan,
                        "divisi" => $query->row()->keanggotaan_divisi,
                        "jabatan" => $query->row()->keanggotaan_jabatan
                    )
                )
            );
        } else {
            $data = @array_merge($data,
                array(
                    "pengguna" => array(
                        "username" => "",
                        "nama" => "",
                        "keterangan" => "",
                        "divisi" => "",
                        "jabatan" => ""
                    )
                )
            );
        }

        return $data;
    }
}