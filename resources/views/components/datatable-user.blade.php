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
                        Table User Data
                    </h5>
                    <div class="d-flex gap-2">
                        <form method="GET" action="">
                            @csrf
                            <button type="submit" class="btn btn-success">
                                Export
                            </button>
                        </form>
                        <form method="GET" action="">
                            @csrf
                            <button type="submit" class="btn btn-light-dark">
                                Print
                            </button>
                        </form>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#inlineForm">
                            Add User
                        </button>
                    </div>
                </div>
                @include('components.modal.user')
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>fullname</th>
                                <th>address</th>
                                <th>email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>radenraflyy</td>
                                <td>Raden Rafly Pradana Kusumah</td>
                                <td>Cipayung Bogor</td>
                                <td>radenchaik@gmail.com</td>
                                <td>Admin</td>
                                <td>
                                    <div class="d-flex items-center gap-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#update"
                                            class="btn btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        @include('components.modal-update.user')
                                        <button type="submit" class="btn btn-danger">
                                            <a class="text-white" href="">
                                                <i class="bi bi-trash3-fill"></i>
                                            </a>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>orident</td>
                                <td>ORIDENT</td>
                                <td>Cipayung Datar</td>
                                <td>orident@gmail.com</td>
                                <td>Staff</td>
                                <td>
                                    <div class="d-flex items-center gap-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#update"
                                            class="btn btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        @include('components.modal-update.user')
                                        <button type="submit" class="btn btn-danger">
                                            <a class="text-white" href="">
                                                <i class="bi bi-trash3-fill"></i>
                                            </a>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Rest</td>
                                <td>ORIDENRestdsa</td>
                                <td>Bogor</td>
                                <td>raflyrst@gmail.com</td>
                                <td>User</td>
                                <td>
                                    <div class="d-flex items-center gap-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#update"
                                            class="btn btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        @include('components.modal-update.user')
                                        <button type="submit" class="btn btn-danger">
                                            <a class="text-white" href="">
                                                <i class="bi bi-trash3-fill"></i>
                                            </a>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
