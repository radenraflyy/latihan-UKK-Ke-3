@extends('layout.app')

@section('title', 'My Collection')
@section('content')
    <div class="mb-5 p-3">
        <div class="border-3 border-bottom mb-3">
            <h2>Books</h2>
        </div>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
            <div class="border shadow-sm p-3" style="max-width: 32%">
                <div class="card-header">
                    <img style="object-fit: cover; height: 300px; width: 100%;" src="./assets/compiled/jpg/banana.jpg"
                        alt="">
                </div>
                <div class="card-body mt-2">
                    <h2>Tere Liye</h2>
                    <div class="d-flex items-center justify-content-between">
                        <p class="m-0">Gramedia - 2024</p>
                        <p class="m-0 btn btn-outline-secondary" style="cursor: text">Drama</p>
                    </div>
                    <div class="mb-2">
                        <a href="/view-detail" class="">12 Comments</a>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-primary"><a href="/view-detail">View</a></button>
                    <button class="btn btn-outline-secondary">Add Collection</button>
                    <button class="btn btn-outline-success">Borrow</button>
                </div>
            </div>
            <div class="border shadow-sm p-3" style="max-width: 32%">
                <div class="card-header">
                    <img style="object-fit: cover; height: 300px; width: 100%;" src="./assets/compiled/jpg/banana.jpg"
                        alt="">
                </div>
                <div class="card-body mt-2">
                    <h2>Tere Liye</h2>
                    <div class="d-flex items-center justify-content-between">
                        <p class="m-0">Gramedia - 2024</p>
                        <p class="m-0 btn btn-outline-secondary" style="cursor: text">Drama</p>
                    </div>
                    <div class="mb-2">
                        <a href="/view-detail" class="">12 Comments</a>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-primary"><a href="/view-detail">View</a></button>
                    <button class="btn btn-outline-secondary">Add Collection</button>
                    <button class="btn btn-outline-success">Borrow</button>
                </div>
            </div>
            <div class="border shadow-sm p-3" style="max-width: 32%">
                <div class="card-header">
                    <img style="object-fit: cover; height: 300px; width: 100%;" src="./assets/compiled/jpg/banana.jpg"
                        alt="">
                </div>
                <div class="card-body mt-2">
                    <h2>Tere Liye</h2>
                    <div class="d-flex items-center justify-content-between">
                        <p class="m-0">Gramedia - 2024</p>
                        <p class="m-0 btn btn-outline-secondary" style="cursor: text">Drama</p>
                    </div>
                    <div class="mb-2">
                        <a href="/view-detail" class="">12 Comments</a>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-primary"><a href="/view-detail">View</a></button>
                    <button class="btn btn-outline-secondary">Add Collection</button>
                    <button class="btn btn-outline-success">Borrow</button>
                </div>
            </div>
        </div>
    </div>
@endsection
