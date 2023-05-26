@extends('my-layout')

@section('menu')
    <div class="hidden sm:flex sm:items-center sm:ml-6">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
               <li> <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link></li>
        </form>
@endsection
@section('content')
<main class="main">
    <article>
        <h2>Jaaroverzicht</h2>
        <table>
            <tr>
                <th>Blok</th>
                <th>Cursus</th>
                <th>EC</th>
                <th>Toets</th>
                <th>Cijfer</th>
            </tr>
            <tr>
                <td rowspan="5" class="voldoende">1</td>
                <td class="bezig">PCO</td>
                <td class="bezig">2.5</td>
                <td class="bezig">Assessment website</td>
                <td class="bezig">0.0</td>
            </tr>
            <tr>
                <td>CSB</td>
                <td>5</td>
                <td>written knowledge test</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td>PBA</td>
                <td>5</td>
                <td>Case study exam</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td>PPW1</td>
                <td>1.25</td>
                <td>Portfolio</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td>ITP1</td>
                <td>1.25</td>
                <td>Portfolio</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td rowspan="2">2</td>
                <td rowspan="2">OOP</td>
                <td rowspan="2">10</td>
                <td>presentation</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td>Case study exam</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td rowspan="4">3</td>
                <td>FDE1</td>
                <td>5</td>
                <td>Case study exam</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td rowspan="3">FPR1</td>
                <td rowspan="3">7.5</td>
                <td>Criterium based interview</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td>Assignment</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td>Case study exam</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td rowspan="8">4</td>
                <td rowspan="3">FPR2</td>
                <td rowspan="3">10</td>
                <td>Final delivery</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td>Report of acceptance tests and optional
                    assessments</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td>IT Development portfolio</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td>PIW</td>
                <td>1.25</td>
                <td>Portfolio</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td>ITP2</td>
                <td>1.25</td>
                <td>Portfolio</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td rowspan="3">PPD-E</td>
                <td rowspan="3">12.5</td>
                <td>English test</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td>Dutch test</td>
                <td>0.0</td>
            </tr>
            <tr>
                <td>Criterium focused interview</td>
                <td>0.0</td>
            </tr>
        </table>
        <h2>Legenda</h2>
        <table>
            <tr>
                <th class="bezig">Bezig</th>
                <th class="klaar1">Voldoende afgerond</th>
                <th class="klaar2">Onvoldoende afgerond</th>
                <th class="herkansen">Herkansen</th>
            </tr>
        </table>
        <h2>NBSA</h2>
        <table>
            <tr>
                <th>NBSA onvoldoende grens</th>
                <th>NBSA Vvoldoende grens</th>
            </tr>
            <tr>
                <td>-/45</td>
                <td>-/60</td>
            </tr>
        </table>
    </article>
</main>
@endsection

