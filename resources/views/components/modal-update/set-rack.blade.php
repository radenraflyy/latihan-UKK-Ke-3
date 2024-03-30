<div class="modal fade text-left" id="rack" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Set Book to Rack </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body">
                    <label for="title">Title Book</label>
                    <div class="form-group">
                        <input value="" name="rack" id="email" type="text" disabled
                            placeholder="Example: Rak Buku 1" class="form-control">
                    </div>
                    <label for="rack">Set Rack</label>
                    <select name="rack_id" class="form-control">
                        <option hidden>Select Rack</option>
                        <option value="">Rack 21</option>

                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Set Book to Rack</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
