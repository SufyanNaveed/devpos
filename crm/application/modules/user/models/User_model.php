<?php

class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->user_id = isset($this->session->get_userdata()['user_details'][0]->id) ? $this->session->get_userdata()['user_details'][0]->users_id : '1';
    }

    /**
     * This function is used authenticate user at login
     */
    function auth_user()
    {
        
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->db->where("is_deleted='0' AND (email='$email')");
        $result = $this->db->get('users')->result();
        if (!empty($result)) {
            if (password_verify($password, $result[0]->password)) {
                if ($result[0]->status != 'active') {
                    return 'not_varified';
                }
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function auth_qr_user($qrcode)
    {
        $qrcode = base64_decode($qrcode);
        $this->db->select('*');
        $this->db->join('geopos_customers', 'geopos_customers.id = geopos_customers_qrcode.cus_id','left');
        $this->db->where('geopos_customers_qrcode.qrcode',$qrcode);
        $query = $this->db->get('geopos_customers_qrcode')->row_array();
        
        $email = $query['email'];
        $password = $query['password'];
        $this->db->where("is_deleted='0' AND (email='$email')");
        $result = $this->db->get('users')->result();
        if (!empty($result)) {
            if (password_verify($password, $result[0]->password)) {
                if ($result[0]->status != 'active') {
                    return 'not_varified';
                }
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * This function is used to delete user
     * @param: $id - id of user table
     */
    function delete($id = '')
    {
        $this->db->where('users_id', $id);
        $this->db->delete('users');
    }

    /**
     * This function is used to load view of reset password and varify user too
     */
    function mail_varify()
    {
        $ucode = $this->input->get('code');
        $this->db->select('email as e_mail');
        $this->db->from('users');
        $this->db->where('var_key', $ucode);
        $query = $this->db->get();
        $result = $query->row();
        if (!empty($result->e_mail)) {
            return $result->e_mail;
        } else {
            return false;
        }
    }


    /**
     * This function is used Reset password
     */
    function ResetPpassword()
    {
        $code = $this->input->post('n_code');
        if ($this->input->post('n_password') == $this->input->post('n_password2')) {
            $npass = password_hash($this->input->post('n_password'), PASSWORD_DEFAULT);
            $data['password'] = $npass;
            $data['code'] = '';
            return $this->db->update('users', $data, "code = '$code'");
        }
    }

    /**
     * This function is used to select data form table
     */
    function get_data_by($tableName = '', $value = '', $colum = '', $condition = '')
    {
        if ((!empty($value)) && (!empty($colum))) {
            $this->db->where($colum, $value);
        }
        $this->db->select('*');
        $this->db->from($tableName);
        $query = $this->db->get();
        return $query->result();
    }
    public function add($name,$pet_name,$breed,$pet_gender, $company, $phone, $email, $address, $city, $region, $country, $postbox, $customergroup, $taxid, $name_s, $phone_s, $email_s, $address_s, $city_s, $region_s, $country_s, $postbox_s, $language = '', $create_login = true, $password = '', $docid = '', $custom = '', $discount = 0)
    {
        $this->db->select('email');
        $this->db->from('geopos_customers');
        $this->db->where('email', $email);
        $query = $this->db->get();
        $valid = $query->row_array();
        // if (!$valid['email']) {


            if (!$discount) {
                $this->db->select('disc_rate');
                $this->db->from('geopos_cust_group');
                $this->db->where('id', $customergroup);
                $query = $this->db->get();
                $result = $query->row_array();
                $discount = $result['disc_rate'];
            }


            $data = array(
                'name' => $name,
                'pet_name' => $pet_name,
                'breed' => $breed,
                'pet_gender' => $pet_gender,
                'company' => $company,
                'phone' => $phone,
                'email' => $email,
                'password' => $password,
                'address' => $address,
                'city' => $city,
                'region' => $region,
                'country' => $country,
                'postbox' => $postbox,
                'gid' => $customergroup,
                'taxid' => $taxid,
                'name_s' => $name_s,
                'phone_s' => $phone_s,
                'email_s' => $email_s,
                'address_s' => $address_s,
                'city_s' => $city_s,
                'region_s' => $region_s,
                'country_s' => $country_s,
                'postbox_s' => $postbox_s,
                'docid' => $docid,
                'custom1' => $custom,
                'discount_c' => $discount
            );
          
            // print_r($data);exit;
            // if ($this->aauth->get_user()->loc) {
            //     $data['loc'] = $this->aauth->get_user()->loc;
            // }
            // $this->db->insert('geopos_customers', $data);
            // print_r($data);exit;
            if ($this->db->insert('geopos_customers', $data)) {
                $cid = $this->db->insert_id();

                $qrdata = array(
                    'cus_id' => $cid,
                    'qrcode' => mt_rand()
                );          
                // print_r($qrdata);exit;
                $this->db->insert('geopos_customers_qrcode', $qrdata);
        
                // print_r($cid);exit;
                // echo $cid;exit; 
                $p_string = '';
                $temp_password = '';
                // if ($create_login) {

                    if ($password) {
                        $temp_password = $password;
                    } else {
                        $temp_password = rand(200000, 999999);
                    }

                    $pass = password_hash($temp_password, PASSWORD_DEFAULT);
                    $data = array(
                        'user_id' => 1,
                        'status' => 'active',
                        'is_deleted' => 0,
                        'name' => $name,
                        'password' => $pass,
                        'email' => $email,
                        'user_type' => 'Member',
                        'cid' => $cid,
                        'lang' => 'english'
                    );
                    // print_r($data);exit;
                    $this->db->insert('users', $data);
                    $p_string = ' Temporary Password is ' . $temp_password . ' ';
                // }
                // $this->aauth->applog("[Client Added] $name ID " . $cid, $this->aauth->get_user()->username);
                // echo json_encode(array('status' => 'Success', 'message' => $this->lang->line('ADDED') . $p_string . '&nbsp;<a href="' . base_url('customers/view?id=' . $cid) . '" class="btn btn-info btn-sm"><span class="icon-eye"></span>' . $this->lang->line('View') . '</a>', 'cid' => $cid, 'pass' => $temp_password, 'discount' => amountFormat_general($discount)));

                // $this->custom->save_fields_data($cid, 1);

                // $this->db->select('other');
                // $this->db->from('univarsal_api');
                // $this->db->where('id', 64);
                // $query = $this->db->get();
                // $othe = $query->row_array();

                // if ($othe['other']) {
                //     $auto_mail = $this->send_mail_auto($email, $name, $temp_password);
                //     $this->load->model('communication_model');
                //     $attachmenttrue = false;
                //     $attachment = '';
                //     $this->communication_model->send_corn_email($email, $name, $auto_mail['subject'], $auto_mail['message'], $attachmenttrue, $attachment);
                // }
                return $cid;

            } else {
                echo json_encode(array('status' => 'Error', 'message' =>
                    $this->lang->line('ERROR')));
            }
        // } else {
        //     $this->session->set_flashdata('messagePr', 'All fields are required!');
		// 	redirect('User/register'); 
        //     // echo json_encode(array('status' => 'Error', 'message' =>
        //     //     'Duplicate Email'));
        // }

    }
    /**
     * This function is used to check user is alredy exist or not
     */
    function check_exists($table = '', $colom = '', $colomValue = '')
    {
        $this->db->where($colom, $colomValue);
        $res = $this->db->get($table)->row();
        if (!empty($res)) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * This function is used to get users detail
     */
    function get_users($userID = '')
    {
        $this->db->select('users.*,geopos_customers.picture');
        $this->db->from('users');
        $this->db->where('users.is_deleted', '0');
        if (isset($userID) && $userID != '') {
            $this->db->where('users.users_id', $userID);
        } else if ($this->session->userdata('user_details')[0]->user_type == 'admin') {
            $this->db->where('users.user_type', 'admin');
        } else {
            $this->db->where('users.users_id !=', '1');
        }

        $this->db->join('geopos_customers', 'users.cid = geopos_customers.id', 'left');
        $result = $this->db->get()->result();
        return $result;
    }

    /**
     * This function is used to get email template
     */
    function get_template($code)
    {
        $this->db->where('code', $code);
        return $this->db->get('templates')->row();
    }

    /**
     * This function is used to Insert record in table
     */
    public function insertRow($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    /**
     * This function is used to Update record in table
     */
    public function updateRow($table, $col, $colVal, $data)
    {
        $this->db->where($col, $colVal);
        $this->db->update($table, $data);
        return true;
    }

        public function template_info($id)
    {
        $this->db->from('univarsal_api');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }

        function get_data_by_row($tableName = '', $colum = '',  $value = '',$condition = '')
    {

        $this->db->select('*');
        $this->db->from($tableName);
        $this->db->where($colum, $value);
        $query = $this->db->get();
        return $query->row_array();
    }

        function get_users_full($userID = '')
    {
        $this->db->select('users.*,geopos_customers.*');
        $this->db->from('users');
        $this->db->where('users.is_deleted', '0');
        if (isset($userID) && $userID != '') {
            $this->db->where('users.users_id', $userID);
        } else if ($this->session->userdata('user_details')[0]->user_type == 'admin') {
            $this->db->where('users.user_type', 'admin');
        } else {
            $this->db->where('users.users_id !=', '1');
        }

        $this->db->join('geopos_customers', 'users.cid = geopos_customers.id', 'left');
        $result = $this->db->get()->row_array();
        return $result;
    }

}