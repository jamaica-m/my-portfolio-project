<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function skills()
    {
        $skills = [
            ['name' => 'Laravel Framework', 'icon' => 'fa-brands fa-laravel', 'level' => 'Advanced'],
            ['name' => 'PHP', 'icon' => 'fa-brands fa-php', 'level' => 'Advanced'],
            ['name' => 'HTML5 & CSS3', 'icon' => 'fa-brands fa-html5', 'level' => 'Expert'],
            ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js', 'level' => 'Intermediate'],
            ['name' => 'Tailwind CSS', 'icon' => 'fa-solid fa-code', 'level' => 'Advanced'],
            ['name' => 'MySQL / SQLite', 'icon' => 'fa-solid fa-database', 'level' => 'Intermediate'],
        ];

        return view('skills', compact('skills'));
    }

    public function projects()
    {
        $projects = [
            [
                'title' => 'Laravel E-Commerce Platform',
                'description' => 'A web application with product management, shopping cart, and checkout system.',
                'tags' => ['Laravel', 'PHP', 'MySQL'],
                'link' => '#'
            ],
            [
                'title' => 'Personal Portfolio Web App',
                'description' => 'A clean, modern, multi-page portfolio built using Laravel Blade and Tailwind CSS.',
                'tags' => ['Laravel', 'Tailwind', 'Blade'],
                'link' => '#'
            ],
            [
                'title' => 'Task Management System',
                'description' => 'An interactive CRUD application to track projects, deadlines, and daily tasks.',
                'tags' => ['PHP', 'SQLite', 'JavaScript'],
                'link' => '#'
            ]
        ];

        return view('projects', compact('projects'));
    }

    public function contact()
    {
        return view('contact');
    }
}