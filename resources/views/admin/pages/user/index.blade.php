@extends('admin.layout')

@section('title')
Users
@endsection

@section('desc')

@endsection

@section('content')
<?php $users = App\User::paginate(15); ?>
@include('admin.parts.userstable')

@endsection