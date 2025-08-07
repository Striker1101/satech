<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function homepage()
    {
        $services = include app_path('Datas/services.php');
        $projects = include app_path('Datas/projects.php');
        $testimonies = include app_path('Datas/testimonies.php');
        $partners = include app_path('Datas/partners.php');
        $teams = include app_path('Datas/teams.php');
        $faq = include app_path('Datas/faq.php');
        $faq = array_slice($faq, 0, 4);
        return view('pages.home', compact('services', 'projects', 'testimonies', 'partners', 'teams', 'faq'));
    }

    public function about()
    {
        $faq = include app_path('Datas/faq.php');
        $faq = array_slice($faq, 0, 4);
        $teams = include app_path('Datas/teams.php');
        $testimonies = include app_path('Datas/testimonies.php');
        return view('pages.about', compact('faq', 'teams', 'testimonies'));
    }

    public function faq()
    {
        $faq = include app_path('Datas/faq.php');
        $faq = array_slice($faq, 0, 4);
        return view('pages.faq', compact('faq'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contact_post()
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'message' => 'required|string|max:1000',
        ]);

        $adminEmail = env('Admin_Mail');

        $mailData = [
            'subject' => 'New Contact Form Submission',
            'body' => "
            A new contact message was submitted from your website:

            Name: {$data['first_name']} {$data['last_name']}
            Phone: {$data['phone']}
            Email: {$data['email']}

            Message:
            {$data['message']}
        ",
        ];

        Mail::raw($mailData['body'], function ($message) use ($adminEmail, $mailData, $data) {
            $message
                ->to($adminEmail)
                ->subject($mailData['subject'])
                ->replyTo($data['email'], "{$data['first_name']} {$data['last_name']}");
        });

        return response()->json(['message' => 'Message sent successfully.'], 200);
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

    public function service_detail(Request $request)
    {
        $name = $request->query('name');

        $services = include app_path('Datas/services.php');

        // Find service by 'name' (case-sensitive match)
        $service = collect($services)->firstWhere('name', $name);

        if (!$service) {
            abort(404, 'Service not found');
        }

        return view('pages.services.details', compact('service'));
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
