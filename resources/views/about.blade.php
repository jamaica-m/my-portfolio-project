@extends('layouts.app')

@section('title', 'About Me - Developer Portfolio')

@section('content')
<div class="py-16 px-6 max-w-4xl mx-auto">
    <div class="text-center mb-12">
        <!-- IMAGE TAG -->
        <img src="{{ asset('pic/jam.jpg') }}" 
             alt="Profile Picture" 
             class="w-40 h-40 rounded-full mx-auto mb-6 object-cover border-4 border-black-500 shadow-md">
             
        <h1 class="text-4xl font-extrabold text-gray-900 mb-3">JAMAICA JOY N. MALANA </h1>
        <div class="w-16 h-1 bg-orange-500 mx-auto rounded-full"></div>
    </div>
    
    <div class="bg- p-8 orange sm:p-10 rounded-3xl border border-black-100 shadow-sm leading-relaxed text-gray-700">
        <p class="text-lg">
            Hello! I am a passionate Web Developer focused on building high-performance web applications and 
            currently a 3rd year college at COMPUTER COMMUNICATION DEVELOPMENT INSTITUTE taking a BACHELOR OF SCIENCE INFORMATION TECHNOLOGY. 
            I am 20 years old as of the moment.
        </p>
        
        <p class="text-lg">
            I craft clean, functional, and responsive applications using Laravel, PHP, and modern web technologies.
        </p>
    </div>
</div>
@endsection