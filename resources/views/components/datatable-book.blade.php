    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>@yield('title')</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header d-flex items-center justify-content-between">
                    <h5 class="card-title">
                        Table Book
                    </h5>
                    {{-- @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
                        Create
                    </button>
                </div>
                @include('components.modal.book')
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Publish</th>
                                <th>Category</th>
                                <th>Rack</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">1</td>
                                <td><img width="150" height="170" src="#"
                                        alt="Book.."></td>
                                <td>{{ "tere" }}</td>
                                <td>{{ "test" }}</td>
                                <td>
                                    {{ "gramedia | 2070 " }}
                                </td>
                                <td>fisils</td>
                                <td align="center">rack 121</td>
                                <td>
                                    <div class="d-flex items-center gap-3">
                                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#update">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        @include('components.modal-update.book')
                                        <form method="POST" action="#">
                                            <button type="submit" class="btn btn-danger">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </form>
                                        <button type="submit" class="btn btn-dark" data-bs-toggle="modal"
                                            data-bs-target="#rack">
                                            Set Rack
                                        </button>
                                        @include('components.modal-update.set-rack')
                                    </div>
                </div>
                </td>
                </tr>
                </tbody>
                </table>
            </div>
    </div>

    </section>
    </div>
