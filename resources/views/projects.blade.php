@extends('layouts.app')

@section('title', 'Projects - Developer Portfolio')

@section('content')
<div class="py-16 px-6 max-w-6xl mx-auto">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-3">Featured Projects</h1>
        <div class="w-16 h-1 bg-orange-500 mx-auto rounded-full"></div>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        @foreach($projects as $project)
            <div class="bg-white border border-orange-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg hover:border-orange-300 transition flex flex-col justify-between p-6">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $project['title'] }}</h3>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">{{ $project['description'] }}</p>
                </div>
                <div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project['tags'] as $tag)
                            <span class="text-xs font-semibold bg-orange-100 text-orange-700 px-3 py-1 rounded-md">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                    <a href="{{ $project['link'] }}" class="inline-flex items-center gap-2 text-sm font-bold text-orange-600 hover:text-orange-500 transition">
                        View Details <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection