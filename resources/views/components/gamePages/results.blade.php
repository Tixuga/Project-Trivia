<form id="question-form" action="" method="post">
@for ($i = 0; $i < 10; $i++)

<p class="game-info">Category: {{$data['results'][$i]['category']}}</p>
<p class="game-info">Difficulty: {{$data['results'][$i]['difficulty']}}</p>

    <h3>{!!$data['results'][$i]['question']!!}</h3>
    <br>
      @php
          $rightAnswer = $data['results'][$i]['correct_answer'];
      @endphp
      <div class="answer-box">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
          <label class="form-check-label" for="exampleRadios1">
            {!!$answers[0]!!}
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            {!!$answers[1]!!}
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
          <label class="form-check-label" for="exampleRadios3">
            {!!$answers[2]!!}
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
          <label class="form-check-label" for="exampleRadios3">
            {!!$answers[3]!!}
          </label>
        </div>
      </div>
      <br>
      <p>================================================</p>
      <br>
@endfor
<button type="submit" id="confirm-btn" class="btn btn-success" value="submit">CONFIRM ANSWER</button>
</form>