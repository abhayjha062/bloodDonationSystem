<?php

    class Adminlogin extends CI_Controller {

        // public $admin_email = "admin@bloodmanagement.com";
        // public $admin_password = "12345";

        //Admin login check
        function admin_login() {
            $admin_email = "admin@bloodmanagement.com";
            $admin_password = "12345";

            if(isset($_POST['admin_login'])) {

                $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
                $this->form_validation->set_rules('log_email','Email','trim|required|valid_email');
                $this->form_validation->set_rules('log_password','Password','trim|required|alpha_numeric');

                if($this->form_validation->run() == FALSE) {
                    $this->load->view('users/login_view');
                }else {
                    $email = $this->input->post('log_email');
                    $password= $this->input->post('log_password');
                    if($admin_email == $email && $admin_password == $password) {
                        redirect('user/admin_home');
                    }
                    else {
                        echo("Email or password was incorrect<br>");
                    }
                }
            }
        }
        
    }

?>