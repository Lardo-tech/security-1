@extends('my-layout')

@section('content')
    <main class="main">
        <article>
            <figure>
                <h2>Update faq</h2>
                <form method="POST" action="/faqs">
                    @csrf

                    <label for="question">Question:</label><br>
                    <input type="text" id="question" name="question" value="{{$faq->question}}"><br>

                    <label for="answer">Answer:</label><br>
                    <input type="text" id="answer" name="answer" value="{{$faq->answer}}"><br>

                    <label for="link">Link:</label><br>
                    <input type="text" id="link" name="link" value="{{$faq->link}}"><br><br>

                    <input type="submit" value="Submit">
                    <a href="/faq"><button class="special-button">Cancel</button></a>
                </form>
            </figure>
        </article>
    </main>
@endsection

