<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Rating_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get rating by id
     */
    function get_rating($id)
    {
        return $this->db->get_where('ratings',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all ratings
     */
    function get_all_ratings()
    {
        // $this->db->order_by('id', 'desc');
        // return $this->db->get('ratings')->result_array();
        return $this->db->query("select r.id,rc.name as rating_type,CONCAT(s.first_name, ' ', s.last_name) as user_id,r.mobile_no,r.reason,r.added_by,r.date_created from ratings r inner join rating_category rc on r.rating_type=rc.id inner join users s on r.user_id=s.id order by r.id desc")->result_array();
    }
    function get_all_ratings_report($branch_id,$staff,$date_from,$date_to)
    {
        if(isset($staff)){
            $where=" where DATE(r.date_created)>='{$date_from}' and DATE(r.date_created)<='{$date_to}' and r.user_id IN (" . implode(",", $staff) . ")";
        }else{
            $where=" where DATE(r.date_created)>='{$date_from}' and DATE(r.date_created)<='{$date_to}'";
        }
        // print_r("select r.id,rc.name as rating_type,s.full_name as user_id,r.reason,r.added_by,r.date_created from ratings r inner join rating_category rc on r.rating_type=rc.id inner join staff s on r.user_id=s.id ".$where." order by r.id desc");exit;
        return $this->db->query("select r.id,rc.name as rating_type,CONCAT(s.first_name, ' ', s.last_name) as user_id,r.mobile_no,r.reason,r.added_by,r.date_created from ratings r inner join rating_category rc on r.rating_type=rc.id inner join users s on r.user_id=s.id ".$where." order by r.id desc")->result_array();
    }
    function get_all_ratings_staff($staff)
    {
        if($staff>0){
            $where="where r.user_id={$staff}";
        }
        else{
            $where="";
        }
        return $this->db->query("select r.id,rc.name as rating_type,CONCAT(s.first_name, ' ', s.last_name) as user_id,r.mobile_no,r.reason,r.added_by,r.date_created from ratings r inner join rating_category rc on r.rating_type=rc.id inner join users s on r.user_id=s.id ".$where." order by r.id desc")->result_array();
    }
    function get_all_ratings_period($period)
    {
        if($period==1){
            $now=date('Y-m-d');
            $end_date=date('Y-m-d', strtotime("-7 days"));
            $where=" where DATE(r.date_created)<='{$now}' and DATE(r.date_created)>='{$end_date}'";
        }elseif($period==2){
            $month=date('m');
            $where="where MONTH(r.date_created)='{$month}'";
        }else{
            $where="";
        }
        return $this->db->query("select r.id,rc.name as rating_type,CONCAT(s.first_name, ' ', s.last_name) as user_id,r.mobile_no,r.reason,r.added_by,r.date_created from ratings r inner join rating_category rc on r.rating_type=rc.id inner join users s on r.user_id=s.id ".$where." order by r.id desc")->result_array();
    }
    function view_rating($id){
        return $this->db->query("select r.id,rc.name as rating_type,CONCAT(s.first_name, ' ', s.last_name) as user_id,r.mobile_no,r.reason,r.added_by,r.date_created from ratings r inner join rating_category rc on r.rating_type=rc.id inner join users s on r.user_id=s.id where r.id={$id} order by r.id desc")->row_array();
    }  
    /*
     * function to add new rating
     */
    function add_rating($params)
    {
        $this->db->insert('ratings',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update rating
     */
    function update_rating($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('ratings',$params);
    }
    
    /*
     * function to delete rating
     */
    function delete_rating($id)
    {
        return $this->db->delete('ratings',array('id'=>$id));
    }
}
