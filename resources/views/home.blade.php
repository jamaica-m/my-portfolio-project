@extends('layouts.app')

@section('title', 'Home - Developer Portfolio')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center px-6 bg-gradient-to-b from-white via-orange-50/40 to-white">
    <div class="text-center max-w-3xl">
        <span class="inline-block px-4 py-1.5 mb-6 text-xs font-bold uppercase tracking-widest text-orange-600 bg-orange-100/80 rounded-full border border-orange-200">
        
        </span>
        <h1 class="text-4xl sm:text-6xl font-extrabold text-gray-900 tracking-tight leading-tight mb-6">
            Hi, I'm <span class="text-orange-600">JAMAICA JOY</span>
        </h1>
        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('projects') }}" class="px-7 py-3.5 bg-orange-600 hover:bg-orange-500 text-white font-bold rounded-xl shadow-lg shadow-orange-500/30 transition">
                Explore Projects
            </a>
            <a href="{{ route('about') }}" class="px-7 py-3.5 bg-white border-2 border-orange-600 text-orange-600 hover:bg-orange-50 font-bold rounded-xl shadow-sm transition">
                More About Me
            </a>
        </div>
    </div>
</div>
@endsection