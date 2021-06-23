@extends('template')

@section('content')
<!-- Page Content -->
<div class="page-heading contact-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>FaQ</h4>
                        <h2>Posez vos questions</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <div class="container">
        <h4>Qu'est ce que nous faisons ?</h4>
        <hr>
        <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio obcaecati id itaque unde iure libero molestias soluta aspernatur voluptatibus et praesentium ipsam, quae similique non. Magni hic molestias amet!</p>
        <br><br><br>

        <h4>Comment s'inscrire?</h4>
        <hr>
        <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio obcaecati id itaque unde iure libero molestias soluta aspernatur voluptatibus et praesentium ipsam, quae similique non. Magni hic molestias amet!</p>
        <br><br><br>

        <h4>Quel est le niveau requis pour intégrer la formation ?</h4>
        <hr>
        <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio obcaecati id itaque unde iure libero molestias soluta aspernatur voluptatibus et praesentium ipsam, quae similique non. Magni hic molestias amet!</p>
        <br><br><br>
    </div>




    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h1>Posez vos questions</h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection