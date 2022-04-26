<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<?php $this->load->view('inc/header'); ?>

<?php if(!isset($_GET['script'])) { $this->load->view('inc/website-header'); } ?>

<?php $this->load->view($main_content); ?>



<?php $this->load->view('inc/footer'); ?>

<?php if(!isset($_GET['script'])) { $this->load->view('inc/website-footer'); } ?>


