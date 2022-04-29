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
        $reservations = $this->file_data;

        $rangeStart = date('Y-m-d H:i:s', strtotime('2022-04-01 00:00:00'));
        $rangeEnd = date('Y-m-d H:i:s', strtotime('2022-04-01 23:59:59'));

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
        echo json_encode($reserved);


    }

    public function locations()
    {
        //$data = $this->file_data['location'];
        //echo json_encode($data);

    }


}