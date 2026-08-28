@extends('layouts.app')

@section('title', 'Contact - Developer Portfolio')

@section('content')
<div class="py-16 px-6 max-w-3xl mx-auto text-center">
    <div class="mb-10">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-3">Contact Me</h1>
        <div class="w-16 h-1 bg-orange-500 mx-auto rounded-full mb-4"></div>
        <p class="text-gray-600 text-lg">Have a question or want to work together?</p>
    </div>

    <div class="bg-white p-8 sm:p-10 rounded-3xl border border-orange-100 shadow-sm">
        <div class="space-y-6">
            <div class="p-4 bg-orange-50 rounded-2xl border border-orange-100 inline-block w-full">
                <i class="fa-regular fa-envelope text-orange-600 text-3xl mb-2"></i>
                <h3 class="font-bold text-gray-900">Email Address</h3>
                <p class="text-gray-600">jjnmcd C:\Users\admin\my-portfolio-project@gmail.com</p>
            </div>
            
            <a href="mailto:your.email@example.com" class="inline-flex items-center gap-3 bg-orange-600 hover:bg-orange-500 text-white font-bold text-lg px-8 py-4 rounded-2xl shadow-lg shadow-orange-500/30 transition">
                Send an Email Now
            </a>
        </div>
    </div>
</div>
@endsection