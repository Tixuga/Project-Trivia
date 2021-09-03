<form action="/results" method="post" onsubmit="return trial()" novalidate>
    @csrf
    
    <button class="btn-class" type="submit" onclick="trial()">Click me!</button>
    <input type="hidden" id="trial" value="7" name="trial">
</form>
<script>
    function trial(){
        let scout = document.forms[0];
        let trial = 8
        document.getElementById("trial").value = trial;
    }
</script>