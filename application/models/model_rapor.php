<?php
class model_rapor extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function rapornya()
  {
    return $this->db->from('tb_siswa')
            ->join('tb_kelas','tb_siswa.id_kelas=tb_kelas.id_kelas')
            ->join('tb_guru','tb_kelas.id_guru=tb_guru.id_guru')
            ->get()->result();
  }
  public function get_inputrapor(){
      $this->db->from('tb_rapor');
      $this->db->select('tb_rapor.*,tb_nilai_sikap.*,tb_nilai_sikap.nilai_akhir as nilai_akhir_sikap,tb_detail_pengetahuan.*,tb_detail_ketrampilan.*,tb_detail_ketrampilan.nilai_akhir as nilai_akhir_keterampilan,tb_nilai_ekskul.*,tb_presensi.*,tb_siswa.*,tb_kelas.*,tb_guru.*');
      $this->db->join('tb_nilai_sikap','tb_rapor.id_nilai_sikap=tb_nilai_sikap.id_nilai_sikap');
      $this->db->join('tb_detail_pengetahuan','tb_rapor.id_detail_pengetahuan=tb_detail_pengetahuan.id_detail_pengetahuan');
      $this->db->join('tb_detail_ketrampilan','tb_rapor.id_detail_ketrampilan=tb_detail_ketrampilan.id_detail_ketrampilan');
      $this->db->join('tb_nilai_ekskul','tb_rapor.id_nilai_ekskul=tb_nilai_ekskul.id_nilai_ekskul');
      $this->db->join('tb_presensi','tb_rapor.id_presensi=tb_presensi.id_presensi');
      $this->db->join('tb_siswa','tb_rapor.id_siswa=tb_siswa.id_siswa');
      $this->db->join('tb_kelas','tb_siswa.id_kelas=tb_kelas.id_kelas');
      $this->db->join('tb_guru','tb_rapor.id_guru=tb_guru.id_guru');
      $this->db->group_by('id_rapor');

      $query = $this->db->get();
      return $query->result();
    }
    public function input_rapor($id_nilai_sikap,$id_detail_pengetahuan,$id_detail_ketrampilan,$id_nilai_ekskul,$id_presensi,$id_siswa,$id_guru,$catatan){
      $data=array(

      'id_nilai_sikap'=>$id_nilai_sikap,
      'id_detail_pengetahuan'=>$id_detail_pengetahuan,
      'id_detail_ketrampilan'=>$id_detail_ketrampilan,
      'id_nilai_ekskul'=>$id_nilai_ekskul,
      'id_presensi'=>$id_presensi,
      'id_siswa'=>$id_siswa,
      'id_guru'=>$id_guru,
      'catatan'=>$catatan,
      );
      $this->db->insert('tb_rapor',$data);

    }

  public function generate_rapor($id_siswa)
  {
    $id_nilai_sikap = null;
    $this->db->from('tb_nilai_sikap');
    $this->db->where('id_siswa',$id_siswa);
    $id_nilai_sikap = $this->db->get()->row()->id_nilai_sikap;

    $id_detail_pengetahuan = null;
    $this->db->from('tb_detail_pengetahuan');
    $this->db->where('id_siswa',$id_siswa);
    $id_detail_pengetahuan = $this->db->get()->row()->id_detail_pengetahuan;

    $id_detail_ketrampilan = null;
    $this->db->from('tb_detail_ketrampilan');
    $this->db->where('id_siswa',$id_siswa);
    $id_detail_ketrampilan = $this->db->get()->row()->id_detail_ketrampilan;

    $id_presensi = null;
    $this->db->from('tb_presensi');
    $this->db->where('id_siswa',$id_siswa);
    $id_presensi = $this->db->get()->row()->id_presensi;

    $id_nilai_ekskul = null;
    $this->db->from('tb_nilai_ekskul');
    $this->db->where('id_siswa',$id_siswa);
    $id_nilai_ekskul = $this->db->get()->row()->id_nilai_ekskul;

    $id_guru = null;
    $this->db->from('tb_kelas');
    $this->db->join('tb_siswa','tb_kelas.id_kelas=tb_siswa.id_kelas');
    $this->db->where('id_siswa',$id_siswa);
    $id_guru = $this->db->get()->row()->id_guru;

    $catatan = '';

    return $this->input_rapor($id_nilai_sikap,$id_detail_pengetahuan,$id_detail_pengetahuan,$id_detail_ketrampilan,$id_nilai_ekskul,$id_presensi,$id_siswa,$id_guru,$catatan);
  }

  public function get_rapor_judul($id_rapor)
  {
    $this->db->from('tb_rapor');
    $this->db->where('id_rapor',$id_rapor);
    $this->db->join('tb_siswa','tb_rapor.id_siswa=tb_siswa.id_siswa');
    $this->db->join('tb_kelas','tb_siswa.id_kelas=tb_kelas.id_kelas');
    $this->db->join('tb_guru_ampu','tb_kelas.id_kelas=tb_guru_ampu.id_kelas');
    return $this->db->get()->row();
  }

  public function get_rapor_sikap($id_siswa)
  {
    $this->db->from('tb_nilai_sikap');
    $this->db->where('tb_nilai_sikap.id_siswa',$id_siswa);
    $this->db->join('tb_siswa','tb_nilai_sikap.id_siswa=tb_siswa.id_siswa');
    $this->db->join('tb_deskripsi_sikap','tb_nilai_sikap.id_deskripsi_sikap=tb_deskripsi_sikap.id_deskripsi_sikap');
    return $this->db->get()->result();
  }

  public function get_rapor_pengetahuan2($id_siswa,$kelompok)
    {
      $this->db->select('kkm,nama_mapel,ulangan_harian,mapel_pengetahuan.nilai as nilai_peng,mapel_pengetahuan.deskripsi as desk_peng,nilai_akhir,mapel_pengetahuan.nilai as nilai_ket,mapel_keterampilan.deskripsi as desk_ket');
      $this->db->from('tb_mapel');
      $this->db->join('tb_detail_pengetahuan','tb_mapel.id_mapel=tb_detail_pengetahuan.id_mapel');
      $this->db->join('tb_deskripsi_mapel as mapel_pengetahuan','tb_detail_pengetahuan.id_deskripsi_mapel=mapel_pengetahuan.id_deskripsi_mapel');
      $this->db->join('tb_detail_ketrampilan','tb_mapel.id_mapel=tb_detail_ketrampilan.id_mapel');
      $this->db->join('tb_deskripsi_mapel as mapel_keterampilan','tb_detail_ketrampilan.id_deskripsi_mapel=mapel_keterampilan.id_deskripsi_mapel');
      $this->db->where('tb_detail_pengetahuan.id_siswa',$id_siswa);
      $this->db->where('kelompok',$kelompok);
      $this->db->group_by('tb_detail_pengetahuan.id_detail_pengetahuan');
      return $this->db->get()->result();
    }
    public function rapor_ekskul($id_siswa)
    {
      $this->db->select('*')
                ->from('tb_nilai_ekskul')
                ->join('tb_ekskul','tb_ekskul.id_ekskul=tb_nilai_ekskul.id_ekskul')
                ->where('tb_nilai_ekskul.id_siswa',$id_siswa);
      return $this->db->get()->result();
    }
    public function presensi($id_siswa)
    {
      $this->db->select('*')
                ->from('tb_presensi')
                ->where('id_siswa',$id_siswa);
      return $this->db->get()->result();
    }
    // delete pertama
      public function delete_rapor($id_rapor)
      {
      $this->db->where('id_rapor',$id_rapor);
      $query = $this->db->delete('tb_rapor');
      return $query;
        }

}
