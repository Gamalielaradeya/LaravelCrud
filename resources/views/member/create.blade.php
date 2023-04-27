@extends('template/default')

@php
    $title = "Data Jemaat";
    $preTitle= "Tambah Data"
@endphp


@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('member/store')}}" class="" method="post">
            @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat">
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="phone_number" placeholder="Masukan No Telepon">
        </div>

        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">

        </div>
        </form>
    </div>
</div>
@endsection