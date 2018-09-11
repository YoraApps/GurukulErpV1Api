<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DegreeCategoryModel extends CI_Model {

    public function degree_category_all_data()
    {
        return $this->db->select('id,code,name,isactive')->from('tbl_degree_category')->order_by('id','desc')->get()->result();
    }

    public function degree_category_detail_data($id)
    {
        return $this->db->select('id,code,name,isactive')->from('tbl_degree_category')->where('id',$id)->order_by('id','desc')->get()->row();
    }

    public function degree_category_create_data($data)
    {
        $this->db->insert('tbl_degree_category',$data);
        return array('status' => 201,'message' => 'Data has been created.');
    }

    public function degree_category_update_data($id,$data)
    {
        $this->db->where('id',$id)->update('tbl_degree_category',$data);
        return array('status' => 200,'message' => 'Data has been updated.');
    }

    public function degree_category_delete_data($id)
    {
        $this->db->where('id',$id)->delete('tbl_degree_category');
        return array('status' => 200,'message' => 'Data has been deleted.');
    }

}
