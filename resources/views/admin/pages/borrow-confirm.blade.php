@if (Auth::check())
    <div class="modal fade" id="demoModal-{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 600px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="demoModalLabel" style="float: left; color: black">Book Borrow Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color: red;">If you borrow a book in previous and still not return, you can't borrow another book. <br>
                    ඔබ කලින් පොතක් රැගෙන තවමත් ආපසු ලබා නොදුන්නේ නම්, ඔබට වෙනත් පොතක් ලබා ගත නොහැක. <br>
                    நீங்கள் முன்பு ஒரு புத்தகத்தை எடுத்துவிட்டு அதைத் திருப்பித் தரவில்லை என்றால், உங்களால் மற்றொரு புத்தகத்தைப் பெற முடியாது.</p>

                    <form action="{{ route('books.borrow.request') }}" class="form" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="userid" class="col-sm-2 col-form-label" style="color: black;">User ID: </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="student_id" value="{{Auth::user()->memberid}}" readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bookid" class="col-sm-2 col-form-label" style="color: black;">Book ID: </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="book_id" value="{{ $book->book_id }}" readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="book_name" class="col-sm-2 col-form-label" style="color: black;">Book Name: </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="book_name" value="{{ $book->book_name }}" readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label" style="color: black;">Message: </label>
                            <div class="col-sm-10">
                                <textarea name="user_message" id="user_message" class="form-control" rows="5" placeholder="Enter your message (Keep empty if there is no message)"></textarea>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Confirm</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
@endif
