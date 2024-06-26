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
                        <form method="POST" action="{{ route('export.users') }}">
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
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->fullname }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->role->name }}</td>
                                    <td>
                                        <div class="d-flex items-center gap-3">
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#update{{ $item->id }}" class="btn btn-success">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            @include('components.modal-update.user', ['get' => $item])
                                            <form action="{{ route('delete.users', $item->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-trash3-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
