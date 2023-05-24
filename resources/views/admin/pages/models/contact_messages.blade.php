<div class="modal fade" id="contact-details-{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel" style="float: left;">Contact Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="" action="" class="form">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="bookId">Name</label>
                            <input type="text" name="name" class="form-control bookId" id="name" value="{{ $contact->firstname }} {{$contact->lastname}}" readonly>                        
                        </div>
                        <div class="form-group">
                            <label for="bookName">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{ $contact->email }}"readonly>
                        </div>
                        <div class="form-group">
                            <label for="bookName">Phone</label>
                            <input type="text" name="number" class="form-control" id="bookprice" value="{{ $contact->phone }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="authorId">Message</label>
                            <input type="textarea" name="message" id="book-desc" cols="30" rows="5" class="form-control" value="{{ $contact->message }}"readonly>
                        </div>
                        <div class="form-group">
                            <label for="authorId">Time</label>
                            <input type="text" name="time" class="form-control" id="quantity" value="{{  $contact->created_at }}" readonly>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#reply-{{$contact->id}}">Reply</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
                </form>
        </div>
    </div>
</div>

<div class="modal fade" id="reply-{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel" style="float: left;">Contact Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('contact.reply')}}" class="form">
                    @csrf
                    <div class="card-body">
                        <input type="text" name="id" class="form-control bookId" id="id" value="{{ $contact->id }}" hidden>                        
                        <div class="form-group">
                            <label for="authorId">Reply message</label>
                            <input type="textarea" name="reply" id="book-desc" cols="30" rows="5" class="form-control">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Send</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
                </form>
        </div>
    </div>
</div>