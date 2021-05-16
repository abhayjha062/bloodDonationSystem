<?php  

class User extends CI_Controller {

    public function about() {
        $this->load->view('about');
    }

    public function register() {
        $this->load->view('users/register_view');
    }

    public function login() {
        $this->load->view('users/login_view');
    }

    public function search() {
        $this->load->view('search_view');
    }

    public function update_profile() {
        $this->load->view('users/updateProfile_view');
    }

    public function admin_home() {
        $this->load->view('admin/admin_view');
    }

    public function user_manage() {
        $this->load->view('admin/usermangement_view');
    }

    public function add_user() {
        $this->load->view('admin/adduser_view');
    }

    public function edit($id) {
        $this->session->set_userdata('id',$id);
        $this->load->view('admin/updateuser_view');
    }

    public function edit_user() {
        $this->load->model('user_model');
        $user_data = array();

        if(isset($_POST['update_fname'])) {
            //Email validation and existing checking
            $this->form_validation->set_rules('updated_fname','First Name','trim|required|alpha');
            //Setting Error message printing
            $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

            //checking if its valid or not
            if($this->form_validation->run() == FALSE) {
                $this->load->view('users/updateuser_view');
            }else {
                $updated_fname = $this->input->post('updated_fname');
                $this->load->model('user_model');
                $this->user_model->update_user($_SESSION['id'], 'fname', $updated_fname);
            }
        }

        if(isset($_POST['update_lname'])) {
            //Email validation and existing checking
            $this->form_validation->set_rules('updated_lname','Updated Last Name','trim|required|alpha');
            //Setting Error message printing
            $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

            //checking if its valid or not
            if($this->form_validation->run() == FALSE) {
                $this->load->view('users/updateuser_view');
            }else {
                $updated_lname = $this->input->post('updated_lname');
                $this->load->model('user_model');
                $this->user_model->update_user($_SESSION['id'], 'lname', $updated_lname);
            }
        }
        if(isset($_POST['update_age'])) {
            //Email validation and existing checking
            $this->form_validation->set_rules('updated_age','Updated Age','trim|required|number');
            //Setting Error message printing
            $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

            //checking if its valid or not
            if($this->form_validation->run() == FALSE) {
                $this->load->view('users/updateuser_view');
            }else {
                $updated_age = $this->input->post('updated_age');
                $this->load->model('user_model');
                $this->user_model->update_user($_SESSION['id'], 'age', $updated_age);
            }
        }
        if(isset($_POST['update_bloodgroup'])) {
            //Email validation and existing checking
            $this->form_validation->set_rules('updated_bloodgroup','Updated Blood Group','trim|required');
            //Setting Error message printing
            $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

            //checking if its valid or not
            if($this->form_validation->run() == FALSE) {
                $this->load->view('users/updateuser_view');
            }else {
                $updated_bloodgroup = $this->input->post('updated_bloodgroup');
                $this->load->model('user_model');
                $this->user_model->update_user($_SESSION['id'], 'bloodgroup', $updated_bloodgroup);
            }
        }
        if(isset($_POST['update_latitude'])) {
            //Email validation and existing checking
            $this->form_validation->set_rules('updated_latitude','Updated Last Name','trim|required|valid_email|alpha');
            //Setting Error message printing
            $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

            //checking if its valid or not
            if($this->form_validation->run() == FALSE) {
                $this->load->view('users/updateuser_view');
            }else {
                $updated_latitude = $this->input->post('updated_latitude');
                $this->load->model('user_model');
                $this->user_model->update_user($_SESSION['id'], 'latitude',$updated_latitude);
            }
        }
        if(isset($_POST['update_longitude'])) {
            //Email validation and existing checking
            $this->form_validation->set_rules('updated_longitude','Updated Longitude','trim|required|valid_email|alpha');
            //Setting Error message printing
            $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

            //checking if its valid or not
            if($this->form_validation->run() == FALSE) {
                $this->load->view('users/updateuser_view');
            }else {
                $updated_longitude = $this->input->post('updated_longitude');
                $this->load->model('user_model');
                $this->user_model->update_user($_SESSION['id'], 'longitude', $updated_longitude);
            }
        }
        if(isset($_POST['update_password'])) {
            //Email validation and existing checking
            $this->form_validation->set_rules('updated_password','Updated Password','trim|required');
            //Setting Error message printing
            $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

            //checking if its valid or not
            if($this->form_validation->run() == FALSE) {
                $this->load->view('users/updateuser_view');
            }else {
                $updated_password = $this->input->post('updated_password');
                $this->load->model('user_model');
                $this->user_model->update_user($_SESSION['id'], 'password', $updated_password);
            }
        }

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
                $this->user_model->update_user($_SESSION['id'], 'fname', $updated_email);
            }
        }

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
                $this->user_model->update_user($_SESSION['id'], 'fname', $updated_phoneNumber);
            }
            

        }

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
                $this->user_model->update_user($_SESSION['id'], 'fname', $updated_lastDonated);
            }
        }

    }

    public function delete($id) {
        $this->load->model('user_model');
        $this->user_model->delete_user($id);
    }

}

?>