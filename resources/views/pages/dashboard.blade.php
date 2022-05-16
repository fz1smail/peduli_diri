@extends('layouts.master')

@section('title', 'Dashboard')

@section('title-nav', 'Dashboard')

@section('content')
<div class="pb-5">
    <div class="card">
        <div class="card-body" style="padding-bottom: 350px">
            Selamat datang {{ Auth::user()->username }} di aplikasi peduli diri
        </div>
    </div>
    <div class="col-2"  style="padding-left: 900px">
        <a href="/inputPerjalanan" class="btn btn-primary">
            Isi Catatan Perjalanan
        </a>
    </div>

@endsection


