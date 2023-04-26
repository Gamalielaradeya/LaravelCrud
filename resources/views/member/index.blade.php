@extends('template/default')

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
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
@endsection