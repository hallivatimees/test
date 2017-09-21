@extends('layouts.app')

@section('title','Page title')

@section('sidebar')
    @parent
    
    <p>See on sidebar lisa</p>
@endsection

@section('content')
    <p>siia tuleb sisu</p>
    <p>Aaaaaaaarghhhhhhh</p>
@endsection

@component('alert')
     @slot('title')
         Keelatud
     @endslot
    Puudub juurdepääs 
@endcomponent