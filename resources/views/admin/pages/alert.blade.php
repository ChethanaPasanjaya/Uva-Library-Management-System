@if(Session::has('success'))

    <div class="alert hide">
        <span class="fas fa-check-circle"></span>
        <span class="msg">Success: {{ Session::get('success') }}</span>
        <div class="close-btn">
           <span class="fas fa-times"></span>
        </div>
     </div>


@endif
@if(Session::has('fail'))
    <div class="alert hide">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg">Success: {{ Session::get('fail') }}</span>
        <div class="close-btn">
            <span class="fas fa-times"></span>
        </div>
    </div>
@endif