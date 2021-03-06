<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CampaignController extends Controller
{
    
	protected $view_directory_name="v1.Campaign.";
	
    public function index() {
 
        return view($this->view_directory_name.'campaign');

    }
    public function check_phone_number() {
       
        return view($this->view_directory_name.'micros.CheckPhoneNumber');
    }
    public function goal_action() {
       
        return view($this->view_directory_name.'micros.goalaction');
    }
    public function new_compaign() {
       
        return view($this->view_directory_name.'micros.newcampaign');
    }
    public function view_compaign() {
       
        return view($this->view_directory_name.'micros.viewcampaign');
    }
    

}
