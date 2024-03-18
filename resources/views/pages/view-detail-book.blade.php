@extends('layout.app')

@section('title', 'My Collection')
@section('content')
    <div class="mb-5 p-3">
        <div class="border-3 border-bottom mb-3">
            <h2>View Detail</h2>
        </div>
        <div class="d-flex flex-wrap gap-3">
            <div class="border shadow-sm p-3">
                <div class="card-header">
                    <img style="object-fit: cover; height: 300px; width: 100%;" src="./assets/compiled/jpg/banana.jpg"
                        alt="">
                </div>
                <div class="card-body mt-2">
                    <h2>Tere Liye</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, eos cumque veritatis laborum placeat
                        delectus iste debitis dolorum porro tenetur eum ab praesentium assumenda, esse illum repudiandae.
                        Architecto, fugit est!</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-primary">View</button>
                    <button class="btn btn-outline-secondary">Add Collection</button>
                    <button class="btn btn-outline-success">Borrow</button>
                </div>
            </div>
            <div class="card p-3 overflow-auto shadow-sm">
                <div class="mb-4">
                    <h2>Review</h2>
                </div>
                <div class="d-flex flex-column gap-3">
                    <div class="body p-3 border w-full">
                        <h5 class="m-0 border-2 border-bottom" style="color: black; font-weight: 600;">ORI</h5>
                        <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eum unde
                            repellendus
                            repudiandae
                            voluptatem non eos minus excepturi. Iusto tempore, ad eum in iure blanditiis minima omnis quos.
                            Corporis, commodi.</p>
                        <div class="d-flex items-center">
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                        </div>
                    </div>
                    <div class="body p-3 border w-full">
                        <h5 class="m-0 border-2 border-bottom" style="color: black; font-weight: 600;">ORI</h5>
                        <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eum unde
                            repellendus
                            repudiandae
                            voluptatem non eos minus excepturi. Iusto tempore, ad eum in iure blanditiis minima omnis quos.
                            Corporis, commodi.</p>
                        <div class="d-flex items-center">
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                        </div>
                    </div>
                    <div class="body p-3 border w-full">
                        <h5 class="m-0 border-2 border-bottom" style="color: black; font-weight: 600;">ORI</h5>
                        <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eum unde
                            repellendus
                            repudiandae
                            voluptatem non eos minus excepturi. Iusto tempore, ad eum in iure blanditiis minima omnis quos.
                            Corporis, commodi.</p>
                        <div class="d-flex items-center">
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                            <i class="bi bi-star-fill" style="color: yellow;"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
