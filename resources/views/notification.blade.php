
<div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel" style="float: left;">Notifications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    @foreach($notifications as $notification)
                        @if( Auth::user()->memberid == $notification->memberid)
                            @if($notification->read == 1)
                                <div id="{{$notification->id}}" class="row" style=" margin-bottom: 5px; border-left: 5px solid blue; background-color: rgb(206, 206, 206); padding-right: 10px; padding-top: 10px; width: 560px;">
                                    <div class="col col-md-8">
                                        <p>{{$notification->notification}}</p>
                                    </div>
                                    <div class="col" style="text-align: end;">
                                        <p>{{$notification->created_at}}</p>
                                        <div onmouseover="this.style.cursor='pointer';" onclick="
                                            document.getElementById('{{$notification->id}}').style.display='none';
                                            $.ajax({
                                                type: 'get',
                                                url: '{{ route('notification.delete',$notification->id ) }}',
                                                success:function(){
                                                }
                                            })
                                        "
                                         class="icons8-delete"></div>
                                    </div>
                                </div>
                            @elseif($notification->read == 0)
                            
                                <div id="{{$notification->id}}" class="row" onmouseover="this.style.cursor='pointer';" onclick="

                                    this.style.background='rgb(206, 206, 206)';
                                    this.style.borderLeft='5px solid blue';
                                    document.getElementById('delete_icon-{{$notification->id}}').style.display='';
                                    $.ajax({
                                        type: 'get',
                                        url: '{{ route('notification.read',$notification->id ) }}',
                                        success:function(){
                                        }
                                    })
                                    " style=" margin-bottom: 5px; border-left: 5px solid rgb(0, 255, 128); padding-right: 10px; padding-top: 10px; width: 560px;">
                                    
                                    <div class="col col-md-8">
                                        <p>{{$notification->notification}}</p>
                                    </div>
                                    <div class="col" style="text-align: end;">
                                        <p>{{$notification->created_at}}</p>
                                        <div id="delete_icon-{{$notification->id}}" style="display: none;" onmouseover="this.style.cursor='pointer';" onclick="
                                            document.getElementById('{{$notification->id}}').style.display='none';
                                            $.ajax({
                                                type: 'get',
                                                url: '{{ route('notification.delete',$notification->id ) }}',
                                                success:function(){
                                                }
                                            })
                                        "
                                         class="icons8-delete"></div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>