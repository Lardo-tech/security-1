@extends('my-layout')

@section('content')
    <main class="main">
        <article>
            @foreach($faqs as $faq)
                <figure>
                    <h2>{{$faq->question}}</h2>
                    <a href="./faqs/{{$faq->id}}"><img src="./images/faq-ict.jpg" alt="php" class="small2"></a>
                </figure>
            @endforeach
                <a href="/faqs/create"><button class="special-button">New faq</button></a>
        </article>
    </main>
@endsection
