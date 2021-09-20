@extends('layouts.main')

@section('content')

    <!--Three Icon Start-->
    <section class="feature-one">
        <div class="container">
            <div class="feature-one__inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Three Icon Single-->
                        <div class="feature-one__single feature-one__single-first-item">
                            <div class="feature-one__icon-wrap">
                                <div class="feature-one__icon-box">
                                    <span class="icon-heart"></span>
                                    <div class="feature-one__icon-box-img">
                                        <img src="assets/images/resources/three_iocn_box_bg.png" alt="">
                                    </div>
                                </div>
                                <div class="feature-one__icon-text-box">
                                    <h4>Devenir <br> membre</h4>
                                </div>
                            </div>
                            <p class="feature-one__icons-single-text">There are many of lorem Ipsum, but the majori
                                have suffered alteration in some form.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Three Icon Single-->
                        <div class="feature-one__single feature-one__single-second-item">
                            <div class="feature-one__icon-wrap">
                                <div class="feature-one__icon-box feature-one__icon-box-two">
                                    <span class="icon-wallet-filled-money-tool"></span>
                                    <div class="feature-one__icon-box-img">
                                        <img src="assets/images/resources/three_iocn_box_bg-2.png" alt="">
                                    </div>
                                </div>
                                <div class="feature-one__icon-text-box">
                                    <h4>Nos <br> actions</h4>
                                </div>
                            </div>
                            <p class="feature-one__icons-single-text">There are many of lorem Ipsum, but the majori
                                have suffered alteration in some form.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Three Icon Single-->
                        <div class="feature-one__single feature-one__single-third-item">
                            <div class="feature-one__icon-wrap">
                                <div class="feature-one__icon-box feature-one__icon-box-three">
                                    <span class="icon-charity"></span>
                                    <div class="feature-one__icon-box-img">
                                        <img src="assets/images/resources/three_iocn_box_bg-3.png" alt="">
                                    </div>
                                </div>
                                <div class="feature-one__icon-text-box">
                                    <h4>Nos <br> valeurs</h4>
                                </div>
                            </div>
                            <p class="feature-one__icons-single-text">There are many of lorem Ipsum, but the majori
                                have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Three Icon End-->

    <!--Welcome One Start-->
    <section class="welcome-one" style="background-image: url(assets/images/backgrounds/welcome_one_bg.jpg)">
        <div class="welcome-one-hands"
            style="background-image:url(assets/images/backgrounds/welcome_one_hands.png)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome-one__left">
                        <div class="welcome-one__img wow slideInLeft" data-wow-delay="100ms">
                            <img src="assets/images/resources/welcome_one_img_1.jpg" alt="">
                            <div class="welcome-one__badge">
                                <img src="assets/images/resources/welcome_one_badge.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($discours->posts()->take(1)->get()  as $post)
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome-one__right">
                        <div class="block-title text-left">
                            <h3>{{ $post->title }}</h3>
                            <h4>{{ $post->excerpt }}</h4>
                        </div>
                        <p class="welcome-one__text">{{ substr($post->body, 0, 999) }}...</p>
                        <div class="text-center more-post__btn">
                            <a href="{{ route('blog.show', $post->slug) }}" class="thm-btn">Lire la suite...</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Welcome One End-->
    <br><br>
    <section class="give-helping">
        <div class="container">
            <div class="row">
                @foreach($federation->posts()->take(1)->get()  as $post)
                <div class="col-xl-4 col-lg-4">
                    <div class="give-helping__first-item">
                        <div class="block-title text-left">
                            <!--<h4>Introductions</h4>-->
                            <h2>{{ $post->title }}</h2>
                        </div>
                        <p class="give-helping__first-item__text">{{ $post->body }}</p>
                        <!--<a href="#" class="thm-btn give-helping__first-item__btn">Learn More</a>-->
                    </div>
                </div>
                @endforeach
                <div class="col-xl-4 col-lg-4">
                    <div class="give-helping__two-boxes">
                        <div class="give-helping__two-boxes__img">
                            <img src="assets/images/resources/give-helping-two-boxs-img.jpg" alt="">
                            <div class="give-helping__two-boxes__text">
                                <p><a href="">Habitat & Environnement <br> Energie & Eau <br>Santé & Soins <br> Éducation & Formation <br>Sécurité & Lutte contre le terrorisme</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="give-helping__cause">
                        <div class="give-helping__cause-shape" style="background-image: url(assets/images/shapes/give-helping__cause-shape.png)"></div>
                        <div class="give-helping__cause-title">
                            <h3>Help Children Rise Out of Poverty</h3>
                            <p>Dignissim cras tincidunt lobortis feugiat vivam at augue eget. Id consectetur purus
                                orci.</p>
                        </div>
                        <div class="give-helping__progress">
                            <div class="bar">
                                <div class="bar-inner count-bar counted" data-percent="36%" style="width: 36%;">
                                    <div class="count-text">36%</div>
                                </div>
                            </div>
                            <div class="give-helping__goals">
                                <p><span>$25,270</span> Raised</p>
                                <p><span>$30,000</span> Goal</p>
                            </div>
                            <div class="give-helping__btn">
                                <a href="campaigns.html"><i class="fas fa-heart"></i>Donate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Popular Causes Start-->
    <section class="popular-causes">
        <div class="container">
            <div class="block-title text-left">
                <h4>La paix est le bien le plus précieux à garder</h4>
                <h2>Actualites</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    
                    <div class="popular-causes__carousel owl-theme owl-carousel">
                        <!--Popular Causes Single-->
                        @foreach($actualites->posts()->take(50)->get() as $post)
                        
                        <div class="popular-causes__sinlge">
                            <div class="popular-causes__img">
                                <a href="{{ route('blog.show', $post->slug) }}">
                                    <img src="{{ $post->image_url }}" alt="">
                                </a>
                                <div class="popular-causes__category">
                                    <p>Actualités</p>
                                </div>
                            </div>
                            <div class="popular-causes__content">
                                <div class="popular-causes__title">
                                    <h3><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                    </h3>
                                    <p><a href="{{ route('blog.show', $post->slug) }}">{{ substr($post->excerpt, 0, 50) }}</a></p>
                                </div>
                            </div>
                        </div>
                        
                    
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Popular Causes One End-->

    <!--We Are Helping Start
    <section class="we-are-helping jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url(assets/images/backgrounds/we_are_helping_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="we-are-helping__left">
                        <div class="block-title text-left">
                            <h4>Nos valeurs</h4>
                            <h2>Découvrez nos valeurs en vidéo</h2>
                        </div>
                        <div class="we-are-helping__video">
                            <a href="https://www.youtube.com/watch?v=i9E_Blai8vk"
                                class="we-are-helping__video-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="we-are-helping__arrow">
                            <img src="assets/images/shapes/we_are_helping_arrow.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="we-are-helping__points">
                        <ul class="list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-salad"></span>
                                </div>
                                <div class="text">
                                    <h4>Healthy Food</h4>
                                    <p>There are many variations of but the majority have simply free text suffered.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-water"></span>
                                </div>
                                <div class="text">
                                    <h4>Clean Water</h4>
                                    <p>There are many variations of but the majority have simply free text suffered.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <!--We Are Helping End-->

    <!--We Need Help Start-->
    <br><br>
    <section class="we-need-help">
        <div class="we-nned-help-bg">
            <img src="assets/images/resources/we_need_help_bg.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="we-need-help__left">
                        <div class="block-title text-left">
                            <h4>Comment faire un don</h4>
                            <h2>Tout savoir sur le processus</h2>
                        </div>
                        <div class="we-need-help__faqs">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How to process the charity functions?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages of available but the majority
                                                have suffered alteration in that some form by words which don’t look
                                                even as slightly believable now.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>How to process the charity functions?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages of available but the majority
                                                have suffered alteration in that some form by words which don’t look
                                                even as slightly believable now.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How to process the charity functions?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages of available but the majority
                                                have suffered alteration in that some form by words which don’t look
                                                even as slightly believable now.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="we-need-help__right">
                        <div class="we-need-help__img">
                            <img src="assets/images/resources/we_need_help_img.jpg" alt="">
                            <div class="we-need-help__give">
                                <div class="icon">
                                    <span class="icon-charity-1"></span>
                                </div>
                                <div class="text">
                                    <h4>Donnons-nous <br> votre
                                        Coup de main</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--We Need Help End-->

    <!--Join One Start-->
    <section class="join-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url(assets/images/backgrounds/join_one_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="join-one__inner">
                        <div class="join-one__icon">
                            <span class="icon-helping-hand"></span>
                        </div>
                        <h2>Restez informé de notre actualité</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Join One End-->    

    <!--Newsletter One Start-->
    <section class="newsletter-one">
        <div class="container">
            <div class="newsletter-one__inner">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="newsletter-one__left">
                            <div class="newsletter-one__subscriber-box">
                                <div class="icon">
                                    <span class="icon-news"></span>
                                </div>
                                <div class="text">
                                    <p>Souscrire</p>
                                    <h4>Newsletter</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="newsletter-one__right">
                            <form method="post" action="{{route('subscribe')}}" class="newsletter-one__subscribe-form">
                                {{ csrf_field() }}
                                <div class="newsletter-one__subscribe-input-box">
                                    <input type="email" name="email" placeholder="Votre adresse mail">
                                    
                                    <button type="submit" class="button">Souscrivez</button>
                                    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    
    <section class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__contact" allowfullscreen=""></iframe>
    </section>

@endsection
