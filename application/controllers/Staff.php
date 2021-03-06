<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Staff extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Staff_model');
        $this->load->model('Branch_model');
    }

    /*
     * Listing of staff
     */
    function index()
    {
        $data['staff'] = $this->Staff_model->get_all_staff();

        $data['_view'] = 'staff/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new staff
     */
    function add()
    {
        $this->load->library('form_validation');

        // $this->form_validation->set_rules('password','Password','required|alpha_numeric|min_length[5]');
        $this->form_validation->set_rules('forename', 'Forename', 'required');
        // $this->form_validation->set_rules('email','Email','valid_email|required');
        $this->form_validation->set_rules('branch', 'Branch', 'required');
        // $this->form_validation->set_rules('role_id','Role Id','required');

        if ($this->form_validation->run()) {

            $params = array(
                'is_active' => 1,
                // 'role_id' => $this->input->post('role_id'),
                'branch_id' => $this->input->post('branch'),
                'forename' => $this->input->post('forename'),
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'mobile_no' => $this->input->post('no'),
                'city' => $this->input->post('city'),
                'vehicle_type' => $this->input->post('v_type'),
                'model' => $this->input->post('model'),
                // 'email' => $this->input->post('email'),
                // 'link' => $this->input->post('link'),
                'created_by' => $this->session->userdata('id'),
            );

            $staff_id = $this->Staff_model->add_staff($params);
            redirect('staff/index');
        } else {
            // $this->load->model('Role_model');
            $data['branch'] = $this->Branch_model->get_all_branch();

            $data['_view'] = 'staff/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a staff
     */
    function edit($id)
    {
        // check if the staff exists before trying to edit it
        $data['staff'] = $this->Staff_model->get_staff($id);

        if (isset($data['staff']['id'])) {
            $this->load->library('form_validation');

            // $this->form_validation->set_rules('password','Password','required|alpha_numeric|min_length[5]');
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'valid_email|required');
            $this->form_validation->set_rules('branch', 'Branch', 'required');
            // $this->form_validation->set_rules('role_id','Role Id','required');

            if ($this->form_validation->run()) {
                $params = array(
                    // 'role_id' => $this->input->post('role_id'),
                    'branch_id' => $this->input->post('branch'),
                    'full_name' => $this->input->post('full_name'),
                    'email' => $this->input->post('email'),
                    // 'link' => $this->input->post('link'),
                    'created_by' => $this->session->userdata('id'),
                );

                $this->Staff_model->update_staff($id, $params);
                redirect('staff/index');
            } else {
                // $this->load->model('Role_model');
                // $data['all_roles'] = $this->Role_model->get_all_roles();
                $data['branch'] = $this->Branch_model->get_all_branch();
                $data['_view'] = 'staff/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The staff you are trying to edit does not exist.');
    }

    /*
     * Deleting staff
     */
    function remove($id)
    {
        $staff = $this->Staff_model->get_staff($id);

        // check if the staff exists before trying to delete it
        if (isset($staff['id'])) {
            $this->Staff_model->delete_staff($id);
            redirect('staff/index');
        } else
            show_error('The staff you are trying to delete does not exist.');
    }
    function getstaffbyBranch($b_id)
    {
        $result  = $this->db->query("Select * from staff  WHERE branch_id = {$b_id}  and role_id =0")->result_array();
        print_r(json_encode(array('success' => 1, 'list' => $result)));
    }
}
