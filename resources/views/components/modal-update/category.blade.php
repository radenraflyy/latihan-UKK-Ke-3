<div class="modal fade text-left" id="update{{ $get->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Update Category</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>

            <form method="POST" action="{{ route('update.category', $get->id) }}">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <label for="category">Name Category</label>
                    <div class="form-group">
                        <input name="name" id="category" type="text" placeholder="Category"
                            value="{{ $get->name }}" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Update Category</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
