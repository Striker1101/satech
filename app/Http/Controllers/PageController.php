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

    public function contact_post(Request $request)
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
            'body' =>
                "
        You have received a new contact form submission from your website.

        Name: {$data['first_name']} {$data['last_name']}
        Phone: {$data['phone']}
        Email: {$data['email']}
        Service: " .
                ($request->service ?? 'Not specified') .
                "

        Message:
        {$data['message']}

        ---
        This message was sent via the contact form on your website.
    ",
        ];

        Mail::raw($mailData['body'], function ($message) use ($adminEmail, $mailData, $data) {
            $message
                ->to($adminEmail)
                ->subject($mailData['subject'])
                ->replyTo($data['email'], "{$data['first_name']} {$data['last_name']}");
        });

     return redirect()->back()->with('success', 'Message sent successfully.');

    }

    public function partner()
    {
        return view('pages.partner');
    }

    public function service_get()
    {
        $services = include app_path('Datas/services.php');
        $testimonies = include app_path('Datas/testimonies.php');
        return view('pages.services.index', compact('services', 'testimonies'));
    }

    public function service_detail(Request $request)
    {
        $name = $request->query('name');

        $services = include app_path('Datas/services.php');

        // Find current service
        $service = collect($services)->firstWhere('name', $name);

        if (!$service) {
            abort(404, 'Service not found');
        }

        $servicesCollection = collect($services)->values(); // Ensure indexed
        $currentIndex = $servicesCollection->search(fn($s) => $s['id'] === $service['id']);

        // Determine next
        if ($currentIndex !== false && isset($servicesCollection[$currentIndex + 1])) {
            $next = $servicesCollection[$currentIndex + 1];
        } else {
            $next = $servicesCollection->random();
        }

        // Determine previous
        if ($currentIndex !== false && isset($servicesCollection[$currentIndex - 1])) {
            $prev = $servicesCollection[$currentIndex - 1];
        } else {
            $prev = $servicesCollection->random();
        }
        $services = include app_path('Datas/services.php');

        return view('pages.services.details', [
            'service' => $service,
            'next' => $next,
            'prev' => $prev,
            'services' => $services,
        ]);
    }

    public function project_get()
    {
        $projects = include app_path('Datas/projects.php');
        return view('pages.projects.index', compact('projects'));
    }

    public function project_detail(Request $request)
    {
        $slug = $request->query('slug');

        $projects = include app_path('Datas/projects.php');

        // Find current project
        $project = collect($projects)->firstWhere('slug', $slug);

        if (!$project) {
            abort(404, 'Project not found');
        }

        $projectsCollection = collect($projects)->values(); // Ensure indexed
        $currentIndex = $projectsCollection->search(fn($s) => $s['id'] === $project['id']);

        // Determine next
        if ($currentIndex !== false && isset($projectsCollection[$currentIndex + 1])) {
            $next = $projectsCollection[$currentIndex + 1];
        } else {
            $next = $projectsCollection->random();
        }

        // Determine previous
        if ($currentIndex !== false && isset($sprojectsCollection[$currentIndex - 1])) {
            $prev = $sprojectsCollection[$currentIndex - 1];
        } else {
            $prev = $projectsCollection->random();
        }
        $projects = include app_path('Datas/projects.php');

        return view('pages.projects.details', [
            'project' => $project,
            'next' => $next,
            'prev' => $prev,
            'projects' => $projects,
        ]);
    }
}
