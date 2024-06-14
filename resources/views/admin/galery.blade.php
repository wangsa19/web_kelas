@extends('../layouts/admin/app')
@section('title', 'Gallery')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-secondary text-center text-white">Gallery</div>
                <div class="card-body">
                    @if (session('success_message'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ session('success_message') }}
                    </div>
                    @endif
                    @if (session('error_message'))
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ session('error_message') }}
                    </div>
                    @endif
                    <div class="table-responsive-lg mt-4">
                        <table class="table">
                            <div class="mb-3">
                                <a href="{{ route('admin.gallery.add') }}" class="btn btn-primary">Add Image</a>
                            </div>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Kategori</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($galleries as $gallery)
                                <tr class="gallery-item" data-category="{{ $gallery->category }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('storage/public/gallery/' . $gallery->photo) }}" alt="Photo" width="100"></td>
                                    <td>{{ $gallery->category }}</td>
                                    <td>
                                        <a href="{{ route('admin.gallery.edit', $gallery->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('admin.gallery.delete', $gallery->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
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

@section('scripts')
<script>
    @if(session('success_message'))
    alert("{{ session('success_message') }}");
    @endif

    @if(session('error_message'))
    alert("{{ session('error_message') }}");
    @endif
    
    @if(session('message'))
    alert("{{ session('message') }}");
    @endif
</script>
@endsection
{{--
<!-- Add Modal -->
<!-- <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.gallery.upload') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="modal-header">
    <h5 class="modal-title" id="addModalLabel">Add Image</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="form-group">
        <label for="photo">Photo:</label>
        <input type="file" class="form-control" name="photo" required>
    </div>
    <div class="form-group">
        <label for="category">Category:</label>
        <select class="form-control" name="category" required>
            <option value="LKMM Pra-TD">LKMM Pra-TD</option>
            <option value="LKMM TD">LKMM TD</option>
            <option value="Makrab">Makrab</option>
            <option value="Random">Random</option>
        </select>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Upload</button>
</div>
</form>
</div>
</div>
</div> -->

<!-- Edit Modal -->
<!-- <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST" enctype="multipart/form-data" id="editForm">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="editPhoto">Photo:</label>
                        <input type="file" class="form-control" name="photo" id="editPhoto">
                    </div>
                    <div class="form-group">
                        <label for="editCategory">Category:</label>
                        <select class="form-control" name="category" id="editCategory" required>
                            <option value="LKMM Pra-TD">LKMM Pra-TD</option>
                            <option value="LKMM TD">LKMM TD</option>
                            <option value="Makrab">Makrab</option>
                            <option value="Random">Random</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div> -->

<!-- Success/Failure Modal -->
<!-- <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="messageModalBody">
                @if (session('message'))
                <div>{{ session('message') }}</div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    $('#editModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var category = button.data('category')

        var modal = $(this)
        modal.find('#editCategory').val(category)
        modal.find('#editForm').attr('action', '/admin/gallery/' + id)
    })

    @if(session('message'))
    $('#messageModal').modal('show');
    @endif

    document.querySelectorAll('button[id^="btn-"]').forEach(button => {
        button.addEventListener('click', function() {
            var category = this.id.replace('btn-', '').replace('-', ' ')
            if (category === 'all') {
                document.querySelectorAll('.gallery-item').forEach(item => item.style.display = 'table-row')
            } else {
                document.querySelectorAll('.gallery-item').forEach(item => {
                    if (item.dataset.category === category) {
                        item.style.display = 'table-row'
                    } else {
                        item.style.display = 'none'
                    }
                })
            }
        })
    })
</script> 
@endsection -->
--}}