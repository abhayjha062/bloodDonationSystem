<?php
    class Updateuser extends CI_Controller {

        public $updated_email = "";
        public $updated_phoneNumber = "";
        public $updated_lastDonated = null;

        //function for updating user email
        function update_email() {

            if(isset($_POST['update_email'])) {
                //Email validation and existing checking
                $this->form_validation->set_rules('updated_email','Updated Email','trim|required|valid_email|is_unique[userinfo.email]');
                //Setting Error message printing
                $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
    
                //checking if its valid or not
                if($this->form_validation->run() == FALSE) {
                    $this->load->view('users/updateProfile_view');
                }else {
                    $updated_email = $this->input->post('updated_email');
                    $this->load->model('user_model');
                    $this->user_model->update_email($updated_email,$_SESSION['username']);
                }
            }

        }

        //Function for updating phone Number of user
        function update_phoneNumber() {

            if(isset($_POST['update_phoneNumber'])) { 
            
                //phone NUmber validation checking
                $this->form_validation->set_rules('updated_phoneNumber','Updated Phone Number','trim|required|min_length[10]|numeric');
                //Setting Error message printing
                $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
    
                //checking if its valid or not
                if($this->form_validation->run() == FALSE) {
                    echo "something wrong";
                    $this->load->view('users/updateProfile_view');
                }else {
                    $updated_phoneNumber = $this->input->post('updated_phoneNumber');
                    $this->load->model('user_model');
                    $this->user_model->update_phoneNumber($updated_phoneNumber,$_SESSION['username']);
                }
                
    
            }

        }

        //Function for updating last donated of user
        function update_lastDonated() {
            if(isset($_POST['update_lastDonated'])) { 
                //phone NUmber validation checking
                $this->form_validation->set_rules('updated_lastDonated','Updated Last DonatedDate','trim|required');
                //Setting Error message printing
                $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
    
                //checking if its valid or not
                if($this->form_validation->run() == FALSE) {
                    echo "something went wrong";
                    $this->load->view('users/updateProfile_view');
                }else {
                    $updated_lastDonated = $this->input->post('updated_lastDonated');
                    $this->load->model('user_model');
                    $this->user_model->update_lastDonated($updated_lastDonated,$_SESSION['username']);
                }
            }

        }
    
    }

?>