@extends('../layouts/admin/app')
@section('title', 'Add Foto')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-header bg-secondary text-center text-white">Add Image</div>
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
                    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo:</label>
                            <input type="file" class="form-control" id="photo" name="photo" required>
                        </div>
                        <div class="mb-3">
                            <img id="imagePreview" src="" alt="Image Preview" style="display:none; width:100px;" />
                        </div>
                        <div class="mb-3">
                            <button type="button" id="cancelButton" class="btn btn-danger" style="display:none;">Cancel</button>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category:</label>
                            <select class="form-control" id="category" name="category" required>
                                <option value="">--Pilih Kategori--</option>
                                <option value="LKMM Pra-TD">LKMM Pra-TD</option>
                                <option value="LKMM TD">LKMM TD</option>
                                <option value="Makrab">Makrab</option>
                                <option value="Random">Random</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage() {
        const fileInput = document.getElementById('photo');
        const preview = document.getElementById('imagePreview');
        const cancelButton = document.getElementById('cancelButton');

        const file = fileInput.files[0];
        const reader = new FileReader();

        reader.addEventListener('load', function() {
            preview.src = reader.result;
            preview.style.display = 'block';
            cancelButton.style.display = 'inline-block';
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    document.getElementById('cancelButton').addEventListener('click', function() {
        const preview = document.getElementById('imagePreview');
        const cancelButton = document.getElementById('cancelButton');
        const fileInput = document.getElementById('photo');

        preview.src = '';
        preview.style.display = 'none';
        cancelButton.style.display = 'none';
        fileInput.value = '';

        fileInput.type = 'text';
        fileInput.type = 'file';
    });
</script>

@endsection