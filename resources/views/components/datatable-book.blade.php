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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
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
                            @foreach ($data as $item)
                                <tr>
                                    <td align="center">{{ $loop->iteration }}</td>
                                    <td><img width="150" height="170"
                                            src="{{ url('image/books/' . $item->image) }}" alt="Book.."></td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>
                                        {{ $item->publisher . ' | ' . $item->publication }}
                                    </td>
                                    <td>{{ $item->category->name }}</td>
                                    <td align="center">{{ $item->rack ? $item->rack->name : '-' }}</td>
                                    <td>
                                        <div class="d-flex items-center gap-3">
                                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#update{{ $item->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            @include('components.modal-update.book', ['get' => $item])
                                            <form method="POST" action="{{ route('delete.book', $item->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-trash3-fill"></i>
                                                </button>
                                            </form>
                                            @if ($item->rack_id === null)
                                                <button type="submit" class="btn btn-dark" data-bs-toggle="modal"
                                                    data-bs-target="#rack{{ $item->id }}">
                                                    Set Rack
                                                </button>
                                                @include('components.modal-update.set-rack', [
                                                    'get' => $item,
                                                ])
                                            @endif
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
