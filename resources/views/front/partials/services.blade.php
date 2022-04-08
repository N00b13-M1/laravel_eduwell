<section class="services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>{{ $titles[1]->smallTitle }}</h6>
                    <h4>{{ $titles[1]->bigTitle }}</h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">
                    @foreach ($services as $service)
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('assets/images/' . $service->logo)}}" alt="">
                            </div>
                            <h4>{{ $service->title }}</h4>
                            <p>{{ $service->description }}
                            </p>
                        </div>
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>