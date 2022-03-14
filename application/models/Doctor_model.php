<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_model extends CI_Model
{


    public function addSpeciality($data)
    {
        if($this->db->insert_batch('advisor_specialities',$data)){
            return true;
        }
        return false;
    }


    public function addAvailability($data)
    {
        if($this->db->insert_batch('advisor_availabilities',$data)){
            return true;
        }
        return false;
    }
    
}