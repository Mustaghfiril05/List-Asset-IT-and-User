<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller 
{   
    // public function __construct()
	// {
	// 	parent::__construct();
	// 	is_logged_in();
	// }

    public function index()
	{
		$data['title'] = 'Inventories PC';
		$data['user'] = $this->db->get_where('m_user', ['username' => 
		$this->session->userdata('username')])->row_array();

		$data['inventaris'] = $this->db->get('inventaris')->result_array();
		$data['lokasi'] = $this->db->get('m_lokasi')->result_array();
		$data['departement'] = $this->db->get('departement')->result_array();
		$data['antivirus'] = $this->db->get('antivirus')->result_array();
		$data['office'] = $this->db->get('ms_office')->result_array();
		$data['windows'] = $this->db->get('windows')->result_array();
		$data['device'] = $this->db->get('device')->result_array();
		$data['company'] = $this->db->get('company')->result_array();
		$data['account365'] = $this->db->get('account365')->result_array();
		$data['visio'] = $this->db->get('visio')->result_array();
		$data['autocad_lt'] = $this->db->get('autocad_lt')->result_array();
		$data['ms_project'] = $this->db->get('ms_project')->result_array();

		$this->form_validation->set_rules('company', 'Company', 'trim');
		$this->form_validation->set_rules('pengguna_device', 'Pengguna_Device', 'trim');
		$this->form_validation->set_rules('hostname_device', 'Hostname_Device', 'trim');
		$this->form_validation->set_rules('lan_ip', 'Lan_Ip', 'trim');
		$this->form_validation->set_rules('wireless_ip', 'Wireless_Ip', 'trim');
		$this->form_validation->set_rules('lan_mac_address', 'Lan_Mac_Address', 'trim');
		$this->form_validation->set_rules('wireless_mac_address', 'Wireless_Mac_Address', 'trim');
		$this->form_validation->set_rules('serial_number', 'Serial_Number', 'trim');
		$this->form_validation->set_rules('device', 'Device', 'trim');
		$this->form_validation->set_rules('merk_device', 'Merk_Device', 'trim');
		$this->form_validation->set_rules('product_tipe', 'Produk_tipe', 'trim');
		$this->form_validation->set_rules('ram', 'Ram', 'trim');
		$this->form_validation->set_rules('harddisk', 'Harddisk', 'trim');
		$this->form_validation->set_rules('processor', 'Processor', 'trim');
		$this->form_validation->set_rules('vga', 'Vga', 'trim');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim');
		$this->form_validation->set_rules('department', 'Department', 'trim');
		$this->form_validation->set_rules('jenis_antivirus', 'Jenis_Antivirus', 'trim');
		$this->form_validation->set_rules('expired', 'Expired', 'trim');
		$this->form_validation->set_rules('office', 'Office', 'trim');
		$this->form_validation->set_rules('account365', 'Account365', 'trim');
		$this->form_validation->set_rules('ms_project', 'MS_Project', 'trim');
		$this->form_validation->set_rules('visio', 'Visio', 'trim');
		$this->form_validation->set_rules('autocad_lt', 'Autocad_Lt', 'trim');
		$this->form_validation->set_rules('sage', 'Sage', 'trim');
		$this->form_validation->set_rules('windows', 'Windows', 'trim');
		$this->form_validation->set_rules('vnc_password', 'Vnc_Password', 'trim');
		$this->form_validation->set_rules('password_rdp', 'Password_Rdp', 'trim');
		$this->form_validation->set_rules('full_computer_name', 'Full_Computer_Name', 'trim');
		$this->form_validation->set_rules('is_active', 'Is_Active', 'trim');

		if(isset($_POST['save'])){
			if($this->form_validation->run() ==true ) {
			$data = [
				'company' => htmlspecialchars($this->input->post('company', true)),
				'pengguna_device' => htmlspecialchars($this->input->post('pengguna_device', true)),
				'hostname_device' => htmlspecialchars($this->input->post('hostname_device', true)),
				'lan_ip' => htmlspecialchars($this->input->post('lan_ip', true)),
				'wireless_ip' => htmlspecialchars($this->input->post('wireless_ip', true)),
				'lan_mac_address' => htmlspecialchars($this->input->post('lan_mac_address', true)),
				'wireless_mac_address' => htmlspecialchars($this->input->post('wireless_mac_address', true)),
				'serial_number' => htmlspecialchars($this->input->post('serial_number', true)),
				'device' => htmlspecialchars($this->input->post('device', true)),
				'merk_device' => htmlspecialchars($this->input->post('merk_device', true)),
				'product_tipe' => htmlspecialchars($this->input->post('product_tipe', true)),
				'ram' => htmlspecialchars($this->input->post('ram', true)),
				'harddisk' => htmlspecialchars($this->input->post('harddisk', true)),
				'processor' => htmlspecialchars($this->input->post('processor', true)),
				'vga' => htmlspecialchars($this->input->post('vga', true)),
				'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
				'department' => htmlspecialchars($this->input->post('department', true)),
				'jenis_antivirus' => htmlspecialchars($this->input->post('jenis_antivirus', true)),
				'expired' => htmlspecialchars($this->input->post('expired', true)),
				'office' => htmlspecialchars($this->input->post('office', true)),
				'account365' => htmlspecialchars($this->input->post('account365', true)),
				'ms_project' => htmlspecialchars($this->input->post('ms_project', true)),
				'visio' => htmlspecialchars($this->input->post('visio', true)),
				'autocad_lt' => htmlspecialchars($this->input->post('autocad_lt', true)),
				'sage' => htmlspecialchars($this->input->post('sage', true)),
				'windows' => htmlspecialchars($this->input->post('windows', true)),
				'vnc_password' => htmlspecialchars($this->input->post('vnc_password', true)),
				'password_rdp' => htmlspecialchars($this->input->post('password_rdp', true)),
				'full_computer_name' => htmlspecialchars($this->input->post('full_computer_name', true)),
				'is_active' =>1
			];

			$this->db->insert('inventaris', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">New inventaris Added!</div>');
			redirect('inventaris');

		}
	 } else {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('inventaris/index', $data);
			$this->load->view('templates/footer');		
		}
	}

	public function edit_inventaris($id = null)
	{
		$data['title'] = 'Edit inventaris';
		$data['user'] = $this->db->get_where('m_user', ['username' => 
		$this->session->userdata('username')])->row_array();

		$data['inventaris'] = $this->db->get_where('inventaris', ['id' => $id])->row_array();
		$data['lokasi'] = $this->db->get('m_lokasi')->result_array();
		$data['departement'] = $this->db->get('departement')->result_array();
		$data['antivirus'] = $this->db->get('antivirus')->result_array();
		$data['office'] = $this->db->get('ms_office')->result_array();
		$data['windows'] = $this->db->get('windows')->result_array();
		$data['device'] = $this->db->get('device')->result_array();
		$data['company'] = $this->db->get('company')->result_array();
		$data['account365'] = $this->db->get('account365')->result_array();
		$data['visio'] = $this->db->get('visio')->result_array();
		$data['autocad_lt'] = $this->db->get('autocad_lt')->result_array();
		$data['ms_project'] = $this->db->get('ms_project')->result_array();

		$this->form_validation->set_rules('company', 'Company', 'trim');
		$this->form_validation->set_rules('pengguna_device', 'Pengguna_Device', 'trim');
		$this->form_validation->set_rules('hostname_device', 'Hostname_Device', 'trim');
		$this->form_validation->set_rules('lan_ip', 'Lan_Ip', 'trim');
		$this->form_validation->set_rules('wireless_ip', 'Wireless_Ip', 'trim');
		$this->form_validation->set_rules('lan_mac_address', 'Lan_Mac_Address', 'trim');
		$this->form_validation->set_rules('wireless_mac_address', 'Wireless_Mac_Address', 'trim');
		$this->form_validation->set_rules('serial_number', 'Serial_Number', 'trim');
		$this->form_validation->set_rules('device', 'Device', 'trim');
		$this->form_validation->set_rules('merk_device', 'Merk_Device', 'trim');
		$this->form_validation->set_rules('product_tipe', 'Produk_tipe', 'trim');
		$this->form_validation->set_rules('ram', 'Ram', 'trim');
		$this->form_validation->set_rules('harddisk', 'Harddisk', 'trim');
		$this->form_validation->set_rules('processor', 'Processor', 'trim');
		$this->form_validation->set_rules('vga', 'Vga', 'trim');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim');
		$this->form_validation->set_rules('department', 'Department', 'trim');
		$this->form_validation->set_rules('jenis_antivirus', 'Jenis_Antivirus', 'trim');
		$this->form_validation->set_rules('expired', 'Expired', 'trim');
		$this->form_validation->set_rules('office', 'Office', 'trim');
		$this->form_validation->set_rules('account365', 'Account365', 'trim');
		$this->form_validation->set_rules('ms_project', 'MS_Project', 'trim');
		$this->form_validation->set_rules('visio', 'Visio', 'trim');
		$this->form_validation->set_rules('autocad_lt', 'Autocad_lt', 'trim');
		$this->form_validation->set_rules('sage', 'Sage', 'trim');
		$this->form_validation->set_rules('windows', 'Windows', 'trim');
		$this->form_validation->set_rules('vnc_password', 'Vnc_Password', 'trim');
		$this->form_validation->set_rules('password_rdp', 'Password_Rdp', 'trim');
		$this->form_validation->set_rules('full_computer_name', 'Full_Computer_Name', 'trim');
		$this->form_validation->set_rules('is_active', 'Is_Active', 'trim');

		if($this->form_validation->run() ==false ) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('inventaris/edit_inventaris', $data);
			$this->load->view('templates/footer');
			
		} else {
			
			$id = $this->input->post('id');
			$company = $this->input->post('company');
			$pengguna_device = $this->input->post('pengguna_device');
			$hostname_device = $this->input->post('hostname_device');
			$lan_ip = $this->input->post('lan_ip');
			$wireless_ip = $this->input->post('wireless_ip');
			$lan_mac_address = $this->input->post('lan_mac_address');
			$wireless_mac_address = $this->input->post('wireless_mac_address');
			$serial_number = $this->input->post('serial_number');
			$device = $this->input->post('device');
			$merk_device = $this->input->post('merk_device');
			$product_tipe = $this->input->post('product_tipe');
			$ram = $this->input->post('ram');
			$harddisk = $this->input->post('harddisk');
			$processor = $this->input->post('processor');
			$vga = $this->input->post('vga');
			$lokasi = $this->input->post('lokasi');
			$department = $this->input->post('department');
			$jenis_antivirus = $this->input->post('jenis_antivirus');
			$expired = $this->input->post('expired');
			$office = $this->input->post('office');
			$account365 = $this->input->post('account365');
			$ms_project = $this->input->post('ms_project');
			$visio = $this->input->post('visio');
			$autocad_lt = $this->input->post('autocad_lt');
			$sage = $this->input->post('sage');
			$windows = $this->input->post('windows');
			$vnc_password = $this->input->post('vnc_password');
			$password_rdp = $this->input->post('password_rdp');
			$full_computer_name = $this->input->post('full_computer_name');
			$is_active = $this->input->post('is_active');
		

		$this->db->set('company', $company);
		$this->db->set('pengguna_device', $pengguna_device);
		$this->db->set('hostname_device', $hostname_device);
		$this->db->set('lan_ip', $lan_ip);
		$this->db->set('wireless_ip', $wireless_ip);
		$this->db->set('lan_mac_address', $lan_mac_address);
		$this->db->set('wireless_mac_address', $wireless_mac_address);
		$this->db->set('serial_number', $serial_number);
		$this->db->set('device', $device);
		$this->db->set('merk_device', $merk_device);
		$this->db->set('product_tipe', $product_tipe);
		$this->db->set('ram', $ram);
		$this->db->set('harddisk', $harddisk);
		$this->db->set('processor', $processor);
		$this->db->set('vga', $vga);
		$this->db->set('lokasi', $lokasi);
		$this->db->set('department', $department);
		$this->db->set('jenis_antivirus', $jenis_antivirus);
		$this->db->set('expired', $expired);
		$this->db->set('office', $office);
		$this->db->set('account365', $account365);
		$this->db->set('ms_project', $ms_project);
		$this->db->set('visio', $visio);
		$this->db->set('autocad_lt', $autocad_lt);
		$this->db->set('sage', $sage);
		$this->db->set('windows', $windows);
		$this->db->set('vnc_password', $vnc_password);
		$this->db->set('password_rdp', $password_rdp);
		$this->db->set('full_computer_name', $full_computer_name);
		$this->db->set('is_active', $is_active);
		$this->db->where('id', $id);
		$this->db->update('inventaris');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Edit inventories Success !</div>');
			redirect('inventaris');
		}
	}

	public function hapus_inventaris($id)
	{		
		$data['inventaris'] = $this->db->get_where('inventaris', ['id' => $id])->row_array();
	

		$this->db->where('id',$id);
		$this->db->delete('inventaris');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Success Remove inventaris !</div>');
			redirect('inventaris');


	}

	public function detail_inventaris($id=null)
    {
        $data['title'] = 'Detail Data Inventaris';
        $data['user'] = $this->db->get_where('m_user', ['username' => 
		$this->session->userdata('username')])->row_array();
		
        $data['inventaris'] = $this->db->get_where('inventaris', ['id' => $id])->row_array();

        $this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
        $this->load->view('inventaris/detail_inventaris', $data);
        $this->load->view('templates/footer');
        }

	

}