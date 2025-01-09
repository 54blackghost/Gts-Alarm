@extends('master')
@include('layouts.header')

<div class="row">
<h2 class="uno">Notre histoire</h2>
    <section>
        <div class="una">
            <img src="{{asset('statics/image/1.jpeg')}}" alt="" class="image-ronde p" srcset="">
        </div>
    <div class="una">
        <p class="p f2">
<b>C'est dans les années, 1992 que la grande idée de <b>M FOTIE Bruno</b> naie pour la création de la<span style="color:red"> Générale des Techniques &   Services (GTS) sous le label GTS-ALARM</span>
pour pallier aux différents problemes du secteur de la sécurité.<br>
Etant un homme de grandes idées et projets, il crée en 1996  la branche chargée du traitement des eaux notamment la potabilisation sous le label<span style="color:red"> FILTREX</span>.
c'est depuis ces années que la grande avanture de <b>M FOTIE Bruno</b> s'est lancé jusqu'a nos jours pour de nombreuses réalisations dans nos différents secteurs d'activités

</b></p>
    </div>
    </section>
    
    <section >
    <div class="una">
    <h2 class=" ">Qui sommes nous</h2><br>
        <p class="  p">
        <b>GTS-FILTREX est une <b> societe de haute technologie tournee vers l'innovation permanente</b>, qui se consacre a la conception, l'integration, et la maintenance dde divres systemes de Securite et representant regional des societes de renom tels que
            <span style="color:red">Siemens, Albano Elettronica Italia, 
            Tyco Fire and Safety, et Ecoprotection</span> qui sont des societes de grandes reputation dans <span style="color:red">la detection/extinction d'incendie, 
            la videosurveillance, le controle des acces, la tele supervision</span> etc... 
</b></p>
    </div>
    
    <div class="una">
    <h2 class=" ">Quels sont nos atouts</h2>
        <p class="p">
        <b>Notre <span style="color:red">portee regionale</span> et notre <b>presence sur l'ensemble du territoire</b>
            nous permettent de repondre aux besoins particuliers de tous nos clients afin <span style="color:red">d'eviter l'arret imprevu leur infrastructure meme d'une minute, et des pertes causee par une breche de securite</span>, qui pourrait en plus avoir des effets 
            negatifs importants sur les relations avec leur clientele.   
</b></p>
    </div>
    </section>
</div>



@include('layouts.footer')