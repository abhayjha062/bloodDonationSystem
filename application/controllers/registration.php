<?php 

    class Registration extends CI_Controller {
        //Declaring variables to prevent errors
        public $fname ="";
        public $lname ="";
        public $email ="";
        public $phoneNo ="";
        public $age = null;
        public $bloodGroup ="";
        public $lastDonated ="";
        public $lat1 = null;
        public $lon1 = null;
        public $password ="";
        public $cnfrmPassword ="";
        //$error_array = array(); //Holds error messages

        public function add_user() {
         
         if($this->input->post()) {

            $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
            $this->form_validation->set_rules('fname','First Name','trim|required|min_length[3]|alpha');
            $this->form_validation->set_rules('lname','Last Name','trim|required|min_length[3]|alpha');
            $this->form_validation->set_rules('email','Email','trim|required|min_length[3]|valid_email|is_unique[userinfo.email]');
            $this->form_validation->set_rules('phoneNo','Phone Number','trim|required|min_length[10]|numeric');
            $this->form_validation->set_rules('age','Age','trim|required|numeric');
            $this->form_validation->set_rules('bloodGroup','Blood Group','trim|required|min_length[2]|max_length[3]');
            $this->form_validation->set_rules('lastDonated','Last Donated','trim|required');
            $this->form_validation->set_rules('lat1','Latitude','trim|required');
            $this->form_validation->set_rules('lon1','Longitude','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required|min_length[3]|alpha_numeric');
            $this->form_validation->set_rules('cnfrmPassword','Cnfrm Password','trim|required|min_length[3]|matches[password]');

            if($this->form_validation->run()== FALSE) {
                $this->load->view('users/register_view');
             }else {
                $this->load->model('user_model');
                $formArray = array();
                $formArray['fname'] = ucfirst(strtolower($this->input->post('fname')));
                $formArray['lname'] = ucfirst(strtolower($this->input->post('lname')));
                $formArray['email'] = $this->input->post('email');
                $formArray['phoneNumber'] = $this->input->post('phoneNo');
                $formArray['age'] = $this->input->post('age');
                $formArray['bloodGroup'] = strtoupper($this->input->post('bloodGroup'));
                $formArray['lastDonated'] = $this->input->post('lastDonated');
                $formArray['latitude'] = $this->input->post('lat1');
                $formArray['longitude'] = $this->input->post('lon1');
                $formArray['password'] = $this->input->post('password');
                

                if($this->user_model->create_user($formArray)) {
                    $this->session->set_flashdata("msg", "user has been registered");
                    redirect(base_url().'index.php/user/register');
                }
                
             }
         }

        }
    }


?>