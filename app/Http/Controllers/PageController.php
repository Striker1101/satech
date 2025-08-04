<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function homepage()
    {
        return view('pages.home');
    }

      public function about()
    {
        return view('pages.about');
    }

      public function faq()
    {
        return view('pages.faq');
    }

      public function contact()
    {
        return view('pages.contact');
    }

      public function partner()
    {
        return view('pages.partner');
    }


    public function service_get()
    {
        $services = include app_path('Datas/services.php');
        return view('pages.services.index', compact('services'));
    }

      public function service_detail()
    {
        return view('pages.services.details');
    }



    public function project_get()
    {
        return view('pages.projects.index');
    }

      public function project_detail()
    {
        return view('pages.projects.details');
    }

}
