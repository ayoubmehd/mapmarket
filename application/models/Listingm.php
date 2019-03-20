<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

class Listingm extends CI_Model {

    public function getAllListing($limit = 0, $start = 0) {

        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->from('listing');
        $query = $this->db->get();
        return $query->result();
    }

    public function Save($list) {

        $this->db->insert("listing",$list);
        return $this->db->insert_id();
    }

    public function getCount() {

        return $this->db->count_all('listing');

    }

    public function getProductById($id) {

        $this->db->where('listing_id', $id);
        $this->db->select('*');
        $this->db->from('listing');
        $query = $this->db->get();
        return $query->result()[0];

    }

}