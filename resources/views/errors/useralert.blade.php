<div id="alert" style="display: none;">
    @if(Session::has('success'))
        <div class="alert" id="alert">
            <input type="hidden" id="alert-message" value="{{ Session::get('success') }}">
        </div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger" id="alert">
            <input type="hidden" id="alert-message2" value="{{ Session::get('fail') }}">
        </div>
    @endif
</div>


<script type="text/javascript">
    var message = document.getElementById('alert-message').value;
    window.onload = function () {
        setTimeout(function () {
                alert(message);
        }, 500);
    }
</script>