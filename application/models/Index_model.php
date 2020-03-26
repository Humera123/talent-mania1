<?php
class Index_model extends CI_Model
{
 function dashboardLoad($id)
 {
    $query = $this->db->get_where('jobseeker_user', array('talentid' => $id));
    foreach ($query->result() as $row)
    {
        return $row->type;
    }
 }

 function getApproval($id){
    $query = $this->db->get_where('jobseeker_info', array('talentid' => $id));
    foreach ($query->result() as $row)
    {
        $data = array(
            'approval'  => $row->approval,
           );
        return $data;
    }
 }

 function viewerscount_insert($id,$type){
    $time = time();
    $query = $this->db->get_where('live_count', array('sessionid' => $id));
    if($query->num_rows()== NULL){
        $data = array(
            'sessionid' => $id,
            'type'      => $type,
            'time'      => $time
        );
        $this->db->insert('live_count',$data);
    }
    else{
        $data = array(
            'time' => $time
        );
        $t = $time-600;
        $this->db->where('time',$t);
        $this->db->delete('live_count');
        $this->db->set('time', $time);
        $this->db->where('sessionid',$id);
        $this->db->update('live_count');
    }
 }
}

?>