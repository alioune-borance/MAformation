@extends('template')

@section('content')
<!-- Page Content -->
<div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>MA Formation</h4>
                        <h2>Nos Modules</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Nos Modules</h2>
                        <a href="products.html">Voir toutes les formations en détail<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="row container">
                    <div class="col-md-8">
                        <!-- <ul class="list-group">
                            <li class=" row list-group-item">
                                <h3 class="col-md-4">Modules1</h3>
                                <p class="col-md-4">Description fnjnrge</p>
                                <p class="col-md-4">10 heures 5heures par semaines</p>
                            </li>
                            <li class="list-group-item">
                                <h3>Modules1</h3>
                                <p>Description fnjnrgkezze</p>
                                <p>10 heures 5heures par semaines</p>
                            </li>
                            <li class="list-group-item">
                                <h3>Modules1</h3>
                                <p>Description fnjnrrzrge</p>
                                <p>10 heures 5heures par semaines</p>
                            </li>
                        </ul> -->
                        <br><br>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Modules</th>
                                <th>Description</th>
                                <th>Nombres d'heures</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($modules as $m)
                            <tr>
                                <td>{{ $m->nom }}</td>
                                <td>{{ $m->heuresFormation}}</td>
                                <td>{{ $m->heuresEntreprise }}</td>
                            </tr>
                            @endforeach
                            
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <div class="right-image">
                            <img src="{{ asset('assets/images/feature-image.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection