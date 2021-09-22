<div class="site-header__header-one-wrap clearfix">
    <div class="container">

        <div class="site-header__logo-box float-left">
            <div class="site-header__logo">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/images/resources/logo.png') }}" alt=""></a>
            </div>
        </div>

        <header class="main-nav__header-one">
            <div class="main-nav__header-one__top clearfix">
                <div class="main-nav__header-one__top-left">
                    <ul class="list-unstyled">
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-square-alt"></i>
                            </div>
                            <div class="text">
                                <p><a href="#">+225 00 0000 0000</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text">
                                <p><a href="#">contact@unfdao.org</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="main-nav__right main-nav__right-one float-right">
                    <div class="main-nav__right__btn-one">
                        <a href="{{ url('/payment') }}"><i class="fas fa-heart"></i>Faire un Don</a>
                    </div>
                    <div class="main-nav__right__icon-search-box">
                        <a href="#" class="main-nav__search search-popup__toggler">
                            <i class="icon-magnifying-glass" style="color:#fff;"></i>
                        </a>
                    </div>
                </div>
                <div class="main-nav__header-one__top-right">
                    <div class="main-nav__header-one__top-social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="clr-ins"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="clr-dri"><i class="fab fa-youtube"></i></a>&nbsp;&nbsp; &nbsp;|&nbsp; 
                        
                    </div>
                </div>
            </div>
            <nav class="header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="main-nav__left main-nav__left-one float-left">
                        <a href="#" class="side-menu__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="main-nav__main-navigation clearfix">
                            <ul class=" main-nav__navigation-box float-left">
                                <li class="dropdown current">
                                    <a href="{{ url('/') }}">Accueil</a>
                                    <!-- 
                                    <ul>
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index2.html">Home 02</a></li>
                                        <li><a href="index3.html">Home 03</a></li>
                                        <li class="dropdown"><a href="#">Header Versions</a>
                                            <ul>
                                                <li><a href="index.html">Header 01</a></li>
                                                <li><a href="index2.html">Header 02</a></li>
                                                <li><a href="index3.html">Header 03</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="dropdown">
                                    <a href="#">A propos de nous</a>
                                    <ul>
                                        <li><a href="{{ url('/article/se-siriam-tieye') }}">Présentation</a></li>
                                        <li><a href="{{ url('/membres') }}">Membres</a></li>
                                        
                                        <li><a href="#">Notre mission</a></li>
                                        <li><a href="#">Publications</a></li>
                                        
                                    </ul>
                                </li>
                                <!--
                                <li class="dropdown">
                                    <a href="#">Notre mission</a>
                                    <ul>
                                        
                                        <li><a href="campaigns.html">Campaigns</a></li>
                                        <li><a href="campaign-details.html">Campaigns Details</a></li>
                                        
                                    </ul>
                                </li>
                                -->
                                <li class="dropdown">
                                    <a href="{{ url('/projets') }}">Nos Projets</a>
                                    <ul>
                                        <!--
                                        <li><a href="event.html">Events</a></li>
                                        <li><a href="event-details.html">Events Details</a></li>
                                        -->
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li class="dropdown">
                                    <a href="{{ url('/events') }}">Evènements</a>
                                    <ul>
                                        <!--
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="news-details.html">News Detail</a></li>
                                        -->
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="{{ url('/actualites') }}">Actualités</a>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="#">Nos Représentations</a>
                                    <ul>
                                        
                                        <li><a href="#">Cote d'Ivoire</a></li>
                                        <li><a href="#">Ghana</a></li>
                                        <li><a href="#">Mauritanie</a></li>
                                        <li><a href="#">Mali</a></li>
                                        <li><a href="#">Burkina Fasso</a></li>
                                        <li><a href="#">Sénégal</a></li>
                                        <li><a href="#">Liberia</a></li>
                                        <li><a href="#">Sierra Leone</a></li>
                                        <li><a href="#">Nigeria</a></li>
                                        <li><a href="#">Niger</a></li>
                                        <li><a href="#">Benin</a></li>
                                        <li><a href="#">Togo</a></li>
                                        <li><a href="#">Guinée Bissau</a></li>
                                        <li><a href="#">Cap Vert</a></li>
                                        <li><a href="#">Gambie</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                        
                    </div>
                    <!--
                    <div class="main-nav__right main-nav__right-one float-right">
                        <div class="main-nav__right__btn-one">
                            <a href="#"><i class="fas fa-heart"></i>Donate</a>
                        </div>
                        <div class="main-nav__right__icon-cart-box">
                            <a href="#">
                                <span class="icon-shopping-cart"></span>
                            </a>
                        </div>
                        <div class="main-nav__right__icon-search-box">
                            <a href="#" class="main-nav__search search-popup__toggler">
                                <i class="icon-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>
                    -->
                </div>
            </nav>
        </header>
    </div>
</div>