@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

@php
$games = [
    ['name'=>'Elden Ring','genre'=>'RPG','rating'=>5],
    ['name'=>'GTA V','genre'=>'Open World','rating'=>4],
    ['name'=>'Valorant','genre'=>'FPS','rating'=>4],
];
@endphp

@foreach($games as $g)

<div class="bg-[#121821] p-5 rounded-xl border border-zinc-800">

    <h2 class="font-bold">{{ $g['name'] }}</h2>
    <p class="text-sm text-zinc-400">{{ $g['genre'] }}</p>

    <div class="text-yellow-400 mt-2">
        @for($i=1;$i<=5;$i++)
            {{ $i <= $g['rating'] ? '★' : '☆' }}
        @endfor
    </div>

    <button class="mt-4 w-full bg-white text-black py-2 rounded-lg">
        Detail
    </button>

</div>

@endforeach

</div>

@endsection