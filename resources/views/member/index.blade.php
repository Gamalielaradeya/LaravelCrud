@extends('template/default')

@php
    $title = "Data Jemaat";
    $preTitle= "View"
@endphp


@push('page-action')
    <a href="{{ route('member/create')}}" class="btn btn-primary">Tambah Data</a>
@endpush

@section('content')
<div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>No Telepon</th>
                          <th>Tanggal Lahir</th>
                          <th>Bulan Lahir</th>
                          <th>Tahun Lahir</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($members as $member)
                        <tr>
                          <td>{{ $member -> nama}}</td>
                          <td>{{ $member -> alamat}}</td>
                          <td>{{ $member -> phone_number}}</td>
                          <td>{{ $member -> tanggal_lahir}}</td>
                          <td>{{ $member -> bulan_lahir}}</td>
                          <td>{{ $member -> tahun_lahir}}</td>
                          <td>
                            <a href="{{ route('member/edit', $member->id) }}">Edit</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
@endsection