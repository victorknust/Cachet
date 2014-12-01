@extends('layout.master')

@section('content')
    <div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>

    @if(Auth::check())
    <a class="pull-right" href="/auth/logout">Logout</a>
    <p>You're logged in. This will be a link to the Dashboard.</p>
    @endif

    @include('partials.components')

    @if(Setting::get('display_graphs'))
    @include('partials.graphs')
    @endif

    @for($i=0; $i <= 7; $i++)
    @include('partials.incident', array('i', $i))
    @endfor

    @include('partials.support-link')
@stop
