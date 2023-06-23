@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h5>Profile Admin</h5>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                    
                        {{-- <a href="{{route('formadmin')}}"><button class="btn btn-primary"><i class="ri-ball-pen-fill"></i>Tambah Admin</button></a> --}}
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title d-flex justify-content-start">Data Pengguna</h5>
                        </div>
                        <a href="{{route('formadmin')}}" type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i> Tambah Data</a>

                        <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nama.</th>
                          <th scope="col">Email</th>
                          <th scope="col">Aksi</th>

                        </tr>
                      </thead>
                      <tbody>
                          @php
                              $no = 1;
                          @endphp
                          @foreach ($data as $item)
                              <tr>
                                  <td>{{ $no++ }}.</td>
                                  <td>{{ ($item->nama) }}</td>
                                  <td>{{ ($item->email) }}</td>
                                  <td>
                                      <a href="{{ route('editadmin',$item->user_id)}}" class="btn btn-primary">Edit</a>
                                  </td>
                              </tr>
                              
                          @endforeach
                      </tbody>
                      
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection