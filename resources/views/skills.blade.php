@extends('layouts.app')

@section('title', 'Skills - Developer Portfolio')

@section('content')
<div class="py-16 px-6 max-w-5xl mx-auto">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-3">Technical Skills</h1>
        <div class="w-16 h-1 bg-orange-500 mx-auto rounded-full"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($skills as $skill)
            <div class="p-6 bg-white border border-orange-100 rounded-2xl shadow-sm hover:shadow-md hover:border-orange-300 transition flex items-center gap-4">
                <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center text-2xl font-bold">
                    <i class="{{ $skill['icon'] }}"></i>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-lg">{{ $skill['name'] }}</h3>
                    <span class="text-xs font-semibold text-orange-600 bg-orange-50 px-2.5 py-1 rounded-md border border-orange-200">
                        {{ $skill['level'] }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection