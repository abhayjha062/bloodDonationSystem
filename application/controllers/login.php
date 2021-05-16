<?php

class Login extends CI_Controller {

    public function login_verify() {

        $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
        $this->form_validation->set_rules('log_email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('log_password','Password','trim|required|alpha_numeric');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('users/login_view');
        }else {
            $this->load->model('user_model');
            $log_details = array();
            $log_details['log_email'] = $this->input->post('log_email');
            $log_details['log_password'] = $this->input->post('log_password');
            if($this->user_model->login_user($log_details)) {
                redirect('home');
            }
        }
    }

}

?>