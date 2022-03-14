<?php

class Pets extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library("Aauth");
        if (!$this->session->userdata()) {
            redirect('/user/', 'refresh');
        }
        $this->li_a = 'pets';

        $this->load->model('Crm_pets_model', 'pets');
        $this->load->helper('url', 'form');

    }
    public function index()
    {
        $head['usernm'] = $this->session->userdata()->username;
        $data['pets']= $this->pets->getPets()->result();
        $head['title'] = 'Pets-list';
        $this->load->view('includes/header');
        $this->load->view('pet/index',$data);
        $this->load->view('includes/footer');
    }

    public function add()
    {
        $data = $this->session->userdata();
        $data['user_id'] = $data['user_details'][0]->users_id;
        $head['usernm'] = $this->session->userdata()->username;
        // $data['usernm'] = "Salam";
        $head['title'] = 'Pets-add';
        $data['pets']=$this->pets->getPets()->result();
        $this->load->view('includes/header');
        $this->load->view('pet/add',$data);
        $this->load->view('includes/footer');
    }
    public function store()
    {
        // echo "yes";exit;
        $pet_name = $this->input->post('pet_name');
        // print_r($pet_name);exit;
        $pet_color = $this->input->post('pet_color');
        $user_id = $this->input->post('user_id');
        $pet_breed = $this->input->post('pet_breed');
        $pet_type = $this->input->post('pet_type');
        $microchip_number = $this->input->post('microchip_number');
        $mark_difference = $this->input->post('mark_difference');
        $date_of_birth = $this->input->post('date_of_birth');
        $pet_photo = $this->input->post('pet_photo');

        $config['upload_path'] = './userfiles/pet/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('pet_photo')) {
            $error = array('error' => $this->upload->display_errors()); 
            // print_r($error);exit;    
        } else {
            $pet_photo = array('image_metadata' => $this->upload->data('file_name'));
        }
        $this->pets->addnew($pet_name, $pet_color, $pet_breed, $pet_type, $microchip_number, $mark_difference,$date_of_birth,$pet_photo,$user_id);
    }

    public function edit()
    {
        $head['usernm'] = $this->session->userdata()->username;
        $head['title'] = 'Pets-edit';
        $data['pet']=$this->pets->getPets()->row();
        if(empty($data['pet'])){
            return show_404();
        }
        $this->load->view('includes/header');
        $this->load->view('pet/edit',$data);
        $this->load->view('includes/footer');   
    }
    public function preview()
    {
        $head['usernm'] = $this->session->userdata()->username;
        $head['title'] = 'Pets-edit';
        $data['pet']=$this->pets->getPets()->row();
        if(empty($data['pet'])){
            return show_404();
        }
        $this->load->view('includes/header');
        $this->load->view('pet/preview',$data);
        $this->load->view('includes/footer');   
 
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

        $config['upload_path'] = './userfiles/pet/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('pet_photo')) {
            $error = array('error' => $this->upload->display_errors());     
        } else {
            $pet_photo = array('image_metadata' => $this->upload->data('file_name'));
        }

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


    public function ajax_list()
    {
        $list = $this->pets->getPets()->result();
        $data = array();

        $count=0;

        foreach ($list as $row) {
            $count++;
            $pid = $row->id;
            $temp = array();
            $temp[] = $row->pet_name;
            $temp[] = "<img class='round' src='".base_url()."userfiles/pet/". $row->pet_photo."' style='max-height: 100%;max-width: 100%'>";
            
            $temp[] = $row->color;
            $temp[] = $row->microchip_number;
            $temp[] = $row->date_of_birth;
            $temp[] = $row->mark_difference;
            $temp[] = $row->pet_breed;
            $temp[] = $row->pet_type;
            $temp[] = $row->status;
            $temp[] = '<a href="' . base_url("subscriptions/view?id=$pid->id") . '" class="btn btn-success btn-xs"><i class="fa fa-file-text"></i> ' . $this->lang->line('View') . '</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => count($list),
            // "recordsFiltered" => $this->invocies->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);

    }

}