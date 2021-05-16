<?php 
 class Logout extends CI_Controller {
    
    public function user_logout() {
        $this->session->sess_destroy();
        redirect('user/login');
    }
 }

?>