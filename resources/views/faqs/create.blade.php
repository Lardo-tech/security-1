@extends('my-layout')

@section('content')
    <main class="main">
        <article>
            <figure>
                <h2>New faq</h2>
                <form method="POST" action="/faqs">
                    @csrf

                    <label for="question">Question:</label><br>
                    <input type="text" id="question" name="question" value="{{old('question')}}">


                    @error ('question')
                        <p>{{ $errors->first('question') }}</p>
                    @enderror
                    <br>

                    <label for="answer">Answer:</label><br>
                    <input type="text" id="answer" name="answer" value="{{old('answer')}}">


                    @error ('answer')
                        <p>{{ $errors->first('answer') }}</p>
                    @enderror
                    <br>

                    <label for="link">Link:</label><br>
                    <input type="text" id="link" name="link" value="{{old('link')}}">


                    @error ('link')
                        <p>{{ $errors->first('link') }}</p>
                    @enderror
                    <br><br>

                    <input type="submit" value="Submit">
                </form>
            </figure>
            <a href="/faq"><button>Cancel</button></a>
        </article>
    </main>
@endsection

