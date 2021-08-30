@php
    $data = json_decode($dataJson,true);
    $question = $data['results'][0]['question'];
    $rightAnswer = $data['results'][0]['correct_answer'];
    $wrongAnswerOne = $data['results'][0]['incorrect_answers'][0];
    $wrongAnswerTwo = $data['results'][0]['incorrect_answers'][1];
    $wrongAnswerThree = $data['results'][0]['incorrect_answers'][2];
    $category = $data['results'][0]['category'];
    $difficulty = $data['results'][0]['difficulty'];
    
    //create array to store and shuffle answers

    $answers = array($rightAnswer, $wrongAnswerOne, $wrongAnswerTwo, $wrongAnswerThree);

    shuffle($answers);
    print_r($answers);
    print_R($rightAnswer);

@endphp
<p class="game-info">Category: {{$category}}</p>
<p class="game-info">Difficulty: {{$difficulty}}</p>
<form id="question-form" action="" method="post">
    <h3>{{$question}}</h3>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
        <label class="form-check-label" for="exampleRadios1">
          1.{{$answers[0]}}
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">
          2.{{$answers[1]}}
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
        <label class="form-check-label" for="exampleRadios3">
          3.{{$answers[2]}}
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
        <label class="form-check-label" for="exampleRadios3">
          4.{{$answers[3]}}
        </label>
      </div>
      <button type="submit" id="confirm-btn" class="btn btn-success" value="submit">CONFIRM ANSWER</button>
</form>

