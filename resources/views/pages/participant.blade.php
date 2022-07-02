@extends('layouts.default')
@section('content')
    @livewire('participants',['reference_id'=>$reference_id])
@endsection
