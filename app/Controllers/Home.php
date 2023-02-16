<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $this->data['page_title'] = 'Home';
        echo view('common/header',$this->data);
        echo view('common/nav');
        return view('home');
        echo view('common/footer');
    }
    
    public function home_index()
    {
        $this->data['page_title'] = 'Home';
        echo view('common/header',$this->data);
        echo view('common/nav');
        return view('home');
        echo view('common/footer');
    }
    
    public function about()
    {
        $this->data['page_title'] = 'About Us';
        echo view('common/header',$this->data);
        echo view('common/nav');
        return view('about');
        echo view('common/footer');
    }
    
    public function dashboard()
    {
        echo "Hi My Name is Ishaq";
    }
    
    public function contact()
    {
        echo "Hi My Name is Ishaq on Contact us Page";
        
    }
}
