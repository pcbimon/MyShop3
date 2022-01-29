@extends('layout')
@section('title', 'Home')
@section('content')
    <div class="row mb-3">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1300x400?text=First+Banner" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1300x400?text=Second+Banner" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1300x400?text=Third+Banner" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">สินค้าใหม่ล่าสุด</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="https://via.placeholder.com/280x180?text=Product" class="card-img-top"
                                    alt="https://via.placeholder.com/180x280?text=Product">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="https://via.placeholder.com/280x180?text=Product" class="card-img-top"
                                    alt="https://via.placeholder.com/180x280?text=Product">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="https://via.placeholder.com/280x180?text=Product" class="card-img-top"
                                    alt="https://via.placeholder.com/180x280?text=Product">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="https://via.placeholder.com/280x180?text=Product" class="card-img-top"
                                    alt="https://via.placeholder.com/180x280?text=Product">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="https://via.placeholder.com/280x180?text=Product" class="card-img-top"
                                    alt="https://via.placeholder.com/180x280?text=Product">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="https://via.placeholder.com/280x180?text=Product" class="card-img-top"
                                    alt="https://via.placeholder.com/180x280?text=Product">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="https://via.placeholder.com/280x180?text=Product" class="card-img-top"
                                    alt="https://via.placeholder.com/180x280?text=Product">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Last item --}}
                        <div class="col-md-3 mb-3">
                            <div class="card h-100">
                                <div class="row align-items-center h-100">
                                    <div class="col-6 mx-auto">
                                        <a href="{{ route('product.index') }}" class="stretched-link">
                                            <h3 class="align-self-center text-center">
                                                <label>More <i class="fas fa-angle-double-right"></i></label>
                                            </h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
