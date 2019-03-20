<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

class Imagem extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    public function getImagesByListingId($id) {

        $this->db->where('listing_id', $id);
        $this->db->select('*');
        $this->db->from('image');
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            return $query->result()[0];
        }
    }

    public function getAllImagesByListingId($id) {

        $this->db->where('listing_id', $id);
        $this->db->select('*');
        $this->db->from('image');
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function InsertImage($list) {

        $this->db->insert('image',$list);

        return $this->db->insert_id();

    }

    public function updateImage($id, $list) {
        
        $this->db->where('image_id', $id);
        $this->db->update('image', $list);
        var_dump($id);
    }

}