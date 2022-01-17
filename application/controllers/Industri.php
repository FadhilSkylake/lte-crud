<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Industri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Industri_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'industri/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'industri/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'industri/index.html';
            $config['first_url'] = base_url() . 'industri/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Industri_model->total_rows($q);
        $industri = $this->Industri_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'industri_data' => $industri,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('industri/industri_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Industri_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_perusahaan' => $row->id_perusahaan,
		'nama_perusahaan' => $row->nama_perusahaan,
		'alamat_perusahaan' => $row->alamat_perusahaan,
		'ket' => $row->ket,
	    );
            $this->load->view('industri/industri_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('industri'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('industri/create_action'),
	    'id_perusahaan' => set_value('id_perusahaan'),
	    'nama_perusahaan' => set_value('nama_perusahaan'),
	    'alamat_perusahaan' => set_value('alamat_perusahaan'),
	    'ket' => set_value('ket'),
	);
        $this->load->view('industri/industri_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_perusahaan' => $this->input->post('nama_perusahaan',TRUE),
		'alamat_perusahaan' => $this->input->post('alamat_perusahaan',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Industri_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('industri'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Industri_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('industri/update_action'),
		'id_perusahaan' => set_value('id_perusahaan', $row->id_perusahaan),
		'nama_perusahaan' => set_value('nama_perusahaan', $row->nama_perusahaan),
		'alamat_perusahaan' => set_value('alamat_perusahaan', $row->alamat_perusahaan),
		'ket' => set_value('ket', $row->ket),
	    );
            $this->load->view('industri/industri_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('industri'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_perusahaan', TRUE));
        } else {
            $data = array(
		'nama_perusahaan' => $this->input->post('nama_perusahaan',TRUE),
		'alamat_perusahaan' => $this->input->post('alamat_perusahaan',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Industri_model->update($this->input->post('id_perusahaan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('industri'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Industri_model->get_by_id($id);

        if ($row) {
            $this->Industri_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('industri'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('industri'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_perusahaan', 'nama perusahaan', 'trim|required');
	$this->form_validation->set_rules('alamat_perusahaan', 'alamat perusahaan', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id_perusahaan', 'id_perusahaan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Industri.php */
/* Location: ./application/controllers/Industri.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-01-17 08:36:49 */
/* http://harviacode.com */