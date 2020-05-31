<?php   

    class Karyawan_model extends CI_Model {

        protected $table = 'karyawan';


        function dokumen(){
            return $this->db->get('master_dokumen')->result();
        }

        function pendidikan(){
            return $this->db->get('master_pendidikan')->result();
        }


        function detail($nip){

            $this->db->from($this->table);
            $this->db->join('master_golongan',$this->table.'.id_golongan = master_golongan.id_golongan','left');
            $this->db->join('master_jenjang','master_golongan.id_jenjang = master_jenjang.id_jenjang','left');
            $this->db->join('master_tipefungsional','master_jenjang.id_tipefungsional = master_jenjang.id_tipefungsional','left');
            $this->db->where('nip',$nip);
            $query = $this->db->get();
            $run = $query->row();
            return $run;

        }


        function dokumen_jabfung($nip){

            $this->db->from('karyawan_dokumen');
            $this->db->join('master_dokumen','karyawan_dokumen.id_dokumen = master_dokumen.id_dokumen','left');
            $this->db->where('nip',$nip);
            $query = $this->db->get();
            $run = $query->result();
            return $run;

        }


        function cek_ada($nip,$nik){

            $this->db->from($this->table);
            $this->db->join('master_golongan',$this->table.'.id_golongan = master_golongan.id_golongan','left');
            $this->db->join('master_jenjang','master_golongan.id_jenjang = master_jenjang.id_jenjang','left');
            $this->db->join('master_tipefungsional','master_jenjang.id_tipefungsional = master_jenjang.id_tipefungsional','left');
            $this->db->where('nip',$nip);
            $this->db->where('nik',$nik);
            $query = $this->db->get();
            $run = $query->result();
            return $run;

        }


        function data($limit,$from){


     $this->db->from($this->table);
    // $this->db->join('users','karyawan.nip = users.nip','left');

     $this->db->join('master_golongan',$this->table.'.id_golongan = master_golongan.id_golongan','left');
     $this->db->join('master_jenjang','master_golongan.id_jenjang = master_jenjang.id_jenjang','left');
     $this->db->join('master_tipefungsional','master_jenjang.id_tipefungsional = master_jenjang.id_tipefungsional','left');
   //$this->db->where('users.is_admin','!=1');
                $this->db->limit($limit,$from);
            
         return $query = $this->db->get()->result();		
        }

        function total(){
            return $this->db->get($this->table)->num_rows();
        }



    }
