<?php

class Booking extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library("Aauth");
        if (! $this->session->userdata()) {
            redirect('/user/', 'refresh');
        }
        $this->li_a = 'book';

        $this->load->model('Crm_booking_model', 'booking');
        $this->load->helper('url', 'form');

    }
    public function schedule()
    {
        // $head['usernm'] = $this->session->userdata()->username;
        $data['pets']=$this->booking->getPets()->result();
        $data['doctors']=$this->booking->getDoctors()->result();
        $head['title'] = 'Booking-Schedule';
        $this->load->view('includes/header');
        $this->load->view('booking/index',$data);
        $this->load->view('includes/footer');
    }

    public function getSpeciality($id)
    {
        $data['speciality']=$this->booking->getSpeciality($id)->result();
        
        if(count($data['speciality']) > 0){
             echo  json_encode(['status'=>200,'data'=>$data['speciality']]);
        }else{
            echo json_encode(['status'=>404,'data'=>'not found']);
        }

    }

    public function getAvailability($date,$doctorId)
    {
        if ($date < date('Y-m-d')) {
            return json_encode(['status' => false], 422);
        }

        $dayName=strtolower(date('l', strtotime($date)));
        $data['availability']=$this->booking->getAvailability($doctorId,$dayName)->result();
        if(count($data['availability'])>0){
            $array_of_time = array ();
            $array_of_slot = array ();
            $splitByDuration=20;
            

            $array_of_cal = array ();
            foreach($data['availability'] as $avil){
            $start_time    = strtotime ($avil->from); //change to strtotime
            $end_time      = strtotime ($avil->to); //change to strtotime
            $add_mins  = $splitByDuration * 60;
            $i=0;
            $array['from']=date ("h:i a", $start_time);
            $array['to']=date ("h:i a", $end_time);
                while ($start_time <= $end_time) // loop between time
                {
                    if($i==2){
                        $i=0;
                    }
                    $array_of_slot['from']=date ("h:i a", $start_time);
                    $start_time += $add_mins; // to check endtie=me
                    $array_of_slot['to']=date ("h:i a", $start_time);
                    $array_of_time[] = $array_of_slot;
                    $i++;
                }
            array_pop($array_of_time);

            $array['slots']=$array_of_time;
            $array_of_cal[]=$array;
            unset($array_of_time);
            }
            echo  json_encode(['status'=>200,'data'=>$array_of_cal]);
        }else{
            echo json_encode(['status'=>404,'data'=>'not found']);

        }
      

    }

    public function addBooking()
    {

        $data=array();
        $data['pet_id']=$this->input->post('pet_id',true);
        $data['doctor_id']=$this->input->post('doctor_id',true);
        $data['speciality_id']=$this->input->post('speciality_id',true);
        $data['on']=$this->input->post('on',true);
        $data['from']=$this->input->post('from',true);
        $data['to']=$this->input->post('to',true);
        $userData=$this->session->userdata("user_details");
        if(isset($userData[0])){
            $data['user_id']=$userData[0]->user_id;
        }
        $booking_id = $this->booking->addnew($data);

        $detail = [];
        $detail['booking_id'] = $booking_id;
        $detail['no'] = trim($_POST['no']);
        $detail['gastrointestinal_prob'] = $this->multipleCheckboxCheck(isset($_POST['gastrointestinal_prob']) ? $_POST['gastrointestinal_prob'] : false);
        $detail['stool_nature']         = $this->multipleCheckboxCheck(isset($_POST['stool_nature']) ? $_POST['stool_nature'] : false);
        $detail['stool_color']          = $this->multipleCheckboxCheck(isset($_POST['stool_color']) ? $_POST['stool_color'] : false);
        $detail['urine_color']          = $this->multipleCheckboxCheck(isset($_POST['urine_color']) ? $_POST['urine_color'] : false);
        $detail['eye_problems']         = $this->multipleCheckboxCheck(isset($_POST['eye_problems']) ? $_POST['eye_problems'] : false);
        $detail['current_symptoms']     = $this->multipleCheckboxCheck(isset($_POST['current_symptoms']) ? $_POST['current_symptoms'] : false);
        $detail['pulmonary_problems']   = $this->multipleCheckboxCheck(isset($_POST['pulmonary_problems']) ? $_POST['pulmonary_problems'] : false);
        $detail['mouth_teeth_problems'] = $this->multipleCheckboxCheck(isset($_POST['mouth_teeth_problems']) ? $_POST['mouth_teeth_problems'] : false);
        $detail['general_q4']           = $this->multipleCheckboxCheck(isset($_POST['general_q4']) ? $_POST['general_q4'] : false);
        $detail['med_bck_q1']           = trim($_POST['med_bck_q1']);
        $detail['med_bck_q2']           = trim($_POST['med_bck_q2']);
        $detail['med_bck_q2_specify']   = trim($_POST['med_bck_q2_specify']);
        $detail['med_and_vac_q1']       = trim($_POST['med_and_vac_q1']);
        $detail['med_and_vac_q2']       = trim($_POST['med_and_vac_q2']);
        $detail['general_q1']           = trim($_POST['general_q1']);
        $detail['general_q2']           = trim($_POST['general_q2']);
        $detail['general_q3']           = trim($_POST['general_q3']);
        $detail['general_q3_specify']   = trim($_POST['general_q3_specify']);
        $detail['general_q5']           = trim($_POST['general_q5']);
        $detail['general_q6']           = trim($_POST['general_q6']);
        $detail['general_q7']           = trim($_POST['general_q7']);
        $detail['general_q8']           = trim($_POST['general_q8']);
        $detail['general_q9']           = trim($_POST['general_q9']);
        $detail['general_q9_specify']   = trim($_POST['general_q9_specify']);
        $detail['pet_id']               = $this->input->post('pet_id',true);
        $detail['user_id']               = $this->input->post('user_id',true);

        return $this->booking->add_pet_detail($detail);
    }

    public function multipleCheckboxCheck($val)
    {
        if(!$val)
        {
            return '';
        }
        else
        {
            return implode('@@', $val);
        }
    }

}