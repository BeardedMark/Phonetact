@extends('layouts.page')
@section('title', $title)
@section('description', $description)

@section('content')
<div class="flex-col-lg font-center">
    <div>
        <p class="font-size-lgr font-color-accent">Связаться по номеру телефона</p>
        <h1>{{$title}}</h1>
    </div>

    @component('pages.components.numpad')
    @endcomponent
</div>
@endsection
