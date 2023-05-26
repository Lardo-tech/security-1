@extends('my-layout')

@section('content')
<article>
    <main>
        <h2>Persoonlijke gegevens</h2>
        <div class="card-container">
            <img src="../images/profielfoto.jpg" class="large" alt="profielfoto">
            <div class="card1">
                <h3>Lars de Hond</h3>
                <p><b><em>Naam:</em></b> Lars de Hond</p>
                <p><b><em>Leeftijd:</em></b> 17 jaar</p>
                <p><b><em>Woonplaats:</em></b> Lewedorp, Sloestraat, 17</p>
                <p><b><em>Woonsituatie:</em></b> ouders</p>
                <p><b><em>Vooropleiding & profiel:</em></b> Havo met NT profiel</p>
            </div>
        </div>
        <h2>Vrije tijd</h2>
        <div class="card-container">
            <img src="../images/brommer.jpg" class="large" alt="brommers">
            <div class="card1">
                <h3>Brommers</h3>
                <p>In mijn vrije tijd houdt ik mij zelf onder andere bezig met brommers.
                    Vaak ben ik er aan het sleutelen om ze net nog wat beter te krijgen of door ze te restaureren.
                    Als de brommers dan af zijn vind ik het ook super leuk om er mee te rijden.
                </p>
            </div>
        </div>
        <div class="card-container2">
            <img src="../images/profile1.jpg" class="large" alt="casette">
            <img src="../images/profile2.jpg" class="large" alt="profile_logo">
            <img src="../images/profile3.jpg" class="large" alt="werk">
        </div>
        <div class="card-container3">
            <div class="card1">
                <h2>Bijbaan</h2>
                <p>Als bijbaantje werk ik bij een fietsenmaker in Goes.
                    Ik werk daar meestal op de zaterdagen, maar in de vakanties werk ik er ook door de weeks. We zijn altijd
                    druk bezig.
                    Zo moeten we de ene keer fietsen repareren van klanten en de andere keer moeten we nieuwe fietsen in elkaar
                    zetten.
                    Ik vindt het leukst om fietsen van klanten te repareren, dit komt doordat je nooit weeet wat er aan de hand
                    is en dit moet je zelf uit zien te vinden en op te lossen.</p>
            </div>
        </div>
        <div class="card-container">
            <img src="../images/wakeboard.JPG" class="large" alt="wakeboard">
            <div class="card1">
                <h2>Hobby's</h2>
                <ul class="center">
                    <li>Wakeboarden</li>
                    <li>Voetbal kijken</li>
                    <li>Ritten rijden</li>
                    <li>Sleutelen</li>
                    <li>Sporten</li>
                    <li>Kevers</li>
                </ul>
            </div>
        </div>
    </main>
</article>
@endsection
