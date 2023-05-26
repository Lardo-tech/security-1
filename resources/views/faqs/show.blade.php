@extends('my-layout')

@section('content')
    <main class="main">
        <article>
            <figure>
                <h2>{{$faq->question}}</h2>
                <figcaption>{{$faq->excerpt}}</figcaption>
                <br>
                <img src="../images/faq-ict.jpg" alt="php" class="medium2">
                <div class="card-container5">
                    <div class="card2">
                        <p>{{$faq->answer}}</p>
                        <a href="{{$faq->link}}" target="_blank">Klik hier!</a>
                    </div>
                </div>
            </figure>
            <a href="{{route('faqs.edit', $faq)}}"><button class="special-button">Edit faq</button></a>
            <br>
            <br>
            <form method="POST" action="{{route('faqs.destroy', $faq)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="special-button">Delete</button>
            </form>
        </article>
    </main>
@endsection
