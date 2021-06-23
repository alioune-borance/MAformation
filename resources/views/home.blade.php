@extends('template')

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Meilleure offre</h4>
                    <h2>Formation de serrurier</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Meilleure offre</h4>
                    <h2>Formation de serrurier</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Meilleure offre</h4>
                    <h2>Formation de serrurier</h2>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- Banner Ends Here -->

    <!-- presentation de l'entreprise -->
    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Présentation de l'Ecole de Formation</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="left-content">
                        <p>
                        {{ $infos->presentation }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>A propos de nous</h2>
                        <a href="products.html">Voir toutes les formations en détail <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/images/form1.jpg" alt="" width="349px" height="273"></a>
                        <div class="down-content">
                            <h4>Nos modules </h4>
                            <p><b>Nos modules sont ...</b></p>
                            <!-- <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (24)</span> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/images/form2.png" alt="" width="349px" height="273"></a>
                        <div class="down-content">
                            <h4>Prix de la formation</h4>
                            <p><b>Le prix de la formation est de 55K par mois pour un total de 300k</b></p>
                            <!-- <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p> -->
                            <!--<ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (21)</span>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/images/form3.jpg" alt="" width="349px" height="273"></a>
                        <div class="down-content">
                            <h4>Durée de la formation</h4>

                            <p><b>La durée de la formation est de 4 mois en temps plein</b></p>
                            <!--<p>Sixteen Clothing is free CSS template provided by TemplateMo.</p>
                             <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (36)</span> -->
                        </div>
                    </div>
                </div>
                <!--<div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/images/product_04.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="#">
                                <h4>Tittle goes here</h4>
                            </a>
                            <h6>$15.25</h6>
                            <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (48)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/images/product_05.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="#">
                                <h4>Tittle goes here</h4>
                            </a>
                            <h6>$12.50</h6>
                            <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (16)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="#">
                                <h4>Tittle goes here</h4>
                            </a>
                            <h6>$22.50</h6>
                            <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (32)</span>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>

    <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h1>Nos partenaires</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-clients owl-carousel">
                        <div class="client-item">
                            <img src="assets/images/3fpt.png" alt="1">
                        </div>

                        <div class="client-item">
                            <img src="assets/images/senegal.png" alt="2">
                        </div>

                        <div class="client-item">
                            <img src="assets/images/silca.png" alt="3">
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h1>Contact</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Ou sommes nous ? : </h4><p>{{ $contact->adresse }}</p><br>
                            
                        <h4>Numéro Téléphone : </h4><p>{{ $contact->numeroT }}</p><br>
                             
                        <h4>Email : </h4><p>{{ $contact->email }}</p><br>
                               
                        <h4>Réseaux sociaux :  </h4>
                                
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/contact.jpg" alt="" height="390px">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection