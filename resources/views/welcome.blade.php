@extends('layout')


@section('title')

Home page

@endsection

@section('content')

<p>section which is in layout - yield('content'), and it is before the navigation section </p>

<?php /*

this is normal way to do it in plain php without blades

<div>
    <ul>
        <?php foreach ($tasks as $task) : ?>
        <li> <?= $task; ?> </li>
        <?php endforeach; ?>
    </ul>
</div>

~down - with blades
*/ ?>


<div>
    <ul>
        @foreach ($tasks as $task) 
        <li> <?= $task; ?> </li>
        @endforeach
    </ul>
</div>

<p> my {{ $foo }} website</p>




    
@endsection  
