<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
		


    }


    public function index() {
        $this->load->library('sitelink');
        
        $data['sites'] = $this->sitelink->get_storage_locations();
        
        
        
        $data['login'] = "";
        if ($this->input->post('is_submit') == TRUE) {
            $user = $this->input->post('email');
            $pass = $this->input->post('pass');
            foreach($data['sites'] as $site) {
                $data['login'] = $this->sitelink->try_login($site['sLocationCode'], $user, $pass);
                if($data['login'] > 0) {
                    $tenantID = strval($data['login']);
                    $this->session->set_userdata('tenant', $tenantID); 
                    $this->session->set_userdata('locationCode', $site['sLocationCode']); 
                    redirect('account/dashboard');
                }
            }
            
        }
        
        
        $data['accountList'] = "";
        if (isset($_GET['email_forget'])) {
            $user = $_GET['email_forget'];
            $data['accountList'] = $this->sitelink->account_list($user);
        }
        
        
        $data['main_content'] = 'login';
        $this->load->view('account/login', $data);
    }


    public function dashboard() {
        $this->load->library('sitelink');
        $locationCode = $this->session->locationCode;
        $tenantID = $this->session->tenant;
        
        $data['rtn'] = "";
        
        
        
        if ($this->input->post('autoPayValue')) {
            $ledgID = $this->input->post('ledgID');
            $autoPayValue = $this->input->post('autoPayValue');
            
            
            $cardName = $this->input->post('cardName');
            $cardType = $this->input->post('cardType');
            $cardNo = $this->input->post('cardNo');
            $exDate = $this->input->post('exDate');
            
            $cardZip = $this->input->post('cardZip');
            $cardStreet = $this->input->post('cardStreet');

            
            if($autoPayValue == '1') {
                $autoPayValue = 1;
            } else {
                $autoPayValue = 0;
            }
            
            $data['rtn'] = $this->sitelink->updateBillingInfo($ledgID, $autoPayValue, $locationCode, $cardName, $cardType, $cardNo, $exDate, $cardZip, $cardStreet);
        }
        
        
        
        $data['ppy'] = "";
        if ($this->input->post('payNow')) {
            
            $ledgID = $this->input->post('ledgID');
            $uintID = $this->input->post('uintID');
            $cardName = $this->input->post('cardName');
            $cardType = $this->input->post('cardType');
            $cardNo = $this->input->post('cardNo');
            
            $cardZip = $this->input->post('cardZip');
            $cardStreet = $this->input->post('cardStreet');
            $cvv = $this->input->post('cvv');
            $payAmount = $this->input->post('payAmount');
            
            $cardMonth = $this->input->post('cardMonth');
            $cardYear = $this->input->post('cardYear');
            
            $data['ppy'] = $this->sitelink->payNowSmpl($ledgID, $uintID, $tenantID, $locationCode, $cardName, $cardType, $cardNo, $cardZip, $cardStreet, $payAmount, $cvv, $cardMonth, $cardYear);

        }
        
        
        
        

        if(isset($tenantID)) {
            $data['alldata'] = $this->sitelink->get_tenant_info($tenantID, $locationCode);
        }
        
        
        
        $this->load->view('account/layout', $data);
    }



    public function logout() {
        $this->session->sess_destroy();
        $this->load->view('account/layout');
        redirect('account');
    }


}

?>


