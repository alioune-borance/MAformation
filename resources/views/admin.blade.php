<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }} ">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>MA <em>Formation - Partie Admin</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('adminQuestion') }}">Répondre aux questions
                            </a>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br><br><br><br><br><br><br>
    <div class="container">
        @foreach ($questions as $question)
        <h4>{{ $question->contenu }}</h4><hr>
        <form action="{{ route('repondreQuestion',[$question->id]) }}" method="post">
        @csrf
            <textarea name="reponse" id="" cols="30" rows="10"></textarea><br><br>

            <input type="submit" class="btn btn-dark">
        </form>
        @endforeach
        <br><br>
        <h4>Comment s'inscrire?</h4>
        <hr>
        <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio obcaecati id itaque unde iure libero molestias soluta aspernatur voluptatibus et praesentium ipsam, quae similique non. Magni hic molestias amet!</p>
        <br><br><br>

        <h4>Quel est le niveau requis pour intégrer la formation ?</h4>
        <hr>
        <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio obcaecati id itaque unde iure libero molestias soluta aspernatur voluptatibus et praesentium ipsam, quae similique non. Magni hic molestias amet!</p>
        <br><br><br>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd. - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('assets/js/custom.js ') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>


</body>

</html>