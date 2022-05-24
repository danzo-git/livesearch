@extends(backpack_view('blank'))


@section('content')
@php
$posts= count(\DB::table("posts")->get());
    $widgets['d-flex'][] =[
    'type'        => 'progress',
    'class'       => 'card text-white bg-primary mb-2',
    'value'       => $posts,
    'description' => 'Registered users.',
    'progress'    => $posts, // integer
    'hint'        => '8544 more until next milestone.',
];

$widgets['before_content'][] =[
    'type'        => 'progress',
    'class'       => 'card text-white bg-primary mb-2',
    'value'       => $posts,
    'description' => 'Registered users.',
    'progress'    => $posts, // integer
    'hint'        => '8544 more until next milestone.',
];
@endphp

@endsection