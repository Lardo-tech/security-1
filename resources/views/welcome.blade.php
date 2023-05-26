@extends('my-layout')

@section('content')
    <main class="main">
        <article>
            <div class="text">
                <span style="--i:1">h</span>
                <span style="--i:2">o</span>
                <span style="--i:3">m</span>
                <span style="--i:4">e</span>
            </div>
            <div class="card-container5">
                <div class="card2">
                    <h2>Welkom op mijn HTML pagina.</h2>
                    <p>Hallo ik ben Lars de Hond. Ik doe aan de ICT opleiding op het Hz, meer over mij vind je bij profile. </p>
                </div>
            </div>
            <img src="./images/home1.jpg" alt="home foto 1" class="medium">
            <div class="card-container5">
                <div class="card2">
                    <h2>Motivatie HBO ICT</h2>
                    <p>Ik heb voor de ICT opleiding gekozen, omdat ik het interessant vind om te zien hoe computers werken en hoe
                        je ze kan gebruiken om je eigen problemen op te lossen.
                        Buiten de techniesche kant van deze opleiding sprak het werken in groepsverband mij ook erg aan.
                        Dit komt doordat ik het leuk vind om te zien hoe andere over bepaalde dingen denken en om dan te zien hoe
                        een groep een bepaald probleem op kan lossen met verschillende inzichten.
                    </p>
                    <p>Mijn motivatie om het vol te houden is vooral dat ik zo veel mogelijk naar school zelf wil komen,
                        hierdoor verplicht ik mij zelf om ook echt aan school te werken. Een ander groot voordeel is dan ook dat als
                        ik er niet uit kome het makkelijker kan vragen,
                        waardoor het makkelijker vol te houden is.
                    </p>
                </div>
            </div>
            <img src="./images/home2.jpg" alt="home foto2" class="medium">
            <div class="card-container5">
                <div class="card2">
                    <h3>Wat ik leuk vind aan ICT</h3>
                    <ul>
                        <li>Problemen oplossen</li>
                        <li>Nieuwe systemen leren</li>
                        <li>Leren hoe een computer werkt</li>
                    </ul>
                </div>
            </div>
        </article>
    </main>
@endsection

