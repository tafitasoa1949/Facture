@include('template.header')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-50" src="img/facture.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4">Gestion de facture</h1>
                            <a href="{{ url('/listclient') }}" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Faire un facture</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('template.footer')
