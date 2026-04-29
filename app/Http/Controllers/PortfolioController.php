<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display the main portfolio page.
     */
    public function index()
    {
        $data = [
            'experience' => 3,

            // About stats
            'stats' => [
                ['value' => '3+',  'label' => 'Years Experience'],
                ['value' => '5+', 'label' => 'Projects Done'],
                ['value' => '5+', 'label' => 'Happy Clients'],
            ],

            // About highlights
            'highlights' => [
                'Clean, maintainable code following SOLID principles',
                'RESTful API design & third-party integrations',
                'On-time delivery with clear communication',
                'Open to remote and onsite collaboration',
            ],

            // Skill groups with progress bars
            'skillGroups' => [
                [
                    'icon'   => '⚙️',
                    'title'  => 'Backend',
                    'skills' => [
                        ['name' => 'Laravel',    'level' => 60],
                        ['name' => 'PHP',        'level' => 65],
                        ['name' => 'MySQL',      'level' => 50],
                        ['name' => 'REST APIs',  'level' => 45],
                    ],
                ],
                [
                    'icon'   => '🎨',
                    'title'  => 'Frontend',
                    'skills' => [
                       
                        ['name' => 'JavaScript', 'level' => 38],
                        ['name' => 'Tailwind CSS','level' => 35],
                        ['name' => 'HTML / CSS', 'level' => 45],
                    ],
                ],
                [
                    'icon'   => '🛠️',
                    'title'  => 'DevOps & Tools',
                    'skills' => [
                        ['name' => 'Git / GitHub','level' => 88],
                        
                      
                        ['name' => 'AWS Basics',  'level' => 55],
                    ],
                ],
            ],

            // Tool badges
            'tools' => [
                'VSCode', 'Laravel', 'Livewire',
                'Tailwind CSS', 'MySQL', 
                'Git', 'GitHub Actions', 'Postman',
                'Figma', 
            ],

            // Featured projects
            'projects' => [
                [
                    'title'       => 'E-Commerce Platform',
                    'description' => 'A full-featured online store built with Laravel & Vue.js. Includes product management, cart system, Stripe payments, and admin dashboard.',
                    'tags'        => ['Laravel', 'Vue.js', 'Stripe', 'MySQL'],
                    'color'       => '#1a3a5c',
                    'demo'        => 'https://example.com',
                    'repo'        => 'https://github.com',
                ],
                [
                    'title'       => 'Flowershop Online Reservation and Availabilty',
                    'description' => 'A Kanban-style project management tool with real-time updates via Laravel Echo and Pusher, drag-and-drop boards, and team collaboration.',
                    'tags'        => ['Laravel', 'Livewire', 'Pusher'],
                    'color'       => '#2d4a22',
                    'demo'        => null,
                    'repo'        => 'https://github.com',
                ],
               
                [
                    'title'       => 'School Portal',
                    'description' => 'Student portal with enrollment, grade monitoring, announcements, and payment tracking. Used by 500+ students.',
                    'tags'        => ['Laravel', 'Bootstrap', 'MySQL'],
                    'color'       => '#2d1a4a',
                    'demo'        => 'https://example.com',
                    'repo'        => null,
                ],
            ],
        ];

        return view('home', $data);
    }

    /**
     * Handle contact form submission.
     */
    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|min:2|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'required|string|min:3|max:200',
            'message' => 'required|string|min:10|max:3000',
        ]);

        try {
            // Log to file (replace with Mail::send for production)
            Log::info('Portfolio Contact Form', $validated);

            // Example — uncomment and configure to actually send email:
            // Mail::send('emails.contact', $validated, function ($mail) use ($validated) {
            //     $mail->from($validated['email'], $validated['name'])
            //          ->to(config('mail.from.address'))
            //          ->subject('Portfolio: ' . $validated['subject']);
            // });

        } catch (\Exception $e) {
            Log::error('Contact form mail failed: ' . $e->getMessage());
            return back()->withInput()
                ->with('error', 'Something went wrong. Please try again.');
        }

        return back()->with('success', 'Thank you! Your message has been sent. I\'ll get back to you soon.');
    }

    /**
     * Download resume/CV.
     */
    public function downloadResume()
    {
        // Place your actual PDF at: storage/app/public/resume.pdf
        $path = storage_path('app/public/resume.pdf');

        if (!file_exists($path)) {
            // Return a helpful 404 message in development
            abort(404, 'Resume file not found. Place your PDF at storage/app/public/resume.pdf');
        }

        return response()->download($path, 'SophiaAmorErfe_Resume.pdf');
    }
}