@extends('layout.app')

@section('title', 'Blade Layout')

@section('content')
    <h1>Layout</h1>
    <x-alert type="success">
        <x-slot:title>
            Ini adalah title
        </x-slot:title>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea cum consequuntur ut est laboriosam laudantium hic voluptatum. Optio exercitationem, perspiciatis tempore beatae aliquid pariatur, vel fuga error delectus at deleniti.
    </x-alert>

    <x-alert type="danger">
        <x-slot:title>
            Ini adalah title
        </x-slot:title>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea cum consequuntur ut est laboriosam laudantium hic voluptatum. Optio exercitationem, perspiciatis tempore beatae aliquid pariatur, vel fuga error delectus at deleniti.
    </x-alert>

    <x-alert type="info">
        <x-slot:title>
            Ini adalah title
        </x-slot:title>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea cum consequuntur ut est laboriosam laudantium hic voluptatum. Optio exercitationem, perspiciatis tempore beatae aliquid pariatur, vel fuga error delectus at deleniti.
    </x-alert>

    <x-primary-button>Tombol</x-primary-button>
    @php $caption = '<em>Hapus</em>'; @endphp
    <x-danger-button :caption="$caption"/>
@stop