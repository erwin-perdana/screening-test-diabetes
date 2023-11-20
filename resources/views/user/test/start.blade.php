@extends('user.layout')

@section('content')
<!-- Main Content -->

<div class="container mx-auto p-4 mt-20">
    <main class="flex justify-between">
        <a href="index.html" class="text-xl ml-8 font-semibold tracking-widest no-underline">
            <span class="text-black">Mulai Test</span>
        </a>
    </main>
    <!-- Konten utama -->
    <div class="container mx-auto p-4 mt-20">
        <form method="POST" action="{{route('user.test.store')}}">
            @csrf
            @method('POST')
        <!-- Konten Utama -->
        @foreach ($questions as $index => $question)
        <div class="bg-white p-4 shadow-md rounded-md mt-4 md:w-1/2 lg:w-1/3 xl:w-1/2 mx-auto" id="question{{$index}}" style="{{$index == 0 ? 'display: block' : 'display: none'}}">
            <div class="text-center">
                <h2 class="text-black text-3 xl font-bold mb-4">{{$question->question}}</h2>
                @if ($question->type == "input")
                    <label>Weist Measurement (Cm)</label>
                    <input type="text" value="0" name="answers[]" id="answers{{$index}}" class="border border-sky-800 rounded-lg px-3 py-2 w-full">
                    <button type="submit" class="w-1/3 py-2 px-4 my-2 border border-sky-700 text-sky-700 hover:bg-sky-700 hover:text-white rounded-md">
                        Finish
                    </button>
                @else

                @foreach ($question->options as $option)
                <div class="flex justify-center">
                    <a onclick="showNextQuestion({{$index}}, {{$option->id}})" class="w-1/3 py-2 px-4 my-2 border border-sky-700 text-sky-700 hover:bg-sky-700 hover:text-white rounded-md">
                        {{$option->information}}
                    </a>
                </div>
                @endforeach
                    <input type="hidden" value="" name="answers[]" id="answers{{$index}}">
                @endif
            </div>
        </div>
        @endforeach
        </form>
    </div>
</div>
<script>
    function showNextQuestion(currentQuestion, optionId) {
        document.getElementById("question" + currentQuestion).style.display = "none";
        document.getElementById("answers" + currentQuestion).value = optionId;
        if (currentQuestion < 12) {
            document.getElementById("question" + (currentQuestion + 1)).style.display = "block";
        }
    }
</script>

@endsection