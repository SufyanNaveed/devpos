<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crm_booking_model extends CI_Model
{

    public function getPets()
    {
        // $this->session()->userdata;
        $userId = $this->session->userdata();
        $id = $userId['user_details'][0]->cid;
        if($this->input->get('id')!=null ){
            $petId=$this->input->get('id');
            $sql="SELECT p.pet_id id,p.pet_name,p.mark_difference ,p.date_of_birth,p.microchip_number ,p.pet_photo ,p.status ,
            c.title color, b.title pet_breed , t.title pet_type 
            from pos_pets p
            left join pos_pet_color c on p.pet_color =c.id
            left join pos_pet_breeds b on p.pet_breed=b.id
            left join pos_pet_types t on p.pet_type =t.id where p.status<>0 and p.pet_id=".$petId;
            // left join pos_pet_mark_difference m on p.mark_difference =m.id 
            $result = $this->db->query($sql);
        }else{

            $sql="SELECT p.pet_id id,p.pet_name,p.mark_difference ,p.date_of_birth,p.microchip_number ,p.pet_photo ,p.status ,
            c.title color, b.title pet_breed  , t.title pet_type 
            from pos_pets p
            left join pos_pet_color c on p.pet_color =c.id
            left join pos_pet_breeds b on p.pet_breed=b.id
            left join pos_customer_pets pcp on p.pet_id=pcp.pet_id
            left join pos_pet_types t on p.pet_type =t.id where p.status<>0 and pcp.customer_id=".$id;
            // left join pos_pet_mark_difference m on p.mark_difference =m.id;
            $result = $this->db->query($sql);
        }
            
        return $result;
    }

    public function getDoctors()
    {
        $sql="SELECT gu.email,gu.id as doctor_id ,ge.* from geopos_users gu join geopos_employees ge on gu.id=ge.id where roleid=6";
        $result = $this->db->query($sql);                  
        return $result;
    }

    public function getDoctor_id($id=0)
    {
        $this->db->select('picture');
        $this->db->from('geopos_employees');
        $this->db->where('id',$id);
        $result = $this->db->get()->result(); 
        // $result  = $query->row_array();
        return $result;
    }
    public function getSpeciality($id)
    {
        
        $sql="SELECT * FROM  advisor_specialities WHERE  status=1 and advisor_id=".$id;
        $result = $this->db->query($sql);
        return $result;
    }
    public function getAvailability($doctorId,$dayName)
    {
        if($dayName !=''){
            $sql="SELECT * from advisor_availabilities WHERE day='".$dayName."' and is_available =1 and advisor_id =".$doctorId;
            $result = $this->db->query($sql);            
        }else{
            $this->db->select('*');
            $this->db->from('advisor_availabilities');
            $this->db->where('advisor_id',$doctorId);
            $this->db->where('is_available',1);
            $query = $this->db->get(); 
            $result  = $query->result();
        }
        return $result;
    }


    public function addnew($data)
    {
        // print_r($data['doctor_id']);exit;
        $this->db->select('*');
        $this->db->from('bookings');
        $this->db->where(['doctor_id'=>$data['doctor_id'],'on'=>$data['on'],'from'=>$data['from'],'to'=>$data['to']]);
        $query = $this->db->get();
        $result  = $query->result_array();
        if(!empty($result))
        {
            $this->session->set_flashdata('error', 'You cannot book against this time slot'); 
            redirect('/booking/schedule');
        }
        else{
            $checkbooking = $this->db->select('*')->where(['doctor_id'=>$data['doctor_id']])->from('bookings');
            // echo "<pre>";
            // print_r($checkbooking);
            // exit;
            if ($this->db->insert('bookings', $data)) {
                // set flash data
                $id = $this->db->insert_id();
                $queueNO = date('my');
                $queNO =  $queueNO.str_pad($id, 3, 0, STR_PAD_LEFT);
                $data = [
                 'queue_no'=>$queNO
             ];
                $this->db->set($data)
             ->where('id', $id)
             ->update(' bookings');
                // $this->session->set_flashdata('success', 'Booking Scheduled Successfully');
                // redirect('/booking/schedule');
                return $id;
            } else {
                $this->session->set_flashdata('error', 'Error while adding booking');
                redirect('/booking/schedule');
            }
        }
        // $pet_colorId = $this->db->insert_id();
        // $this->db->insert('pos_pet_breeds', ['title'=>$pet_breed]);
        // $breedId = $this->db->insert_id();
        // $this->db->insert('pos_pet_types', ['title'=>$pet_type]);
        // $typeId = $this->db->insert_id();
        // // $this->db->insert('pos_pet_mark_difference', ['title'=>$mark_difference]);
        // // $markId = $this->db->insert_id();
        // $data = array(
        //     'pet_name' => $pet_name,
        //     'microchip_number' => $microchip_number,
        //     // 'adate' => date('Y-m-d H:i:s'),
        //     'pet_color' => $pet_colorId,
        //     'pet_breed' => $breedId,
        //     'pet_type' => $typeId,
        //     'mark_difference'=>$mark_difference,
        //     'date_of_birth'=>$date_of_birth,
        //     'pet_photo'=>$pet_photo
            
        // );

        // if ($this->db->insert('pos_pets', $data)) {
            
        //     $pet_id=$this->db->insert_id();
        //     $data=$this->session->userdata();
        //     $customerId=$data['user_details'][0]->user_id;
        //     $this->db->insert('pos_customer_pets', ['customer_id'=>$customerId,"pet_id"=>$pet_id]);

        //     echo json_encode(array('status' => 'Success', 'message' =>
        //         $this->lang->line('ADDED'). "  <a href='".base_url('pets/index')."' class='btn btn-blue btn-lg'><span class='fa fa-list-alt' aria-hidden='true'></span>  </a> <a href='add' class='btn btn-info btn-lg'><span class='fa fa-plus-circle' aria-hidden='true'></span>  </a>"));
        // } else {
        //     echo json_encode(array('status' => 'Error', 'message' =>
        //         $this->lang->line('ERROR')));
        // }

    }

    public function add_pet_detail($data)
    {
        if($this->db->insert('pos_pet_medical_detail', $data))
        {
            $this->session->set_flashdata('success', 'Booking Scheduled Successfully');
            redirect('/booking/schedule');
        }
        else
        {
            $this->session->set_flashdata('error', 'Error while adding booking');
            redirect('/booking/schedule');
        }
    }

    public function check_booking_availability($data)
    {
        $this->db->select('*');
        $this->db->from('bookings');
        $this->db->where(['doctor_id'=>$data['doctor_id'],'on'=>$data['on'],'from'=>$data['from'],'to'=>$data['to']]);
        $query = $this->db->get();
        $result  = $query->num_rows();
        return $result;
    }

    
}