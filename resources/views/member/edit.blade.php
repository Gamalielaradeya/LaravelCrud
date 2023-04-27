@extends('template/default')

@php
    $title = "Data Jemaat";
    $preTitle= "Edit Data Jemaat"
@endphp

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('member/update', $member->id)}}" class="" method="post">
            @csrf
            @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="{{ $member->nama }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" value="{{ $member->alamat }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="phone_number" placeholder="Masukan No Telepon" value="{{ $member->phone_number }}">
        </div>

        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">

        </div>
        </form>
    </div>
</div>
@endsection