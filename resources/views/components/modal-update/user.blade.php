<div class="modal fade text-left" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Update User</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form method="POST" action="" class="form" data-parsley-validate>
                                        @csrf
                                        @method('PATCH')
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mandatory">
                                                    <label for="first-name-column" class="form-label">Username</label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                        value="" placeholder="username" name="username"
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column" class="form-label">FullName</label>
                                                    <input type="text" id="last-name-column" class="form-control"
                                                        value="" placeholder="Full Name" name="fullname"
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column" class="form-label">Address</label>
                                                    <input type="text" id="city-column" class="form-control"
                                                        value="" placeholder="Jl.Raya" name="address"
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label class="form-label" for="inputGroupSelect01">Role</label>
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupSelect01">Select
                                                        Role</label>
                                                    <select class="form-select" id="inputGroupSelect01" name="role_id">
                                                        <option selected value" hidden>
                                                            admin
                                                        </option>
                                                        <option value="1">admin</option>
                                                        <option value="2">staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating" class="form-label">Email</label>
                                                    <input type="text" id="country-floating" class="form-control"
                                                        value="" name="email" placeholder="example@gmail.com"
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating" class="form-label">Password</label>
                                                    <input type="text" id="country-floating" class="form-control"
                                                        value="" name="password" placeholder="***"
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                    Reset
                                                </button>
                                                <button type="submit" class="btn btn-primary me-1 mb-1">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
