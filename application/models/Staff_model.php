<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Staff_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get staff by id
     */
    function get_staff($id)
    {
        return $this->db->get_where('staff',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all staff
     */
    function get_all_staff()
    {
        // $this->db->order_by('id', 'desc');
        // return $this->db->get_where('staff',array('role_id'=>0))->result_array();
        return $this->db->query("select s.id,s.first_name,s.last_name,s.mobile_no,s.city,s.vehicle_type,s.model,s.email,s.date_created,b.branch_name  from staff s inner join branch b on s.branch_id=b.id WHERE role_id=0 order by s.id desc")->result_array();
    }
        
    function get_staffbyBranch($b_id){
        return $this->db->query("Select * from staff  WHERE branch_id = {$b_id}  and role_id =0")->result_array();
    }
    /*
     * function to add new staff
     */
    function add_staff($params)
    {
        $this->db->insert('staff',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update staff
     */
    function update_staff($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('staff',$params);
    }
    
    /*
     * function to delete staff
     */
    function delete_staff($id)
    {
        return $this->db->delete('staff',array('id'=>$id));
    }
}