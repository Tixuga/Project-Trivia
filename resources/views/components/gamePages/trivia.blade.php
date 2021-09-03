@php
    // $question = $data['results'][$i]['question'];
    // $category = $data['results'][$i]['category'];
    // $difficulty = $data['results'][$i]['difficulty'];
@endphp

<form id="question-form" action="/showResults" method="POST" onsubmit="return verify()" novalidate>
  @csrf
  {{-- @method('POST'); --}}
@for ($i = 0; $i < 10; $i++)

<p class="game-info">Category: {{$data['results'][$i]['category']}}</p>
<p class="game-info">Difficulty: {{$data['results'][$i]['difficulty']}}</p>
    <h3>{!!$data['results'][$i]['question']!!}</h3>
    <br>
      @php
          $rightAnswer = $data['results'][$i]['correct_answer'];
          $wrongAnswerOne = $data['results'][$i]['incorrect_answers'][0];
          $wrongAnswerTwo = $data['results'][$i]['incorrect_answers'][1];
          $wrongAnswerThree = $data['results'][$i]['incorrect_answers'][2];
          //create array to store and shuffle answers

          $answers = array($rightAnswer, $wrongAnswerOne, $wrongAnswerTwo, $wrongAnswerThree);

          shuffle($answers);
          // print_r($answers);
          // print_r($rightAnswer);
      @endphp
      <div class="answer-box">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer_{{$i}}" id="answer_{{$i}}_0" value="{!!$answers[0]!!}">
          <label class="form-check-label" for="exampleRadios1">
            {!!$answers[0]!!}
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer_{{$i}}" id="answer_{{$i}}_1" value="{!!$answers[1]!!}">
          <label class="form-check-label" for="exampleRadios2">
            {!!$answers[1]!!}
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer_{{$i}}" id="answer_{{$i}}_2" value="{!!$answers[2]!!}" >
          <label class="form-check-label" for="exampleRadios3">
            {!!$answers[2]!!}
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer_{{$i}}" id="answer_{{$i}}_3" value="{!!$answers[3]!!}" >
          <label class="form-check-label" for="exampleRadios3">
            {!!$answers[3]!!}
          </label>
        </div>
      </div>
      <br>
      @php print_r($rightAnswer); @endphp
      <p>================================================</p>
      <br>
@endfor
<input type="hidden" value="5" id="points" name="points">
<button type="submit" id="confirm-btn" class="btn btn-success" onclick="verify()" >CONFIRM ANSWER</button>
</form>

<script>
  function verify () {
    let answerGiven = document.forms[0];
    
    let arrayTrivia = {!! json_encode($data['results']) !!};

    var points = 0;

    for (let i = 0; i < arrayTrivia.length; i++) {

      var option = (document.querySelector("input[value='" + arrayTrivia[i].correct_answer + "']") && document.querySelector("input[value='" + arrayTrivia[i].correct_answer + "']").checked === true);
      // console.log(option)
      if (option) points++
      console.log(points)
      
      document.getElementById("points").value = points;
      document.getElementById("question-form").submit;
    }  
  }
</script>

