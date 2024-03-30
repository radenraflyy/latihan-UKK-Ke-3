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
                        Table Borrowed
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Book</th>
                                <th>Borrow Date</th>
                                <th>Return Date</th>
                                <th>Status</th>
                                @if (Auth::guest())
                                    <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Raden Rafly Pradana Kusumah</td>
                                <td>17-03-2024</td>
                                <td>20-03-2024</td>
                                <td>Returned</td>
                                <td>Rp. 0</td>
                                <td>
                                    <div class="d-flex items-center gap-3">
                                        <form action="" method="post">
                                            @csrf
                                            @method('PATCH')

                                            <button @disabled(true) class="btn btn-primary"
                                                data-toggle="tooltip" data-placement="top" title="Returned">
                                                <i class="bi bi-box-arrow-up-right"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ORIDENT</td>
                                <td>12-03-2024</td>
                                <td>17-03-2024</td>
                                <td>Borrowed</td>
                                <td>Rp. 10.000</td>
                                <td>
                                    <div class="d-flex items-center gap-3">
                                        <form action="" method="post">
                                            @csrf
                                            @method('PATCH')

                                            <button @disabled(false) class="btn btn-primary"
                                                data-toggle="tooltip" data-placement="top" title="Returned">
                                                <i class="bi bi-box-arrow-up-right"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
