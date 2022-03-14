<?php

class Pets extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("Aauth");
        if (!$this->aauth->is_loggedin()) {
            redirect('/user/', 'refresh');
        }
        $this->li_a = 'pets';

        $this->load->model('Pos_pets_model', 'pets');

    }
    public function index()
    {
        $head['usernm'] = $this->aauth->get_user()->username;
        $head['title'] = 'Pets-list';
        $this->load->view('fixed/header', $head);
        $data['pets']=$this->pets->getPets()->result();
        $this->load->view('pets/pet/index',$data);
        $this->load->view('fixed/footer');
    }

    public function add()
    {
        $head['usernm'] = $this->aauth->get_user()->username;
        $head['title'] = 'Pets-add';
        $this->load->view('fixed/header', $head);
        $data['pets']=$this->pets->getPets()->result();
        $this->load->view('pets/pet/add',$data);
        $this->load->view('fixed/footer');
    }
    public function store()
    {
        // echo "yes";exit;
        $pet_name = $this->input->post('pet_name');
        $pet_color = $this->input->post('pet_color');
        $pet_breed = $this->input->post('pet_breed');
        $pet_type = $this->input->post('pet_type');
        $microchip_number = $this->input->post('microchip_number');
        $mark_difference = $this->input->post('mark_difference');
        $date_of_birth = $this->input->post('date_of_birth');
        $pet_photo = $this->input->post('pet_photo');

        $this->pets->addnew($pet_name, $pet_color, $pet_breed, $pet_type, $microchip_number, $mark_difference,$date_of_birth,$pet_photo);
    }

    public function edit()
    {
        $head['usernm'] = $this->aauth->get_user()->username;
        $head['title'] = 'Pets-edit';
        $this->load->view('fixed/header', $head);
        $data['pet']=$this->pets->getPets()->row();
        if(empty($data['pet'])){
            return show_404();
        }
        $this->load->view('pets/pet/edit',$data);
        $this->load->view('fixed/footer');
    }
    public function update()
    {
        $pet_id=$this->input->post('pet_id');
        $pet_name = $this->input->post('pet_name');
        $pet_color = $this->input->post('pet_color');
        $pet_breed = $this->input->post('pet_breed');
        $pet_type = $this->input->post('pet_type');
        $microchip_number = $this->input->post('microchip_number');
        $mark_difference = $this->input->post('mark_difference');
        $date_of_birth = $this->input->post('date_of_birth');
        $pet_photo = $this->input->post('pet_photo');

        $this->pets->edit($pet_id,$pet_name, $pet_color, $pet_breed, $pet_type, $microchip_number, $mark_difference,$date_of_birth,$pet_photo);
    }


    public function file_handling()
    {
        if ($this->input->get('op')) {
            $name = $this->input->get('name');
            if ($this->products->meta_delete($name)) {
                echo json_encode(array('status' => 'Success'));
            }
        } else {
            $id = $this->input->get('id');
            $this->load->library("Uploadhandler_generic", array(
                'accept_file_types' => '/\.(gif|jpe?g|png)$/i', 'upload_dir' => FCPATH . 'userfiles/pet/', 'upload_url' => base_url() . 'userfile/pet/'
            ));
        }
    }

    public function delete()
    {
        
        $pet_id=$this->input->get('pet_id');
        $this->pets->delete($pet_id);
    }

    public function appointments()
    {
        $head['usernm'] = $this->aauth->get_user()->username;
        $head['title'] = 'Appointments';
        $this->load->view('fixed/header', $head);
        $data['pets']=$this->pets->getAppointmentPets();
    //    echo "<   pre>"; print_r($data);exit;
        $this->load->view('appointments/index',$data);
        $this->load->view('fixed/footer');
    }

    public function detail()
    {
        $booking_id = $this->uri->segment(3);
        $head['usernm'] = $this->aauth->get_user()->username;
        $head['title'] = 'Medical Detail';
        $this->load->view('fixed/header', $head);
        $data['pet_detail'] =$this->pets->getMedicalDetail($booking_id);
        $data['staging_status'] = $this->pets->getStagingStatus($booking_id);
        // echo "<pre>"; print_r($data['pet_detail']);exit;
        $this->load->view('appointments/detail',$data);
        $this->load->view('fixed/footer');
    }

    public function update_receptionist()
    {
        $data = 
        [
            'blood_pressure' => $this->input->post('blood_pressure'),
            'temp_type' => $this->input->post('temp_type'),
            'temperature' => $this->input->post('temperature')
        ];

        if($this->pets->update_receprionist($data, $this->input->post('id'), $this->input->post('booking_id')))
        {
            $this->session->set_flashdata('success_receptionist', 'Success');
            redirect(base_url().'pets/appointments');
        }
    }

}