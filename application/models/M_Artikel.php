<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class M_Artikel extends CI_Model {
    public function daftar()
    {
        $query = $this->db->select("keanggotaan_nama, keanggotaan_divisi, divisi_keterangan, artikel_keterangan_keterangan, artikel.*")->from("artikel")
        ->join("keanggotaan", "keanggotaan.keanggotaan_username=artikel.artikel_penerbit")
        ->join("divisi", "divisi.divisi_id=keanggotaan.keanggotaan_divisi")
        ->join("artikel_keterangan", "artikel_keterangan_id=artikel.artikel_keterangan")
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
                "keterangan" => "Artikel tidak ditemukan."
            );
        }
    }

    public function lihat($id)
    {
        $query = $this->db->select("keanggotaan_nama, keanggotaan_divisi, divisi_keterangan, artikel_keterangan_keterangan, artikel.*")->from("artikel")
        ->join("keanggotaan", "keanggotaan.keanggotaan_username=artikel.artikel_penerbit")
        ->join("divisi", "keanggotaan.keanggotaan_divisi=divisi.divisi_id")
        ->join("artikel_keterangan", "artikel_keterangan_id=artikel.artikel_keterangan")
        ->where("artikel_id", $id)->get();

        if ($query->num_rows() > 0) {
            $query  = $query->row();
            
            if (!@is_file("./assets/gambar/keanggotaan/".$query->artikel_penerbit.".png")) {
                $foto	= base_url("assets/")."gambar/keanggotaan/_standar.png";
            } else {
                $foto	= base_url("assets/")."gambar/keanggotaan/".$query->artikel_penerbit.".png";
            }
            return array(
                "status" => 200,
                "keterangan" => array(
                    "id" => $query->artikel_id,
                    "keterangan" => $query->artikel_keterangan_keterangan,
                    "waktu" => $query->artikel_waktu,
                    "foto" => $foto,
                    "penerbit_nama" => $query->keanggotaan_nama,
                    "penerbit_divisi" => $query->divisi_keterangan,
                    "judul" => $query->artikel_judul,
                    "isi" => $query->artikel_isi
                )
            );
        }
        else {
            return array(
                "status" => 204,
                "keterangan" => "Artikel tidak ditemukan."
            );
        }
    }
}