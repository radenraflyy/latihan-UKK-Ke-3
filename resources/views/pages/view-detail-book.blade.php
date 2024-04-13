@extends('layout.app')

@section('title', 'My Collection')
@section('content')
    <style>
        input[type="checkbox"] {
            display: none;
        }

        label {
            font-size: 25px;
            cursor: pointer;
        }

        input[type="checkbox"]:checked+label {
            color: yellow;
        }
    </style>
    <div class="mb-5 p-3">
        <div class="border-3 border-bottom mb-3">
            <h2>View Detail</h2>
        </div>
        <div class="d-flex flex-wrap gap-3 mb-4">
            <div class="border shadow-sm p-3 w-100">
                <div class="card-header">
                    <img style="object-fit: cover; height: 300px; width: 100%;" src="{{ url('image/books/' . $data->image) }}"
                        alt="">
                </div>
                <div class="card-body mt-2">
                    <h2>{{ $data->title }}</h2>
                    <h5>{{ $data->author }}</h5>
                    <p>{{ $data->publisher . ' | ' . $data->publication }}</p>
                </div>
                <div class="card-footer d-flex gap-2">
                    @if ($data->collections->where('book_id', $data->id)->where('user_id', Auth::user()->id)->isEmpty())
                        <form action="{{ route('add.collection', $data->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary">Add Collection</button>
                        </form>
                    @endif
                    @if ($data->borroweds->where('status', 'borrowed')->where('user_id', Auth::user()->id)->count() === 0)
                        <form action="{{ route('borrow.book', $data->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-outline-success">Borrow</button>
                        </form>
                    @endif
                    @foreach ($data->borroweds as $item)
                        @if ($item->id && $item->date_return === null)
                            <form action="{{ route('return.book', $item->id) }}" method="post">
                                @csrf
                                @method('patch')
                                <button type="submit" class="btn btn-outline-success">Return
                                </button>
                            </form>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        @if ($data->borroweds->where('status', 'borrowed')->where('user_id', Auth::user()->id)->count() === 1)
            <div class="card p-3 w-100 mb-4">
                <form action="{{ route('add.review', $data->id) }}" method="post">
                    @csrf
                    <div>
                        <h4>Comment</h4>
                    </div>
                    <textarea name="review" class="form-control" style="width: 100%; height: 100px;"></textarea>
                    <div class="mt-3">
                        <h5>Rating</h5>
                    </div>
                    <div class="d-flex items-center gap-2">
                        <input id="star1" name="rating" value="1" type="checkbox">
                        <label for="star1"><i class="bi bi-star-fill"></i></label>

                        <input id="star2" name="rating" value="2" type="checkbox">
                        <label for="star2"><i class="bi bi-star-fill"></i></label>

                        <input id="star3" name="rating" value="3" type="checkbox">
                        <label for="star3"><i class="bi bi-star-fill"></i></label>

                        <input id="star4" name="rating" value="4" type="checkbox">
                        <label for="star4"><i class="bi bi-star-fill"></i></label>

                        <input id="star5" name="rating" value="5" type="checkbox">
                        <label for="star5"><i class="bi bi-star-fill"></i></label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-2">Send</button>
                </form>
            </div>
        @endif
        <div class="card p-3 overflow-auto shadow-sm">
            <div class="mb-4">
                <h2>Review</h2>
            </div>
            <div class="d-flex flex-column gap-3">
                @if ($list_review->count() > 0)
                    @foreach ($list_review as $item)
                        <div class="body p-3 border w-full">
                            <h5 class="m-0 border-2 border-bottom" style="color: black; font-weight: 600;">
                                {{ $item->user->username }}</h5>
                            <p class="m-0 mt-3 text-xl">{{ $item->review }}</p>
                            <div class="d-flex items-center">
                                @for ($i = 0; $i < $item->rating; $i++)
                                    <i class="bi bi-star-fill"
                                        style="color: yellow; font-size: 25px; margin-right: 15px; margin-top: 0px; margin-bottom: 10px;"></i>
                                @endfor
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="font-bold text-center">Not Yet Review For this book {{ $data->title }}</p>
                @endif
            </div>

        </div>
    </div>
    </div>
    @include('sweetalert::alert')
@endsection
