@extends('site.componente.template')


@section('content')

    <!--esta adicionado atraves de um component, no template-->
    <section class="section about-me" data-section="section1">

        <div class="container">
            <div class="top-header">
                <img src="assets/images/aerobic-girls.jpg" alt="aerobic girls" />
            </div>
            <div class="section-heading">

                <h2>{{ $conteudo_inicio->titulo }}</h2>
                <div class="line-dec"></div>
                <span>{{ $conteudo_inicio->conteudo }}</span>
            </div>
            @auth

                <div class="white-button">
                    <a href="{{ route('site.dashboard') }}">Editar</a>
                </div>
            @endauth
    </section>

    <section class="section my-services" data-section="section2">
        <div class="container">
            <div class="section-heading">
                <h2>Greatest Features</h2>
                <div class="line-dec"></div>
                <span>Praesent posuere fringilla elit, non maximus tellus posuere nec. Nunc eu sapien nec est elementum
                    sodales.</span>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="service-item">
                        <i></i>
                        <h4>Top Performance</h4>
                        <p>Donec sit amet tempor quam. Maecenas nec aliquam leo, sed tincidunt urna.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item">
                        <i class="fa fa-check-square-o"></i>
                        <h4>Trusted Service</h4>
                        <p>Etiam at porta nulla, et euismod enim. Nullam semper ipsum et dui scelerisque.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item">
                        <i class="fa fa-question-circle"></i>
                        <h4>Need Help?</h4>
                        <p>Phasellus orci leo, elementum ac risus id, euismod porta lorem. Quisque feugiat.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item">
                        <i class="fa fa-support"></i>
                        <h4>Quick Support</h4>
                        <p>Mauris eu est vitae erat condimentum pellentesque. Fusce vehicula nunc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section my-work" data-section="section3">
        <div class="container">
            <div class="section-heading">
                <h2>Gallery</h2>
                <div class="line-dec"></div>
                <span>Donec sit amet enim tempor nisl fermentum aliquam. In consectetur sapien eu nisi venenatis lobortis.
                    Sed ullamcorper tristique elit nec facilisis.</span>
            </div>
            <div class="row">
                <div class="isotope-wrapper">
                    <form class="isotope-toolbar">
                        <label><input type="radio" data-type="*" checked="" name="isotope-filter" />
                            <span>all</span></label>
                        <label><input type="radio" data-type="pretty" name="isotope-filter" />
                            <span>pretty</span></label>
                        <label><input type="radio" data-type="sexy" name="isotope-filter" />
                            <span>sexy</span></label>
                        <label><input type="radio" data-type="beach" name="isotope-filter" />
                            <span>beach</span></label>
                    </form>
                    <div class="isotope-box">
                        <div class="isotope-item" data-type="beach">
                            <figure class="snip1321">
                                <img src="assets/images/woman-beach.jpg" alt="woman at the beach" />
                                <figcaption>
                                    <a href="assets/images/woman-beach.jpg" data-lightbox="image-1" data-title="Caption"><i
                                            class="fa fa-search"></i></a>
                                    <h4>Girl One</h4>
                                    <span>woman at the beach</span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="isotope-item" data-type="sexy">
                            <figure class="snip1321">
                                <img src="assets/images/woman-chair-sunshine.jpg" alt="sq-sample26" />
                                <figcaption>
                                    <a href="assets/images/woman-chair-sunshine.jpg" data-lightbox="image-1"
                                        data-title="Sunshine Woman"><i class="fa fa-search"></i></a>
                                    <h4>Sexy Lady</h4>
                                    <span>there you go sexy girl</span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="isotope-item" data-type="pretty">
                            <figure class="snip1321">
                                <img src="assets/images/woman-pretty.jpg" alt="Pretty Girl" />
                                <figcaption>
                                    <a href="assets/images/woman-pretty.jpg" data-lightbox="image-1"
                                        data-title="Pretty Girl"><i class="fa fa-search"></i></a>
                                    <h4>Pretty Girl</h4>
                                    <span>red flowers white girl</span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="isotope-item" data-type="pretty">
                            <figure class="snip1321">
                                <img src="assets/images/escalator-blue.jpg" alt="Escalator Blue" />
                                <figcaption>
                                    <a href="assets/images/escalator-blue.jpg" data-lightbox="image-1"
                                        data-title="Escalator Blue"><i class="fa fa-search"></i></a>
                                    <h4>Escalator Up</h4>
                                    <span>Blue architecture building</span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="isotope-item" data-type="beach">
                            <figure class="snip1321">
                                <img src="assets/images/woman-feeling.jpg" alt="woman feeling" />
                                <figcaption>
                                    <a href="assets/images/woman-feeling.jpg" data-lightbox="image-1"
                                        data-title="Her Feeling"><i class="fa fa-search"></i></a>
                                    <h4>Her Feeling</h4>
                                    <span>Ut sollicitudin risus</span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="isotope-item" data-type="sexy">
                            <figure class="snip1321">
                                <img src="assets/images/woman-bikini.jpg" alt="Bikini Girl" />
                                <figcaption>
                                    <a href="assets/images/woman-bikini.jpg" data-lightbox="image-1"
                                        data-title="Sexy Bikini">
                                        <i class="fa fa-search"></i></a>
                                    <h4>Bikini Girl</h4>
                                    <span>Donec eget massa ante</span>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section contact-me" data-section="section4">
        <div class="container">
            <div class="section-heading">
                <h2>Contact</h2>
                <div class="line-dec"></div>
                <span>Aenean a consectetur mi, sit amet consequat velit. Mauris vitae nunc viverra, mattis arcu quis,
                    vestibulum eros. </span>
            </div>
            <div class="row">
                <div class="right-content">
                    <div class="container">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Your name..." required="" />
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            placeholder="Your email..." required="" />
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject"
                                            placeholder="Subject..." required="" />
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                            placeholder="Your message..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">
                                            Send Message
                                        </button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
