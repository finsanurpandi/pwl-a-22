<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>View for StudentController@index</h1>

    {{ $nama }}
    <br/>
    {{ $kelas }} 
    <br/>
    {!! $prodi !!}
    <br/>
    @if($kelas == 'A 2022')
        Ya, ini kelas A 2022
    @else
        Ini bukankelas A 2022
    @endif

    <h3>Loop</h3>
    @foreach($alphabets as $alphabet)
    No. {{ $loop->iteration }},
        index = {{ $loop->index}} ,
        @if($loop->last)
            {{ $alphabet }}
        @else 
            {{ $alphabet }},
        @endif
        <br/>
    @endforeach

    <h3>Form</h3>
    <form method="POST" action="#">
        @csrf
        @method('DELETE')
    </form>

    <?php


?>
@php

@endphp
</body>
</html>