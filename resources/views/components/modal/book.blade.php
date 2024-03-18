<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Create Book</h4>
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
                                    <form class="form" data-parsley-validate>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mandatory">
                                                    <label for="first-name-column" class="form-label">Title</label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                        placeholder="First Name" name="fname-column"
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column" class="form-label">Author</label>
                                                    <input type="text" id="last-name-column" class="form-control"
                                                        placeholder="Last Name" name="lname-column"
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column" class="form-label">Publisher</label>
                                                    <input type="text" id="city-column" class="form-control"
                                                        placeholder="Custom validation. Value has to be Jakarta."
                                                        name="city-column" data-parsley-restricted-city="Jakarta"
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating" class="form-label">Year of
                                                        Publication</label>
                                                    <input type="text" id="country-floating" class="form-control"
                                                        name="country-floating" placeholder="Country"
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="company-column" class="form-label">Image</label>
                                                    <input type="file" id="company-column" class="form-control"
                                                        name="company-column" placeholder="Company"
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label class="form-label" for="inputGroupSelect01">Category</label>
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupSelect01">Select
                                                        Category</label>
                                                    <select class="form-select" id="inputGroupSelect01">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                    Reset
                                                </button>
                                                <button type="submit" class="btn btn-primary me-1 mb-1">
                                                    Submit
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
