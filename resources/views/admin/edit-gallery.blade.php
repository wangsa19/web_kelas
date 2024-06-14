@extends('../layouts/admin/app')
@section('title', 'Edit Foto')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-header bg-secondary text-center text-white">Edit Image</div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo:</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                            @if ($gallery->photo)
                            <input type="hidden" name="current_photo" value="{{ $gallery->photo }}">
                            <p>Current Photo:</p>
                            <img src="{{ asset('storage/public/gallery/' . $gallery->photo) }}" alt="Current Photo" style="max-width: 200px;">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category:</label>
                            <select class="form-control" id="category" name="category" required>
                                <option value="LKMM Pra-TD" {{ $gallery->category == 'LKMM Pra-TD' ? 'selected' : '' }}>LKMM Pra-TD</option>
                                <option value="LKMM TD" {{ $gallery->category == 'LKMM TD' ? 'selected' : '' }}>LKMM TD</option>
                                <option value="Makrab" {{ $gallery->category == 'Makrab' ? 'selected' : '' }}>Makrab</option>
                                <option value="Random" {{ $gallery->category == 'Random' ? 'selected' : '' }}>Random</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection