<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
		

		
		$this->load->helper('file');
		$dataArrayLocations = read_file('api/data.txt');
		
		$dataArrayLocations = json_decode($dataArrayLocations,true);
		
		$this->session->set_userdata('dataArrayLocations', $dataArrayLocations);
		
		
    }

	
	
	public function textview()
    {
		/*
		$lo_code = $_GET['location'];
		
		
		$this->load->library('sitelink');
		$data['sites'] = $this->sitelink->get_storage_locations();
		if (isset($lo_code)) {
			foreach ($data['sites'] as $site) {
				if($site['sLocationCode'] == $lo_code) {
					$lo_name = $site['sSiteName'];
					$lo_address = $site['sSiteAddr1'] . '</br> ' .$site['sSiteCity'] . ', ' . $site['sSiteRegion'] . ', ' . $site['sSitePostalCode'] . '<br/><strong>Tel: <a href="tel:'.$site['sSitePhone'].'">'. $site['sSitePhone'] . '</a></strong>';
					$data['phone'] = $site['sSitePhone'];
				}
			}
		}
		
		if (isset($lo_code)) {
            $this->session->set_userdata('lo_code', $lo_code);
            $this->session->set_userdata('lo_name', $lo_name);
            $this->session->set_userdata('lo_address', $lo_address);
            //redirect($this->uri->uri_string());
        }
		
		if (!isset($lo_code)) {
            redirect('/');
        }
		
		
		
		
        $this->load->library('sitelink');
        $data['units'] = $this->sitelink->get_units_by_location_code($this->session->lo_code);
        $data['discounts'] = $this->sitelink->get_discounts_by_location_code($this->session->lo_code);
		$data['unitsExtra'] = $this->sitelink->get_more_unit_info($this->session->lo_code);
        $data['step'] = 2;
		*/
		
        $this->load->helper('file');
		$filedata = read_file('api/data.txt');
		
		$data['filedata'] = $filedata;//json_decode($filedata,true);

        $data['main_content'] = 'textview';
        $this->load->view('layout', $data);
    }


    public function index()
    {

        //$this->session->sess_destroy();


        //$this->load->library('sitelink');
        //$data['sites'] = $this->sitelink->get_storage_locations();
        //$data['step'] = 1;
        $data['main_content'] = 'home';
        $this->load->view('layout', $data);
    }

    public function step_two()
    {
		/*
		$lo_code = $_GET['location'];
		
		$this->load->library('sitelink');
		$data['sites'] = $this->sitelink->get_storage_locations();
		if (isset($lo_code)) {
			foreach ($data['sites'] as $site) {
				if($site['sLocationCode'] == $lo_code) {
					$lo_name = $site['sSiteName'];
					$lo_address = $site['sSiteAddr1'] . '</br> ' .$site['sSiteCity'] . ', ' . $site['sSiteRegion'] . ', ' . $site['sSitePostalCode'] . '<br/><strong>Tel: <a href="tel:'.$site['sSitePhone'].'">'. $site['sSitePhone'] . '</a></strong>';
					$data['phone'] = $site['sSitePhone'];
				}
			}
		}
		
		if (isset($lo_code)) {
            $this->session->set_userdata('lo_code', $lo_code);
            $this->session->set_userdata('lo_name', $lo_name);
            $this->session->set_userdata('lo_address', $lo_address);

        }
		
		if (!isset($lo_code)) {
            redirect('/');
        }
		

		
		
        $this->load->library('sitelink');
        $data['units'] = $this->sitelink->get_units_by_location_code($this->session->lo_code);
        $data['discounts'] = $this->sitelink->get_discounts_by_location_code($this->session->lo_code);
		$data['unitsExtra'] = $this->sitelink->get_more_unit_info($this->session->lo_code);
        $data['step'] = 2;
		*/
        $data['main_content'] = 'step_two';
        $this->load->view('layout', $data);
    }

    function step_three()
    {

		/*
		$lo_code = $_GET['location'];
		$unit = $_GET['unit'];
		$type = $_GET['type'];

		
            $redirect = FALSE;
			
			
		$this->load->library('sitelink');
		$data['sites'] = $this->sitelink->get_storage_locations();
		if (isset($lo_code)) {
			foreach ($data['sites'] as $site) {
				if($site['sLocationCode'] == $lo_code) {
					$lo_name = $site['sSiteName'];
					$lo_address = $site['sSiteAddr1'] . '</br> ' .$site['sSiteCity'] . ', ' . $site['sSiteRegion'] . ', ' . $site['sSitePostalCode'] . '<br/><strong>Tel: <a href="tel:'.$site['sSitePhone'].'">'. $site['sSitePhone'] . '</a></strong>';
					$data['phone'] = $site['sSitePhone'];
				}
			}
		}
		
		if (isset($lo_code)) {
            $this->session->set_userdata('lo_code', $lo_code);
            $this->session->set_userdata('lo_name', $lo_name);
            $this->session->set_userdata('lo_address', $lo_address);
            //redirect($this->uri->uri_string());
        }
			
			
			
			
			if (isset($unit)) {
                $this->session->set_userdata('unit_id', $unit);
                $redirect = TRUE;
            }
            if (isset($type)) {
                $this->session->set_userdata('type', $type);
                $redirect = TRUE;
            }

           



			

        if (!isset($lo_code) || !isset($unit) || !isset($type)) {
            redirect('/');
        }

        if ($this->session->type == 'reserve') {
            $data['type'] = 1;
            $data['type_text'] = 'Reservation';
        } else {
            $data['type'] = 2;
            $data['type_text'] = 'Rental';
        }

        $this->load->library('sitelink');
		$data['units'] = $this->sitelink->get_units_by_location_code($this->session->lo_code);
        $data['discounts'] = $this->sitelink->get_discounts_by_location_code($this->session->lo_code);
        $data['date'] = $this->session->date;
        $data['step'] = 3;
		*/
		
        $data['main_content'] = 'step_three';
        $this->load->view('layout', $data);
    }



	function step_four()
    {
		/*
		$lo_code = $_GET['location'];
		
		$this->load->library('sitelink');
		$data['lists'] = $this->sitelink->get_insurance_list();
		
		
		

		$data['sites'] = $this->sitelink->get_storage_locations();
		if (isset($lo_code)) {
			foreach ($data['sites'] as $site) {
				if($site['sLocationCode'] == $lo_code) {
					$lo_name = $site['sSiteName'];
					$lo_address = $site['sSiteAddr1'] . '</br> ' .$site['sSiteCity'] . ', ' . $site['sSiteRegion'] . ', ' . $site['sSitePostalCode'] . '<br/><strong>Tel: <a href="tel:'.$site['sSitePhone'].'">'. $site['sSitePhone'] . '</a></strong>';
					$data['phone'] = $site['sSitePhone'];
				}
			}
		}
		
		if (isset($lo_code)) {
            $this->session->set_userdata('lo_code', $lo_code);
            $this->session->set_userdata('lo_name', $lo_name);
            $this->session->set_userdata('lo_address', $lo_address);
            //redirect($this->uri->uri_string());
        }
		
		
		$data['units'] = $this->sitelink->get_units_by_location_code($this->session->lo_code);
        $data['discounts'] = $this->sitelink->get_discounts_by_location_code($this->session->lo_code);
		*/
		
		
		$data['main_content'] = 'step_four';
        $this->load->view('layout', $data);
		
		
	}	


    function step_five()
    {
		$lo_code = $_GET['location'];
		$unit = $_GET['unit'];
		$type = $_GET['type'];
		$date = $_GET['date'];
		
		$this->session->set_userdata('date', $date);
		$this->load->library('sitelink');
		/*
		$data['sites'] = $this->sitelink->get_storage_locations();
		if (isset($lo_code)) {
			foreach ($data['sites'] as $site) {
				if($site['sLocationCode'] == $lo_code) {
					$lo_name = $site['sSiteName'];
					$lo_address = $site['sSiteAddr1'] . '</br> ' .$site['sSiteCity'] . ', ' . $site['sSiteRegion'] . ', ' . $site['sSitePostalCode'] . '<br/><strong>Tel: <a href="tel:'.$site['sSitePhone'].'">'. $site['sSitePhone'] . '</a></strong>';
					$data['phone'] = $site['sSitePhone'];
					
					$data['onlyAddress'] = $site['sSiteAddr1'] . ' ' .$site['sSiteCity'] . ', ' . $site['sSiteRegion'] . ', ' . $site['sSitePostalCode'];
					$data['onlyPhone'] = $site['sSitePhone'];
					$data['onlyEmail'] = $site['sEmailAddress'];
					
				}
			}
		}
		*/
		
		
		if (isset($lo_code)) {
            $this->session->set_userdata('lo_code', $lo_code);
            //$this->session->set_userdata('lo_name', $lo_name);
            //$this->session->set_userdata('lo_address', $lo_address);
            //redirect($this->uri->uri_string());
        }
		
		if (isset($unit)) {
                $this->session->set_userdata('unit_id', $unit);
                $redirect = TRUE;
		}
		if (isset($type)) {
			$this->session->set_userdata('type', $type);
			$redirect = TRUE;
		}
		
		
		
        if (!isset($lo_code) || !isset($date) || !isset($unit) || !isset($type)) {
            redirect('/');
        }


		
		
        $this->load->library('data');

        $data['error_status'] = false;
        $data['error_message'] = '';
        $data['date'] = $this->session->date;
        $data['step'] = 4;
        $data['price'] = 0;
        $formatted_date = date('Y-m-d', strtotime($this->session->date)) . 'T' . date('H:i:s', strtotime($this->session->date));
        if ($this->session->type == 'reserve') {
            $data['type'] = 1;
            $data['type_text'] = 'Reservation';
            $reservation_fee_retrieve_return = $this->sitelink->reservation_fee_retrieve($this->session->lo_code);
			
            foreach ($reservation_fee_retrieve_return as $reservation_fee) {
                $data['price'] = $data['price'] + $reservation_fee['dcTotal'];
            }
        } else {
            $data['type'] = 2;
            $data['type_text'] = 'Rental';
            $move_in_cost_retrieve_return = $this->sitelink->move_in_cost_retrieve_with_dis($this->session->lo_code, $this->session->unit_id, $formatted_date);
			
            
			$countOne = 0;
            foreach ($move_in_cost_retrieve_return as $move_in_fee) {
				$countOne++;
				if($countOne == 1) {
					$firstDate = $move_in_fee['StartDate'];
				}	
				
				if($firstDate == $move_in_fee['StartDate']) {
					$data['price'] = $data['price'] + $move_in_fee['dcTotal'];
					$data['pArray'][] = $move_in_fee['dcTotal'];
					$data['start_date_array'][] = strtotime($move_in_fee['StartDate']);
					$data['end_date_array'][] = strtotime($move_in_fee['EndDate']);
					$data['tax'][] = $move_in_fee['TaxAmount'];
				}	
				
            }
			
			
			
			//$data['test'] = $this->sitelink->move_in_cost_retrieve_with_dis($this->session->lo_code, $this->session->unit_id, $formatted_date);
			
			
			/* My codes */
			/*
			$this->load->library('sitelink');
			$data['units'] = $this->sitelink->get_units_by_location_code($this->session->lo_code);
			$data['discounts'] = $this->sitelink->get_discounts_by_location_code($this->session->lo_code);
			foreach ($data['units'] as $unit55) {
				
				foreach ($data['discounts']->ConcessionPlans as $dis) {
					//$data['text'][] = $unit55['ConcessionID'];
					//$data['text2'][] = $dis->ConcessionID;
					if(round($unit55['ConcessionID']) == round($dis->ConcessionID) ) {
						if($unit55['UnitID_FirstAvailable'] == $this->session->unit_id) {
							
							$price = $unit55['dcStdRate'] - ($unit55['dcStdRate'] * (round($dis->dcPCDiscount)/100));
							$data['price'] = $data['price'] + $price;
						}
					}
				}
			}
			*/
            $start_date = date('Y-m-d', min($data['start_date_array'])) . 'T' . date('H:i:s', min($data['start_date_array']));
            $end_date = date('Y-m-d', max($data['end_date_array'])) . 'T' . date('H:i:s', max($data['end_date_array']));
			
			//$data['LedgerID'] = $this->sitelink->get_ledger_id($this->session->lo_code, $tenant_return['data']['TenantID']);
			//$data['LeaseURL'] = $this->sitelink->get_lease_url($this->session->lo_code, $tenant_return['data']['TenantID'], $data['LedgerID']);
			
			
        }

        //$data['site_information'] = $this->sitelink->get_site_information($this->session->lo_code);
        //$data['unit_information'] = $this->sitelink->get_units_information_by_unit_id($this->session->lo_code, $this->session->unit_id);
        $data['countries'] = $this->data->get_countries_new();
        $data['states'] = array_merge(array('' => 'Select Province'), $this->data->get_states_new());
        $data['card_types'] = $this->data->get_card_types();
        $data['card_months'] = array_merge(array('' => 'Select Month'), $this->data->get_months());
        $data['card_years'] = array_merge(array('' => 'Select Year'), $this->data->get_years());
        $data['arr_hear_about'] = array('Select Source', 'Printed Yellow Pages', 'Google Search', 'Referral', 'Other', 'Yahoo/Bing', 'Kijiji Ads', 'YellowPages.ca', 'Twitter', 'Facebook Ads', 'Previous/Existing Tenant', 'Drive-By/Signs', 'Ambassador');

        if ($this->input->post('is_submit') == TRUE) {
			
            $this->load->library('form_validation');
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('company', 'Company', 'trim');
            $this->form_validation->set_rules('address_1', 'Address 1', 'trim|required');
            $this->form_validation->set_rules('address_2', 'Address 2', 'trim');
            $this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_rules('state', 'State', 'trim|required');
			
			/*
            if ($this->input->post('country') == 37 || $this->input->post('country') == 224) {
                $this->form_validation->set_rules('state', 'State', 'trim|required');
                $region = $data['states'][$this->input->post('state')];
            } else {
                $this->form_validation->set_rules('state', 'State', 'trim');
            }
            $this->form_validation->set_rules('country', 'Country', 'trim|required');
            if ($this->input->post('country') != 37 && $this->input->post('country') != 224) {
                $this->form_validation->set_rules('region', 'Country/Region', 'trim|required');
                $region = $this->input->post('region');
            } else {
                $this->form_validation->set_rules('region', 'Country/Region', 'trim');
            }
			*/
			
			$region = $this->input->post('region');
			
            $this->form_validation->set_rules('postal', 'Postal/Zip', 'trim|required');
            $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
            $this->form_validation->set_rules('fax', 'Fax', 'trim');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|alpha_numeric|min_length[6]|max_length[10]');

            if (number_format($data['price'], 2) > 0.00) {
                $this->form_validation->set_rules('card_name', 'Name On Card', 'trim|required');
                $this->form_validation->set_rules('card_address', 'Street Address', 'trim|required');
                $this->form_validation->set_rules('card_postal', 'Postal/Zip', 'trim|required');
                $this->form_validation->set_rules('card_type', 'Card Type', 'trim|required');
                $this->form_validation->set_rules('card_number', 'Card Number', 'trim|required|numeric');
                $this->form_validation->set_rules('card_cvv', 'CVV Number', 'trim|required|numeric');
                $this->form_validation->set_rules('card_month', 'Expire Month', 'trim|required');
                $this->form_validation->set_rules('card_year', 'Expire Year', 'trim|required');
            }

            //$this->form_validation->set_rules('comment', 'comment', 'trim');
            //$this->form_validation->set_rules('hear_about', 'hear_about', 'trim');

            if ($this->form_validation->run() == TRUE) {

                $tenant_data['lo_code'] = $this->session->lo_code;
                $tenant_data['first_name'] = $this->input->post('first_name');
                $tenant_data['last_name'] = $this->input->post('last_name');
                $tenant_data['company'] = $this->input->post('company');
                $tenant_data['address_1'] = $this->input->post('address_1');
                $tenant_data['address_2'] = $this->input->post('address_2');
                $tenant_data['city'] = $this->input->post('city');
                //$tenant_data['country'] = $data['countries'][$this->input->post('country')];
                $tenant_data['country'] = "Canada";
                $tenant_data['region'] = $region;
                $tenant_data['postal'] = $this->input->post('postal');
                $tenant_data['phone'] = $this->input->post('phone');
                $tenant_data['fax'] = $this->input->post('fax');
                $tenant_data['email'] = $this->input->post('email');
                $tenant_data['password'] = $this->input->post('password');

                $tenant_return = $this->sitelink->add_tenant($tenant_data);
				
				
				
				/* Tenant ID */
                $tenantID = $tenant_return['data']['TenantID'];
				if($this->session->lo_code == $this->session->locationCode) {
				    $tenantID = $this->session->tenant;
				}



                if ($tenant_return['rt']['Ret_Code'] > 0) {

                    if ($data['type'] == 1) {
                        $reservation_data['lo_code'] = $this->session->lo_code;
                        $reservation_data['tenant_id'] = $tenantID;
                        $reservation_data['unit_id'] = $this->session->unit_id;
                        $reservation_data['date'] = $formatted_date;
                        $reservation_data['comment'] = $this->input->post('comment');

                        $reservation_return = $this->sitelink->add_reservation($reservation_data);

                        if ($reservation_return['rt']['Ret_Code'] > 0) {

                            if (number_format($data['price'], 2) > 0.00) {
                                $reservation_fee_data['lo_code'] = $this->session->lo_code;
                                $reservation_fee_data['tenant_id'] = $tenantID;
                                $reservation_fee_data['waiting_list_id'] = $reservation_return['rt']['Ret_Code'];
                                $reservation_fee_data['card_name'] = $this->input->post('card_name');
                                $reservation_fee_data['card_address'] = $this->input->post('card_address');
                                $reservation_fee_data['card_postal'] = $this->input->post('card_postal');
                                $reservation_fee_data['card_number'] = $this->input->post('card_number');
                                $reservation_fee_data['card_cvv'] = $this->input->post('card_cvv');
                                $reservation_fee_data['expiration_date'] = date('Y-m-t', strtotime('1 ' . $data['card_months'][$this->input->post('card_month')] . ' ' . $data['card_years'][$this->input->post('card_year')]));
                                $reservation_fee_data['card_type'] = $this->input->post('card_type');

                                $reservation_fee_return = $this->sitelink->add_reservation_fee($reservation_fee_data);

                                if ($reservation_fee_return['rt']['Ret_Code'] > 0) {

                                } else {
                                    $data['error_status'] = true;
                                    $data['error_message'] = $tenant_return['rt']['Ret_Msg'];
                                }
                            }

                        } else {
                            $data['error_status'] = true;
                            $data['error_message'] = $tenant_return['rt']['Ret_Msg'];
                        }

                    } else {

                        $move_in_data['lo_code'] = $this->session->lo_code;
                        $move_in_data['tenant_id'] = $tenantID;
                        $move_in_data['acc_id'] = $tenant_return['data']['sAccessCode'];
                        $move_in_data['unit_id'] = $this->session->unit_id;
                        $move_in_data['start_date'] = $start_date;
                        $move_in_data['end_date'] = $end_date;
                        $move_in_data['amount'] = $data['price'];
                        $move_in_data['card_name'] = $this->input->post('card_name');
                        $move_in_data['card_address'] = $this->input->post('card_address');
                        $move_in_data['card_postal'] = $this->input->post('card_postal');
                        $move_in_data['card_number'] = $this->input->post('card_number');
                        $move_in_data['card_cvv'] = $this->input->post('card_cvv');
                        $move_in_data['expiration_date'] = date('Y-m-t', strtotime('1 ' . $data['card_months'][$this->input->post('card_month')] . ' ' . $data['card_years'][$this->input->post('card_year')]));
                        $move_in_data['card_type'] = $this->input->post('card_type');

                        $move_in_return = $this->sitelink->move_in($move_in_data);

                        if ($move_in_return['rt']['Ret_Code'] > 0) {

                        } else {
                            $data['error_status'] = true;
                            $data['error_message'] = $move_in_return['rt']['Ret_Msg'];
                        }
                    }

                } else {
                    $data['error_status'] = true;
                    $data['error_message'] = $tenant_return['rt']['Ret_Msg'];
                }
				
				
				//$data['aa'] = $tenant_return;
				
				
					
					/*My Code*/
					//$data['LedgerID'] = $this->sitelink->get_ledger_id($this->session->lo_code, $tenant_return['data']['TenantID']);
					//$data['LeaseURL'] = $this->sitelink->get_lease_url($this->session->lo_code, $tenant_return['data']['TenantID'], $data['LedgerID']);
					//$data['LedgerID'] = $tenant_return['data']['TenantID'];
					
				
				
                if ($data['error_status'] == false) {
					
					
					
					
					
                    $this->session->set_flashdata('done', 'You have successfully booked your ' . $data['type_text']);
					
					$data['LeaseURL'] = $this->sitelink->get_lease_url($this->session->lo_code, $tenantID, $move_in_return['rt']['Ret_Code']);
					
                    redirect($data['LeaseURL']);
                }

            }
			
			
			
			
			
			
			if ($data['error_status'] == false) {
				
				/*Insert into Hubspot */
				$arr = array(
					'properties' => array(
						array(
							'property' => 'email',
							'value' => $this->input->post('email')
						),
						array(
							'property' => 'firstname',
							'value' => $this->input->post('first_name')
						),
						array(
							'property' => 'lastname',
							'value' => $this->input->post('last_name')
						),
						array(
							'property' => 'phone',
							'value' => $this->input->post('phone')
						),
						
						
						array(
							'property' => 'store_name',
							'value' => $this->input->post('store_name')
						),
						
						
						array(
							'property' => 'store_address',
							'value' => $this->input->post('store_address')
						),
						
						
						array(
							'property' => 'store_phone',
							'value' => $this->input->post('store_phone')
						),
						
						
						array(
							'property' => 'store_email',
							'value' => $this->input->post('store_email')
						),
						
						array(
							'property' => 'move_in_date',
							'value' => $this->input->post('move_in_date')
						),
						
						array(
							'property' => 'unit_size',
							'value' => $this->input->post('unit_size')
						),
						
						array(
							'property' => 'total_due_on_move_in_date',
							'value' => $this->input->post('total_due_on_move_in_date')
						),
						
						array(
							'property' => 'monthly_protection_plan',
							'value' => $this->input->post('monthly_protection_plan')
						),
						
						
						array(
							'property' => 'company',
							'value' => $this->input->post('company')
						),
						
						array(
							'property' => 'inserted_through_api',
							'value' => 'Yes'
						),
						
						
						
						array(
							'property' => 'zip',
							'value' => $this->input->post('postal')
						),
						
						
						array(
							'property' => 'confirmation_type',
							'value' => $this->input->post('confirmation_type')
						)
						
						
						
						
					)
				);
				
				
				$post_json = json_encode($arr);
				$hapikey = readline("Enter hapikey: (demo for the demo portal): ");
				//$endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=3dba88a2-59f2-4933-9bcc-e9f73cc1b2f6';
				$endpoint = 'https://api.hubapi.com/contacts/v1/contact/createOrUpdate/email/'.$this->input->post('email').'/?hapikey=3dba88a2-59f2-4933-9bcc-e9f73cc1b2f6';
				$ch = @curl_init();
				@curl_setopt($ch, CURLOPT_POST, true);
				@curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
				@curl_setopt($ch, CURLOPT_URL, $endpoint);
				@curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
				@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$response = @curl_exec($ch);
				$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
				$curl_errors = curl_error($ch);
				@curl_close($ch);
			
			}
			
			

        }

        $data['main_content'] = 'step_five';
		//$data['units'] = $this->sitelink->get_units_by_location_code($this->session->lo_code);
        //$data['discounts'] = $this->sitelink->get_discounts_by_location_code($this->session->lo_code);
		//$data['unitsExtra'] = $this->sitelink->get_more_unit_info($this->session->lo_code);
        $this->load->view('layout', $data);
    }
	
	
	
	
	public function thank_you()
    {
		$data['step'] = 6;
		$data['main_content'] = 'thank_you';
        $this->load->view('layout', $data);
	}
	
	
	
	public function reserveunit()
    {
		header('Access-Control-Allow-Origin: *');
		$this->load->library('sitelink');


		$data['location_code'] = $_POST['location_code'];
		$data['first_name'] = $_POST['first_name'];
		$data['last_name'] = $_POST['last_name'];
		$data['email'] = $_POST['email'];
		$data['phone'] = $_POST['phone'];
		$data['date'] = $_POST['date'];
		$data['unit_id_input'] = $_POST['unit_id_input'];
		$formatted_date = date('Y-m-d', strtotime($data['date'])) . 'T' . date('H:i:s', strtotime($data['date']));
		
		
		
		
		
		
		
		$tenant_data['lo_code'] = $data['location_code'];
		$tenant_data['first_name'] = $data['first_name'];
		$tenant_data['last_name'] = $data['last_name'];
		$tenant_data['company'] = "";
		$tenant_data['address_1'] = "";
		$tenant_data['address_2'] = "";
		$tenant_data['city'] = "";
		$tenant_data['country'] = "";
		$tenant_data['region'] = "";
		$tenant_data['postal'] = "";
		$tenant_data['phone'] = $data['phone'];
		$tenant_data['fax'] = "";
		$tenant_data['email'] = $data['email'];
		$tenant_data['password'] = "";

		$data['tenant_return'] = $this->sitelink->add_tenant($tenant_data);
		
		
		$data['TenantID'] = $data['tenant_return']['data']['TenantID'];
		
		/* Tenant ID */
		$tenantID = $data['tenant_return']['data']['TenantID'];
		if($this->session->lo_code == $this->session->locationCode) {
		    $tenantID = $this->session->tenant;
		}
		
		
		
		
		$reservation_data['lo_code'] = $data['location_code'];
		$reservation_data['tenant_id'] = $tenantID;
		$reservation_data['unit_id'] = $data['unit_id_input'];
		$reservation_data['date'] = $formatted_date;
		$reservation_data['comment'] = "";

		$data['reservation_return'] = $this->sitelink->add_reservation($reservation_data);
		
		
		if ($data['reservation_return']['rt']['Ret_Code'] > 0) {
			
			$data['status'] = 'success';
			
			
			$data['sites'] = $this->sitelink->get_storage_locations();
			
			foreach ($data['sites'] as $site) {
				if($site['sLocationCode'] == $data['location_code']) {
					$data['location_name'] = $site['sSiteName'];
					$data['location_phone'] = $site['sSitePhone'];
					$data['location_email'] = $site['sEmailAddress'];
					$data['location_address'] = $site['sSiteAddr1'];
				}
			}
			
			
			
			
			/*Insert into Hubspot */
				$arr = array(
					'properties' => array(
						array(
							'property' => 'email',
							'value' => $data['email']
						),
						array(
							'property' => 'firstname',
							'value' => $data['first_name']
						),
						array(
							'property' => 'lastname',
							'value' => $data['last_name']
						),
						array(
							'property' => 'phone',
							'value' => $data['phone']
						),
						array(
							'property' => 'move_in_date',
							'value' => $data['date']
						),
						array(
							'property' => 'inserted_through_api',
							'value' => 'Yes'
						),
						array(
							'property' => 'confirmation_type',
							'value' => 'Reservation'
						),
						
						
						
						array(
							'property' => 'store_name',
							'value' => $data['location_name']
						),
						
						
						array(
							'property' => 'store_address',
							'value' => $data['location_address']
						),
						
						
						array(
							'property' => 'store_phone',
							'value' => $data['location_phone']
						),
						
						
						array(
							'property' => 'store_email',
							'value' => $data['location_email']
						),
						
						
						
						
						/*
						
						
						
						
						array(
							'property' => 'unit_size',
							'value' => $this->input->post('unit_size')
						),
						
						array(
							'property' => 'total_due_on_move_in_date',
							'value' => $this->input->post('total_due_on_move_in_date')
						),
						
						array(
							'property' => 'monthly_protection_plan',
							'value' => $this->input->post('monthly_protection_plan')
						),
						
						
						array(
							'property' => 'company',
							'value' => $this->input->post('company')
						),
						
						array(
							'property' => 'zip',
							'value' => $this->input->post('postal')
						),
						
						*/
						
						
						
						
						
					)
				);
				
				
				$post_json = json_encode($arr);
				$hapikey = readline("Enter hapikey: (demo for the demo portal): ");
				$endpoint = 'https://api.hubapi.com/contacts/v1/contact/createOrUpdate/email/'.$this->input->post('email').'/?hapikey=3dba88a2-59f2-4933-9bcc-e9f73cc1b2f6';
				$ch = @curl_init();
				@curl_setopt($ch, CURLOPT_POST, true);
				@curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
				@curl_setopt($ch, CURLOPT_URL, $endpoint);
				@curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
				@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$response = @curl_exec($ch);
				$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
				$curl_errors = curl_error($ch);
				@curl_close($ch);
			
			
			
		}
		
		
		
		
		
		
		echo json_encode($data);
        //$this->load->view('layout', $data);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	

}
