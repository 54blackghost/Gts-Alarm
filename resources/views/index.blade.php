@extends('master')
@include('layouts.header')

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <img src="{{asset('statics/image/6.jpg')}}" class="img-fluid " alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{asset('statics/image/7.jpg')}}" class="img-fluid " alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{asset('statics/image/6.jpg')}}" class="img-fluid " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>






<section class="apropos" id="apropos">
    <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span > SECURITE INCENDIE </span></h2>
            <p ><b>La sécurité incendie en entreprise est une des obligations qui incombe aux dirigeants d'entreprise, 
                considérés comme les responsables de la sécurité incendie. 
                La sécurité incendie en entreprise vise à prévenir tout danger lié à un incendie dans un établissement. Devant la nécessité de protéger le personnel et tous les occupants des locaux, 
                elle est réglementée par des normes et des arrêtés. C'est ainsi que  <span style="color:red">GTS ALARM </span> dans le but de suivre la meme directive,
                s'est donne pour objectif de s'imprennier dans ce secteur de la securite.
</b></p>
        </div>
        <div class="col50">
            <div class="img">
            <img src="{{asset('statics/image/2.jpg')}}" class="d-block w-100 h-60" alt="...">
            </div>
        </div>
    </div>
</section>

<section class="apropos" id="apropos">
    <div class="row">
    <div class="col50">
            <div class="img">
            <img src="{{asset('statics/image/3.jpg')}}" class="d-block w-100 h-60" alt="...">
            </div>
        </div>
        <div class="col50">
            <h2 class="titre-texte"><span>VIDEOSURVIELLANCE</span></h2>
            <p ><b>La Videosurveillance est l'un des moyens les plus pertinents de la securite en tout genre. 
            Depuis plus de 25ans, GTS ALARM en temps qu'une entreprise de videosurveillance s'est consacree a la recherche, et a la distribution des meilleurs equipements et solutions de CCTV et centre sa philosophie de travail a une attention personnalisee de chaque client, en etendant ses competences a diverses integrations.
                GTS ALARM a a son actif plus de 5000 cameras installees a ce jour de type fixe, Motorise, Grand Angle, Noctune, thermique, bline...et des solutions en temps reelle accessible via ordinateur, Tablette, Smartphone, reseaux etc.
</b></p>
        </div>
       
    </div>
</section>



<section class="apropos" id="apropos">
    <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span>CONTROL D'ACCESS</span></h2>
            <p ><b><span >Le Controle d'acces doit etre avant tout extremement fiable et offrir un maximum de securite aux usagers</span>.
                Imaginez qu'en cas de necessite d'evacuation rapide le systeme de controle d'acces ne repond pas aux requetes...
                <ul >
                    <li><b>Posibilite d'interfacer plusieurs types de peripheriques</b>  (alarme incendie, extinction automatique etc...)</li>
                    <li><b> Integration rapide d'un nouveau site</b>  ou d'un point d'acces. </li>
                    <li><b> Connectivie native Internet/Ethernet </b>  - peu importe ou se trouve le lecteur ou le controteur, vous en avez l'acess en temps reel. </li>
                </ul>
                <span style="color:red">Votre installateur et surtout votre systeme doivent vous servir fidelement pendant des annees</span>.<br>
                <span style="color:red"> Nous avons plus de 20ANS d'experience dans ce domaine</span>
</b> </p>
        </div>
        <div class="col50">
            <div class="img">
            <img src="{{asset('statics/image/4.jpg')}}" class="d-block w-100 h-60" alt="...">
            </div>
        </div>
    </div>
</section>
<section class="apropos" id="apropos">
    <div class="row">
    <div class="col50">
            <div class="img">
            <img src="{{asset('statics/image/5.jpg')}}" class="d-block w-100 h-60" alt="...">
            </div>
        </div>
        <div class="col50">
            <h2 class="titre-texte"><span>ALARM INTRUSION</span></h2>
            <p ><b>Une alarme d'intrusion désigne une alarme de panique ou une autre alarme destinée à appeler la police, 
                qui est conçue soit pour être déclenchée délibérément par une personne, soit par un système d'alarme qui répond à un stimulus caractéristique d'une intrusion non autorisée.
                c'est dans cette meme lancée que nous avons depuis <b>25 ans</b> contribuer a la sécurisation de nombreux site tels que: les entreprises, les residences privée etc..
</b></p>
        </div>
       
    </div>
</section>
@include('layouts.partner')
<section class="py-5 bg-primary position-relative bg-opacity-50">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Build your web App/SaaS with Velzon dashboard</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn bg-gradient btn-danger"><i class="ri-shopping-cart-2-line align-middle me-1"></i> Buy Now</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
@include('layouts.enterprise')
<section class="py-5 bg-primary position-relative bg-opacity-50">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Build your web App/SaaS with Velzon dashboard</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn bg-gradient btn-danger"><i class="ri-shopping-cart-2-line align-middle me-1"></i> Buy Now</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
@include('layouts.expert')
<section class="py-5 bg-primary position-relative bg-opacity-50">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Build your web App/SaaS with Velzon dashboard</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn bg-gradient btn-danger"><i class="ri-shopping-cart-2-line align-middle me-1"></i> Buy Now</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
@include('layouts.experience')
@include('layouts.footer')