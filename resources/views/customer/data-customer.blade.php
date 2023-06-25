@extends('layouts.main')

@section('content')
<nav>
    <h4>Data Customer</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Data Customer</li>
    </ol>
</nav>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">NIK</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">No HP</th>
                          <th scope="col">Jenis Identitas</th>
                          <th scope="col">Foto Identitas</th>
                          <th scope="col">Foto Bersama Identitas</th>
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
                                  <td>{{ ($item->nik) }}</td>
                                  <td>{{ ($item->nama) }}</td>
                                  <td>{{ ($item->alamat) }}</td>
                                  <td>{{ ($item->nohp) }}</td>
                                  <td>{{ ($item->jenisid) }}</td>
                                  <td>
                                  <img src="{{ asset('storage/images/'.$item->fotoid) }}" alt="Foto Identitas" width="100" height="50"></td>
                                  <td>
                                  <img src="{{ asset('storage/images/'.$item->fotobersamaid) }}" alt="Foto Bersama Identitas" width="100" height="50"></td>
                                  
                                   
                                        <td>
                                             <!-- <button class="btn btn-danger" type="button"
                                                data-url="{{route('destroy', [$item->nik])}}"><span
                                                    class="fa fa-trash"></span></button> -->

                                         <!-- <form action="{{ route('destroy', $item->nik) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <div>
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return 
                                            confirm('Apakah Anda yakin ingin menghapus paket ini?')">Hapus</button>
                                        </div>
                                    </form> -->

                                    <!-- <form method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')" action="{{ route('destroy', $item->nik) }}">
                                        @csrf
                                        <input type="hidden" value="DELETE" name="_method">
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                    </form> -->
                                    <form action="{{ route('destroy', $item->nik) }}" method="post"
                                        onsubmit="return confirm('Yakin akan menghapus data ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" class="btn btn-danger bi bi-trash mx-1"></button>
                                    </form>
                                    {{-- <a href="" class="btn btn-danger bi bi-trash mx-1"></a> --}}

                                                    <!-- <form method="GET" class="d-inline" onsubmit="return confirm('Apakah Anda Yakin Menghapus Data?')" action="{{route('destroy', [$item->nik])}}">
                                                        @csrf
                                                        <input type="hidden" value="DELETE" name="_method">
                                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                                    </form> -->

                                                    <!-- <a href="/destroy/{{$item->nik}}" 
                                                    onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" 
                                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> -->

                                                    
                                            
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