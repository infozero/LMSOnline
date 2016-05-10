<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of member
 *
 * @author infozero
 */
class Member extends CI_Controller 
{
    public function login() {
        $this->load->view("member/login");
    }

}
