@extends('../layouts/admin/app')
@section('title','Dashboard')
@section('content')
    <div class="container">
   <div class="row mt-4">
       <div class="col-lg-12">
           <div class="card">
               <div class="card-header bg-secondary text-center text-white">Daftar Mahasiswa</div>
               <div class="card-body">
                   @if (session('message'))
                       <div class="alert alert-success mt-2" role="alert">
                           {{ session('message') }}
                       </div>
                   @endif
                   <div class="table-responsive-lg">
                       <table class="table">
                           <thead>
                           <tr>
                               <th>#</th>
                               <th>FOTO</th>
                               <th>NAMA</th>
                               <th>OPSI</th>
                           </tr>
                           </thead>
                           <tbody>
                           @foreach($profil as $item)
                               <tr>
                                   <td>{{$loop->iteration}}</td>
                                   <td>
                                       <img src="{{asset('storage/foto-profil/' . $item->foto)}}" height="60">
                                   </td>
                                   <td>{{$item->nama}}</td>
                                   <td>
                                       <a href="{{route('delete-profile', $item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
    </div>
@endsection
