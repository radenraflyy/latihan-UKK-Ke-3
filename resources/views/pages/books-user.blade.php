@extends('layout.app')

@section('title', 'My Collection')
@section('content')
    <div class="mb-5 p-3">
        <div class="border-3 border-bottom mb-3">
            <h2>Books</h2>
        </div>
        <div class="d-flex flex-wrap gap-3">
            @foreach ($data as $item)
                <div class="border shadow-sm p-3 w-100" style="max-width: 32%">
                    <div class="card-header">
                        <img style="object-fit: cover; height: 300px; width: 100%;"
                            src="{{ url('image/books/' . $item->image) }}" alt="">
                    </div>
                    <div class="card-body mt-2">
                        <h4>{{ $item->title }}</h4>
                        <div class="d-flex items-center justify-content-between">
                            <p class="m-0">{{ $item->publisher . ' | ' . $item->publication }}</p>
                            <p class="m-0 btn btn-outline-secondary" style="cursor: text">{{ $item->category->name }}</p>
                        </div>
                        <div class="mb-2">
                            <a href="/view-detail" class="">12 Comments</a>
                        </div>
                    </div>
                    <div class=" d-flex gap-2 align-items-center card-footer">
                        <button class="btn btn-outline-primary"><a href="/view-detail{{ $item->id }}">View</a></button>
                        @if ($item->borroweds->where('status', 'borrowed')->where('user_id', Auth::user()->id)->count() === 0)
                            <form action="{{ route('borrow.book', $item->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-success">Borrow</button>
                            </form>
                        @endif
                        @foreach ($item->borroweds as $data)
                            @if ($data->id && $data->date_return === null)
                                <form action="{{ route('return.book', $data->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="btn btn-outline-success">Return
                                    </button>
                                </form>
                            @endif
                        @endforeach
                    </div>
                    @if ($item->collections->where('book_id', $item->id)->where('user_id', Auth::user()->id)->isEmpty())
                        <form action="{{ route('add.collection', $item->id) }}" method="post" class="w-100 mt-2">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary w-100">Add Collection</button>
                        </form>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
