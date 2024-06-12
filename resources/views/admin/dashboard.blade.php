@extends('../layouts/admin/app')
@section('title','Dashboard')
@section('content')
    <div class="container">
   <div class="row mt-4">
       <div class="col-lg-12">
           <div class="card">
               <div class="card-header bg-secondary text-center text-white">Daftar Mahasiswa</div>
               <div class="card-body">
                   <div class="table-responsive-lg">
                       <table class="table">
                           <thead>
                           <tr>
                               <th>#</th>
                               <th>FOTO</th>
                               <th>NRP</th>
                               <th>NAMA</th>
                               <th>OPSI</th>
                           </tr>
                           </thead>
                           <tbody>
                           <tr>
                               <td>1</td>
                               <td>
                                   <img src="image/komting.jpg" height="60">
                               </td>
                               <td>3123500014</td>
                               <td>Arva Zaki</td>
                               <td>
                                   <a href="" class="btn btn-warning btn-sm">Edit</a>
                                   <a href="" class="btn btn-danger btn-sm">Delete</a>
                               </td>
                           </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>
    </div>
@endsection
