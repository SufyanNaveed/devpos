<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pos_pets_model extends CI_Model
{

    public function getPets()
    {
       
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
            left join pos_pet_types t on p.pet_type =t.id where p.status<>0";
            // left join pos_pet_mark_difference m on p.mark_difference =m.id;
            $result = $this->db->query($sql);
            // print_r($result);exit;
        }
        
        return $result;
    }

    public function getAppointmentPets()
    {
        if($this->input->get('id')!=null ){
            // print_r($this->input->get('id'));exit;

            $petId=$this->input->get('id');
            $sql="SELECT u.name,u.email,u.user_type,p.pet_id id,p.pet_name,p.mark_difference ,p.date_of_birth,p.microchip_number ,p.pet_photo ,p.status ,
            c.title color, b.title pet_breed , t.title pet_type ,bk.queue_no,bk.on,bk.to,bk.from,bk.id as booking_id
            from pos_pets p
            left join users u on p.user_id =u.users_id
            left join pos_pet_color c on p.pet_color =c.id
            left join pos_pet_breeds b on p.pet_breed=b.id
            join bookings bk on p.pet_id =bk.pet_id
            left join pos_pet_types t on p.pet_type =t.id where p.status<>0 and p.pet_id=".$petId;
            
            
            // left join pos_pet_mark_difference m on p.mark_difference =m.id 
            $result = $this->db->query($sql);
        }else{
            $roleId=$this->aauth->get_user()->roleid;
            $did=$this->aauth->get_user()->id;
            // print_r($did); echo "1"; exit;
            // if($did = 6)
            // {
            //     $sql=    "SELECT p.pet_id id,p.pet_name,p.mark_difference ,p.date_of_birth,p.microchip_number ,p.pet_photo ,p.status ,
            //     c.title color, b.title pet_breed  , t.title pet_type, bk.queue_no from pos_pets p
            //     join pos_pet_color c on p.pet_color =c.id
            //     join bookings bk on p.pet_id =bk.pet_id
            //     join pos_pet_breeds b on p.pet_breed=b.id
            //     join pos_pet_types t on p.pet_type =t.id where p.status<>0 and bk.doctor_id".$did;
            // }
            // $CI = get_instance();
            // $CI->db->select('*');
            //     $CI->db->from('bookings');
            //     $CI->db->where('doctor_id', $did);
            //     $qr = $CI->db->get();
//  echo "<pre>";print_r($qr->result_array());exit;
if($roleId == 6)
            {
                // print_r($roleId);exit;
            //     $did=$this->aauth->get_user()->id;
            // print_r($did); exit;
                    // echo "yes";exit;
            $sql=    "SELECT u.name,u.email,u.user_type,p.pet_id id,p.pet_name,p.mark_difference ,p.date_of_birth,p.microchip_number ,p.pet_photo ,p.status ,
            c.title color, b.title pet_breed  , t.title pet_type, bk.queue_no,bk.queue_no,bk.on,bk.to,bk.from,bk.id as booking_id from pos_pets p
            left join users u on p.user_id =u.users_id
            join pos_pet_color c on p.pet_color =c.id
            join bookings bk on p.pet_id =bk.pet_id
            join pos_pet_breeds b on p.pet_breed=b.id
            join pos_pet_types t on p.pet_type =t.id where p.status<>0 and bk.staging_status = 'doctor' and bk.doctor_id=".$did;
            
       
        }
    else if($roleId == 9)
    {
                $sql=    "SELECT u.name,u.email,u.user_type,p.pet_id id,p.pet_name,p.mark_difference ,p.date_of_birth,p.microchip_number ,p.pet_photo ,p.status ,
                c.title color, b.title pet_breed  , t.title pet_type, bk.queue_no,bk.on,bk.to,bk.from,bk.id as booking_id from pos_pets p
                left join users u on p.user_id =u.users_id
                join pos_pet_color c on p.pet_color =c.id
                join bookings bk on p.pet_id =bk.pet_id
                join pos_pet_breeds b on p.pet_breed=b.id
                join pos_pet_types t on p.pet_type =t.id  where p.status<>0 and bk.staging_status = 'receptionist'";        
    }
    else{
                // echo "yes";exit;
                $sql=    "SELECT u.name,u.email,u.user_type,p.pet_id id,p.pet_name,p.mark_difference ,p.date_of_birth,p.microchip_number ,p.pet_photo ,p.status ,
                c.title color, b.title pet_breed  , t.title pet_type, bk.queue_no,bk.on,bk.to,bk.from,bk.id as booking_id from pos_pets p
                left join users u on p.user_id =u.users_id
                join pos_pet_color c on p.pet_color =c.id
                join bookings bk on p.pet_id =bk.pet_id
                join pos_pet_breeds b on p.pet_breed=b.id
                join pos_pet_types t on p.pet_type =t.id  where p.status<>0";
            }
            // left join pos_pet_mark_difference m on p.mark_difference =m.id;
// echo "<pre>";print_r($sql);exit;
            $result = $this->db->query($sql)->result();
        }
        
        return $result;
    }

    // public function getMedicalDetail($booking_id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('pos_pet_medical_detail');

    //     $this->db->where('booking_id', $booking_id);
    //     return $this->db->get()->row_array();
    // }

    function getMedicalDetail($booking_id = 0)
    {
        $this->db->select('*');
        $this->db->from('pos_pet_medical_detail');       
        // $this->db->join('pos_pets','pos_pets.pet_id=pos_pet_medical_detail.pet_id','left');
        // $this->db->join('users','pos_pets.user_id=users.users_id','left');
        // $this->db->join('pos_pet_color','pos_pet_color.id=pos_pets.pet_color','left');
        // $this->db->join('pos_pet_breeds','pos_pet_breeds.id=pos_pets.pet_breed','left');
        if($booking_id > 0){
            $this->db->where('pos_pet_medical_detail.booking_id', $booking_id);
        }
       return $this->db->get()->row_array();
    }

    public function getStagingStatus($booking_id)
    {
        $this->db->select('staging_status');
        $this->db->from('bookings');
        $this->db->where('id', $booking_id);
        return $this->db->get()->row()->staging_status;
    }

    public function addnew($pet_name, $pet_color, $pet_breed, $pet_type, $microchip_number, $mark_difference,$date_of_birth,$pet_photo)
    {
        $this->db->insert('pos_pet_color', ['title'=>$pet_color]);
        $pet_colorId = $this->db->insert_id();
        $this->db->insert('pos_pet_breeds', ['title'=>$pet_breed]);
        $breedId = $this->db->insert_id();
        $this->db->insert('pos_pet_types', ['title'=>$pet_type]);
        $typeId = $this->db->insert_id();
        // $this->db->insert('pos_pet_mark_difference', ['title'=>$mark_difference]);
        // $markId = $this->db->insert_id();
        $data = array(
            'pet_name' => $pet_name,
            'microchip_number' => $microchip_number,
            // 'adate' => date('Y-m-d H:i:s'),
            'pet_color' => $pet_colorId,
            'pet_breed' => $breedId,
            'pet_type' => $typeId,
            'mark_difference'=>$mark_difference,
            'date_of_birth'=>$date_of_birth,
            'pet_photo'=>$pet_photo
            
        );



        if ($this->db->insert('pos_pets', $data)) {
            echo json_encode(array('status' => 'Success', 'message' =>
                $this->lang->line('ADDED'). "  <a href='".base_url('pets/index')."' class='btn btn-blue btn-lg'><span class='fa fa-list-alt' aria-hidden='true'></span>  </a> <a href='add' class='btn btn-info btn-lg'><span class='fa fa-plus-circle' aria-hidden='true'></span>  </a>"));
        } else {
            echo json_encode(array('status' => 'Error', 'message' =>
                $this->lang->line('ERROR')));
        }

    }


    public function edit($pet_id,$pet_name, $pet_color, $pet_breed, $pet_type, $microchip_number, $mark_difference,$date_of_birth,$pet_photo)
    {

        $this->db->where('pet_id',$pet_id);
        $data=$this->db->get('pos_pets')->row_array();
        
        $this->db->set(['title'=>$pet_color]);
        $this->db->where('id', $data['pet_color']);
        $this->db->update('pos_pet_color');
        
        $this->db->set(['title'=>$pet_breed]);
        $this->db->where('id', $data['pet_breed']);
        $this->db->update('pos_pet_breeds');
        
        $this->db->set(['title'=>$pet_type]);
        $this->db->where('id', $data['pet_type']);
        $this->db->update('pos_pet_types');

        // $this->db->set(['title'=>$mark_difference]);
        // $this->db->where('id', $data['mark_difference']);
        // $this->db->update('pos_pet_mark_difference');
        
        $data = array(
            'pet_name' => $pet_name,
            'microchip_number' => $microchip_number,
            'mark_difference' => $mark_difference,
            'date_of_birth'=>$date_of_birth,
            'pet_photo'=>$pet_photo
            // 'adate' => date('Y-m-d H:i:s'),
        );

        $this->db->set($data);
        $this->db->where('pet_id', $pet_id);

        if ($this->db->update('pos_pets')) {
            echo json_encode(array('status' => 'Success', 'message' =>
                $this->lang->line('updated'). "  <a href='".base_url('pets/index')."' class='btn btn-blue btn-lg'><span class='fa fa-list-alt' aria-hidden='true'></span>  </a> <a href='add' class='btn btn-info btn-lg'><span class='fa fa-plus-circle' aria-hidden='true'></span>  </a>"));
        } else {
            echo json_encode(array('status' => 'Error', 'message' =>
                $this->lang->line('ERROR')));
        }

    }

    public function delete($id)
    {

        $this->db->set(['status' => 0]);
        $this->db->where('pet_id', $id);
        if ($this->db->update('pos_pets')) {
            echo json_encode(array('status' => 'Success', 'message' =>
                $this->lang->line('deleted'). "  <a href='".base_url('pets/index')."' class='btn btn-blue btn-lg'><span class='fa fa-list-alt' aria-hidden='true'></span>  </a> <a href='add' class='btn btn-info btn-lg'><span class='fa fa-plus-circle' aria-hidden='true'></span>  </a>"));
        } else {
            echo json_encode(array('status' => 'Error', 'message' =>
                $this->lang->line('ERROR')));
        }

    }

    public function update_receprionist($data, $id, $booking_id)
    {
        $this->db->where('id', $id);
        if($this->db->update('pos_pet_medical_detail', $data))
        {
            $data_rec = 
            [
                'staging_status' => 'doctor'
            ];
            $this->db->where('id', $booking_id);
            if($this->db->update('bookings', $data_rec))
            {
                return true;
            }
        }

    }

    
}