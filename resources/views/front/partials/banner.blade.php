<!-- ***** Main Banner Area Start ***** -->
<section class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="header-text">
                    <h6>{{ $titles[0]->smallTitle }}</h6>
                    <h2>{{ $titles[0]->bigTitle }}</h2>
                    <div class="main-button-gradient">
                        <div class="scroll-to-section"><a href="#contact-section">{{ $titles[0]->buttontext }}</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-image">
                    <img src="{{ asset('assets/images/' . $titles[0]->img) }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->
