<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function admin_login()
    {

        $email_address = $_POST['email_address'];
        $password = $_POST['password'];
        $result = $this->admin_model->admin_model_info($email_address, $password);
        $sdata = array();

        if ($result) {
            $sdata['admin_id'] = $result->admin_id;
            $sdata['admin_name'] = $result->admin_name;
            $this->session->set_userdata($sdata);
            redirect('dashboard');
        } else {
            $sdata['message'] = 'Your email or password invalid !';
            $this->session->set_userdata($sdata);
            redirect(base_url());
        }

        if ($result) {
            redirect('dashboard');
        } else {
            redirect(base_url());
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $sdata['message'] = 'logout successfully';
        $this->session->set_userdata($sdata);
        redirect(base_url());
    }


    public function add_student()
    {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/add_student', '', true);
        $this->load->view('dashboard', $data);
    }

    // save student part 
    public function save_student()
    {
        $this->admin_model->save_student_info();
        $sdata = array();
        $sdata['message'] = 'Student added successfully!';
        $this->session->set_userdata($sdata);
        redirect('add-student');
        // echo "yes";
    }
    public function manage_student()
    {
        $data = array();
        $data['all_students_info'] = $this->admin_model->all_students_info();
        $data['admin_main_content'] = $this->load->view('pages/manage_student', $data, true);
        $this->load->view('dashboard', $data);
    }
    public function edit_admin()
    {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/edit_admin', '', true);
        $this->load->view('dashboard', $data);
    }
    public function dashboard()
    {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/admin_index', '', true);
        $this->load->view('dashboard', $data);
    }

    public function edit_student($student_id)
    {
        $data = array();
        $data['all_students_info_by_id'] =$this->admin_model->all_students_info_by_id($student_id);
        $data['admin_main_content'] = $this->load->view('pages/edit_student', '', true);
        $this->load->view('pages/edit_student', $data);
    }
    public function delete_student($student_id)
    {
        $this->admin_model->delete_student_by_id($student_id);
        $sdata = array();
        $sdata['message'] = 'Delete successfully!';
        $this->session->set_userdata($sdata);
        redirect('manage-student');
    }
    public function update_student(){
        $this->admin_model->update_student_info();
        $sdata['message'] = 'Update successfully!';
        $this->session->set_userdata($sdata);
        redirect('manage-student');
    }

    

}
