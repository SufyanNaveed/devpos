<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crm_pets_model extends CI_Model
{

    public function getPets()
    {

        //  $id = $this->input->get('id');
        // print_r($id);exit;
        if($this->input->get('id')!=null ){
            $petId=$this->input->get('id');
            $sql="SELECT u.name,u.email, p.pet_id id,p.pet_name,p.mark_difference ,p.date_of_birth,p.microchip_number ,p.pet_photo ,p.status ,
            c.title color, b.title pet_breed , t.title pet_type
            from pos_pets p
            left join users u on p.user_id =u.users_id
            left join pos_pet_color c on p.pet_color =c.id
            left join pos_pet_breeds b on p.pet_breed=b.id
            left join pos_customer_pets pcp on p.pet_id=pcp.pet_id
            left join pos_pet_types t on p.pet_type =t.id where p.status<>0 and p.pet_id=".$petId;
            // left join pos_pet_mark_difference m on p.mark_difference =m.id 
            $result = $this->db->query($sql);
        }else{
            $customerId = $this->session->userdata('user_details')[0]->cid;
            // print_r($customerId);exit;
            $sql="SELECT u.name,u.email, p.pet_id id,p.pet_name,p.mark_difference ,p.date_of_birth,p.microchip_number ,p.pet_photo ,p.status ,
            c.title color, b.title pet_breed  , t.title pet_type 
            from pos_pets p
            left join users u on p.user_id =u.users_id
            left join pos_pet_color c on p.pet_color =c.id
            left join pos_customer_pets pcp on p.pet_id=pcp.pet_id
            left join pos_pet_breeds b on p.pet_breed=b.id
            left join pos_pet_types t on p.pet_type =t.id where p.status<>0 and pcp.customer_id=".$customerId;
            $result = $this->db->query($sql);
        //    echo "<pre>"; print_r($result);exit;
        }
        
        return $result;
    }


    public function addnew($pet_name, $pet_color, $pet_breed, $pet_type, $microchip_number, $mark_difference,$date_of_birth,$pet_photo,$user_id)
    {
        // echo "yes";exit;
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
            'pet_photo'=>$pet_photo,
            'user_id'=>$user_id,
            
        );

        if ($this->db->insert('pos_pets', $data)) {
            
            $pet_id=$this->db->insert_id();
            $data=$this->session->userdata();
            // $customerId=$data['user_details'][0]->user_id;
            $customerId = $this->session->userdata('user_details')[0]->cid;
            $this->db->insert('pos_customer_pets', ['customer_id'=>$customerId,"pet_id"=>$pet_id]);

            echo json_encode(array('status' => 'Success', 'message' =>
                $this->lang->line('ADDED'). "  <a href='".base_url('pets/index')."' class='btn btn-blue btn-lg'><span class='fa fa-list-alt' aria-hidden='true'></span>  </a> <a href='add' class='btn btn-info btn-lg'><span class='fa fa-plus-circle' aria-hidden='true'></span>  </a>"));
        } else {
            echo json_encode(array('status' => 'Error', 'm  essage' =>
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

    
}