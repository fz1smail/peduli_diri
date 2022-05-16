@extends('layouts.master')

@section('title', 'Catatan Perjalanan')

@section('title-nav', 'Catatan Perjalanan')

@section('content')
<form method="get" action="" class="form-inline mr-auto">
    <label style="padding-left: 50px" for=""> Cari Data :</label>
    <div class="search-element" style="padding-left: 10px">
      <input value="{{ $search }}" class="form-control" name="search" type="search" placeholder="Search" aria-label="Search" data-width="250" style="width: 250px;">
      <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
      <div class="search-backdrop"></div>
    </div>
  </form>
{{-- <div class="pb-5">
    <div class="row">
        <h5>Cari Data  </h5>
        <div class="col-3" style="padding-right: 30px">
            <form action="/cari" method="get">
                <div class="row-3">
                    <input type="search" name="cari" class="form-control" placeholder="Cari">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary"> Cari </button>
                    </span>
                </div>
            </form>
        </div>
    </div>


        <div class="row">
            <form class="form-inline" method="GET" action="/urutkan">
            <h5 class="mt-2">Urutkan Berdasarkan</h5>
            <select onchange="sortByCheck(this);" name="orderBy" id="orderBy" class="form-control form-select mx-3">
                <option value="tanggal" >Tanggal</option>
                <option value="waktu" >Waktu</option>
                <option value="lokasi" >Lokasi</option>
                <option value="suhu" >Suhu</option>
            </select>
            <select name="sortBy" id="sortBy" class="form-control form-select mx-3">
                <option value="asc" id="sortByAsc">Asc</option>
                <option value="desc" id="sortByDesc">Desc</option>
            </select>
            <button  class="btn btn-primary">
                Cari
                <i class="fas fa-search pl-2"></i>
            </button>
        </form>
        
        </div>





</div> --}}
    <div class="card">
        <div class="card-body">
            @include('layouts.tablePerjalanan')
        </div>
    </div>


    {{-- {{ $data->onEachSide(1)->links() }} --}}
    {!! $data->appends(Request::except('page'))->render() !!}

    {{-- <nav class="d-inline-block">
        <ul class="pagination mb-0">
          <li class="page-item disabled">
            <a class="page-link" href="catatanPerjalanan?page=1" tabindex="1"><i class="fas fa-chevron-left"></i></a>
          </li>
          <li class="page-item"><a class="page-link" href="catatanPerjalanan?page=1">1 <span class="sr-only">(current)</span></a></li>
          <li class="page-item">
            <a class="page-link" href="catatanPerjalanan?page=2">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="catatanPerjalanan?page=3"><i class="fas fa-chevron-right"></i></a>
          </li>
        </ul>
      </nav> --}}

    
@endsection


