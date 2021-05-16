<?php 

     class User_model extends CI_Model {

        //Function for creating user 
        public function create_user($form_data) {

          //Generate username by concatenating first name and last name
          $username = strtolower($form_data['fname'] . "_" . $form_data['lname']);
          $this->db->where('username', $username);
          $check_username_query = $this->db->get('userinfo');

          $i = 0; 
            //if username exists add number to username
          while($check_username_query->num_rows() !== 0) {
            $i++; //Add 1 to i
            $username = $username . "_" . $i;
            $this->db->where('username', $username);
            $check_username_query = $this->db->get('userinfo');
          }
          $form_data['username'] = $username;
          $insert_data = $this->db->insert('userinfo', $form_data);
          return $insert_data;

        }

        //Function to check loging details and validate
        public function login_user($log_details) {

            $email = $log_details['log_email'];
            $password = $log_details['log_password'];
            $this->db->where(["email" => $email, "password" => $password]);
            $result = $this->db->get('userinfo');
            if($result->num_rows() == 1) {
               $username = $result->row(3)->username;
               $this->session->set_userdata('username', $username);
               return true;
            }else {
               return false;
            }

        }

        //Function for updating email id of user
        public function update_email($updated_email,$current_username) {

          $data = array("email" => $updated_email);
          $this->db->where('username', $current_username);
          $this->db->update('userinfo', $data);
          redirect('home');

        }

        //Function for updating phone Number of user
        public function update_phoneNumber($updated_phoneNumber,$current_username) {

          $data = array("phoneNumber" => $updated_phoneNumber);
          $this->db->where('username', $current_username);
          $this->db->update('userinfo', $data);
          redirect('home');

        }

        //Function for updating last Donated date of user
        public function update_lastDonated($updated_lastDonated,$current_username) {

          $data = array("lastdonated" => $updated_lastDonated);
          $this->db->where('username', $current_username);
          $this->db->update('userinfo', $data);
          redirect('home');

        }

        //Function for creating user 
        public function add_user($form_data) {

          //Generate username by concatenating first name and last name
          $username = strtolower($form_data['fname'] . "_" . $form_data['lname']);
          $this->db->where('username', $username);
          $check_username_query = $this->db->get('userinfo');

          $i = 0; 
            //if username exists add number to username
          while($check_username_query->num_rows() !== 0) {
            $i++; //Add 1 to i
            $username = $username . "_" . $i;
            $this->db->where('username', $username);
            $check_username_query = $this->db->get('userinfo');
          }
          $form_data['username'] = $username;
          $insert_data = $this->db->insert('userinfo', $form_data);
          return $insert_data;

        }

        //Update a user table
        public function update_user($id,$user_field,$user_data) {

          $data = array($user_field => $user_data);
          $this->db->where('id', $id);
          $this->db->update('userinfo', $data);
          $this->load->view('admin/usermangement_view');

        }

        //Delete a user
        public function delete_user($id) {

          $this->db->where('id',$id);
          $this->db->delete('userinfo');
          $this->session->set_flashdata('msguser', 'user has been deleted sucessfully');
          $this->load->view('admin/usermangement_view');

        }

     }

?>