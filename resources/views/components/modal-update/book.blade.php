<div class="modal fade text-left" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Update Book</h4>
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
                                    <form method="POST" action="#" enctype="multipart/form-data" class="form"
                                        data-parsley-validate>
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mandatory">
                                                    <label for="first-name-column" class="form-label">Title</label>
                                                    <input type="text" id="first-name-column" class="form-control"
                                                        placeholder="title" name="title" value=""
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column" class="form-label">Author</label>
                                                    <input type="text" id="last-name-column" class="form-control"
                                                        placeholder="Auhtor" name="author" value=""
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column" class="form-label">Publisher</label>
                                                    <input type="text" value="" id="city-column"
                                                        class="form-control" placeholder="Publisher" name="publisher" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="year_of_publication" class="form-label">Year of
                                                        Publication</label>
                                                    <input type="date" id="year_of_publication" value=""
                                                        class="form-control" name="year_of_publication"
                                                        placeholder="Year Of Publication"
                                                        data-parsley-required="true" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="image" class="form-label">Image</label>
                                                    <input type="file" id="image" name="image" value=""
                                                        class="form-control" placeholder="Image"
                                                        data-parsley-required="false" />
                                                </div>
                                                <img width="100" height="120" src="" alt="">
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label class="form-label" for="inputGroupSelect01">Category</label>
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupSelect01">Select
                                                        Category</label>
                                                    <select name="category_id" class="form-select"
                                                        id="inputGroupSelect01">
                                                        <option hidden selected value="">
                                                            sasa
                                                        </option>

                                                        <option value="">
                                                            rqack1
                                                        </option>
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
