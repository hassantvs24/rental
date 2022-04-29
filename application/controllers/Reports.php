<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller
{

    private $file_data;
    private $file_json;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
        $this->load->helper('array');
        $this->file_json = read_file('api/reservation.json');

        $this->file_data = json_decode($this->file_json,true);

    }


    public function index()
    {
        //$this->load->helper(array('form', 'url'));
        //$this->load->library('form_validation');
       // $this->form_validation->set_rules('date_rng', 'Date Range', 'required|min_length[10]|max_length[10]|');

        if ($this->session->userdata('auth') != 'Success') {
            redirect('/access');
        }

        $reservations = $this->file_data;

        $rangeStart = date('Y-m-d').' 00:00:00';
        $rangeEnd = date('Y-m-d').' 23:59:59';

        if ($this->input->get('date_rng') != '') {
            $date_rngs = $this->input->get('date_rng');
            $date_rng = explode(" - ",$date_rngs);

            $rangeStart = date('Y-m-d H:i:s', strtotime($date_rng[0].' 00:00:00'));
            $rangeEnd = date('Y-m-d H:i:s', strtotime($date_rng[1].' 23:59:59'));
        }

        $reserved = [];
        foreach ($reservations as $loc => $reservation){
            //Select only rental:st
            $only_rental = array_filter($reservation['reserve_data'], function ($var) {
                return ($var['QTRentalTypeID'] == 3); // 3 means rental
            });
            //Select only rental:end

            //Select into date range:st
            $filtered_data = array_filter($only_rental, function($var) use ($rangeStart, $rangeEnd) {
                $evtime = strtotime($var['dCreated']);
                return $evtime >= strtotime($rangeStart) && $evtime <= strtotime(($rangeEnd));
            });
            //Select into date range:end

            $reserved[$loc]['cont'] = count($filtered_data);
            $reserved[$loc]['name'] = $reservation['name'];
        }

        arsort($reserved);

        //echo json_encode($reserved);

        $data['table'] = $reserved;
        $data['title'] = 'Reports';
        $data['main_content'] = 'admin/reports';

        $this->load->view('admin/layout', $data);
    }

    public function access()
    {
        $data['title'] = 'Reports Access';
        $this->load->view('admin/access', $data);

    }

    public function access_auth()
    {
        $password = $this->input->post('password');

        if ($password == '12345678') {
            $this->session->set_userdata(['auth' => 'Success']);
            redirect('/reports');
        }else{
            $this->session->set_flashdata('access', 'Wrong Password');
            redirect('/access');
        }

    }

    public function admin_logout(){
        $this->session->unset_userdata('auth');
        redirect('/access');
    }


}