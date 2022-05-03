<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>{{ $titles[4]->smallTitle }}</h6>
                    <h4>{{ $titles[4]->bigTitle }}</em></h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
                    @foreach ($testimonials as $item)
                        @if ($item->confirmed == 1)
                            <div class="item">
                                <p>{{ $item->testimonial }}</p>
                                <h4>{{ $item->name }}</h4>
                                <span>{{  $item->position }}</span>
                                <img src="{{ asset('assets/images/quote.png') }}" alt="">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>