<div class="points-box">
  <h3>You have concluded your quiz!</h3>
  <p>Each correct answer you gave values 1 point.</p>
  <br>
  @if ($points == 0)
      <p>Unfortunatly, you didn't get any of the answers right.</p>
      <p>Better luck next time!</p>
  @elseif ($points == 1)
      <p>Well, you got {{$points}} point. It is something at least...</p>
  @elseif ($points == 10)
      <p>Wow! You got {{$points}} points. Good job!</p>
  @else
      <p>You got {{$points}} points!</p>
  @endif
  <form action="/user_points_update" method="post">
    @csrf
    @method('PUT')
  <input type="hidden" name="pointSubmit" id="pointSubmit" value="{{$points}}">
    {{-- <button type="submit" class="btn">Play Again</button> --}}
    <button type="submit" class="btn btn-danger">Main Menu</button>
  </form>
</div>