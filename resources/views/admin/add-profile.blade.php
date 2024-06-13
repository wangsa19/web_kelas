@extends('../layouts/admin/app')
@section('title','Add-Profile')
@section('content')

    <div class="container">
        <div class="row mt-5 mx-auto">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header bg-secondary text-center text-white">Add Profile</div>
                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success mt-2" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger mt-2">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('store-profile')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-2">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="mt-2">
                                <label class="form-label">Kata-kata</label>
                                <input type="text" name="kata" class="form-control">
                            </div>
                            <div class="mt-2">
                                <label class="form-label">Foto</label>
                                <input type="file" name="foto" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-success btn-sm mt-3" value="Tambah">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
