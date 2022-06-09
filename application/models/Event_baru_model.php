<?php
    class Event_baru_model extends CI_MODEL{
        
        public function __construct(){
            $this->load->database();
        }

        public function get($id=null){
            if(!empty($id)) $this->db->where('kodeEvent', $id);
            $this->db->from('dataEventBaru');
            $this->db->select('*');
            $query = $this->db->get();

            return $query->result();
        }

        public function add_event($data){
            $this->db->insert('dataEventBaru', $data);

            return $this->db->insert_id();
        }

        public function add_alat_event($data){
            $this->db->insert('dataTransaksiAlatEvent', $data);

            return 1;
        }

        public function get_list_alat($id){
            if(!empty($id)) $this->db->where('kodeEvent', $id);
            $this->db->from('dataTransaksiAlatEvent');
            $this->db->select('*');
            $query = $this->db->get();

            return $query->result();
        }

        public function edit_status($data, $id){
            $this->db->where('kodeEvent', $id);
            $this->db->update('dataEventBaru', $data);
        }

        public function get_accepted(){
            $this->db->where('status = 1');
            $this->db->from('dataEventBaru');
            $this->db->select('*');
            $query = $this->db->get();

            return $query->result();
        }
    }