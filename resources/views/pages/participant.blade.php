@extends('layouts.default')
@section('content')
    @livewire('participants',['idTerm'=>$idTerm])
@endsection
