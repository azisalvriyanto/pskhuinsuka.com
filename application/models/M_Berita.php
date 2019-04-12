<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class M_Berita extends CI_Model {
    public function daftar()
    {
        $query = $this->db->select("keanggotaan_nama, keanggotaan_divisi, divisi_keterangan, berita_keterangan_keterangan, berita.berita_id, berita.berita_keterangan, berita.berita_waktu, berita.berita_penerbit, berita.berita_judul")->from("berita")
        ->join("keanggotaan", "keanggotaan.keanggotaan_username=berita.berita_penerbit")
        ->join("divisi", "divisi.divisi_id=keanggotaan.keanggotaan_divisi")
        ->join("berita_keterangan", "berita_keterangan.berita_keterangan_id=berita.berita_keterangan")
        ->get();

        if ($query->num_rows() > 0) {
            return array(
                "status" => 200,
                "keterangan" => json_decode(json_encode($query->result()), TRUE)
            );
        }
        else {
            return array(
                "status" => 204,
                "keterangan" => "Berita tidak ditemukan."
            );
        }
    }

    public function lihat($id)
    {
        $query = $this->db->select("keanggotaan_nama, keanggotaan_divisi, divisi_keterangan, berita_keterangan_keterangan, berita.*")->from("berita")
        ->join("keanggotaan", "keanggotaan.keanggotaan_username=berita.berita_penerbit")
        ->join("divisi", "keanggotaan.keanggotaan_divisi=divisi.divisi_id")
        ->join("berita_keterangan", "berita_keterangan_id=berita.berita_keterangan")
        ->where("berita_id", $id)->get();

        if ($query->num_rows() > 0) {
            $query  = $query->row();
            
            if (!@is_file("./assets/gambar/keanggotaan/".$query->berita_penerbit.".png")) {
                $foto	= base_url("assets/")."gambar/keanggotaan/_standar.png";
            } else {
                $foto	= base_url("assets/")."gambar/keanggotaan/".$query->berita_penerbit.".png";
            }
            return array(
                "status" => 200,
                "keterangan" => array(
                    "id" => $query->berita_id,
                    "keterangan" => $query->berita_keterangan_keterangan,
                    "waktu" => $query->berita_waktu,
                    "foto" => $foto,
                    "penerbit_nama" => $query->keanggotaan_nama,
                    "penerbit_divisi" => $query->divisi_keterangan,
                    "judul" => $query->berita_judul,
                    "isi" => $query->berita_isi
                )
            );
        }
        else {
            return array(
                "status" => 204,
                "keterangan" => "Berita tidak ditemukan."
            );
        }
    }
}