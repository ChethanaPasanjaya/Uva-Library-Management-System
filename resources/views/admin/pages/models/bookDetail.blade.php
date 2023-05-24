<div class="modal fade" id="view-book-{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel" style="float: left;">Edit Book Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="" action="" class="form">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('book-images/'.$book->book_image) }}" alt="{{ $book->book_id }}" width="100px">
                                </div>
                                <div class="col">
                                    <label for="bookId">Listed Date</label>
                                    <input type="text" name="bookid" class="form-control bookId" id="bookId" value="{{ $book->created_at }}" readonly>
                                    <label for="bookId">Details Update Date</label>
                                    <input type="text" name="bookid" class="form-control bookId" id="bookId" value="{{ $book->updated_at }}" readonly>  
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bookId">Book ID</label>
                            <input type="text" name="bookid" class="form-control bookId" id="bookId" value="{{ $book->book_id }}" readonly>                        
                        </div>
                        <div class="form-group">
                            <label for="bookName">Book Name</label>
                            <input type="text" name="bookName" class="form-control" id="bookName" value="{{ $book->book_name }}"readonly>
                        </div>

                        <?php $cat = DB::table('categories')->where('categoryId', $book->category_id)->first(); 
                        if(isset($cat)):?>
                            <div class="form-group">
                                <label for="bookName">Book Category</label>
                                <input type="text" name="bookName" class="form-control" id="bookName" value="{{ $cat->categoryName }}"readonly>
                            </div>
                        <?php endif;?>

                        <div class="form-group">
                            <label for="authorId">Book Description</label>
                            <input type="textarea" name="book-desc" id="book-desc" cols="30" rows="5" class="form-control" value="{{ $book->book_desc }}"readonly>
                        </div>
                        <div class="form-group">
                            <label for="bookName">Book Value (Rs.)</label>
                            <input type="text" name="bookprice" class="form-control" id="bookprice" value="{{ $book->price }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="authorId">Quantity (current)</label>
                            <input type="text" name="quantity" class="form-control" id="quantity" value="{{ $book->quantity }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="authorId">Author Name</label>
                            <input type="text" name="authorName" class="form-control" id="authorId" value="{{ $book->author_name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="authorId">Damage Quantity</label>
                            <input type="text" name="authorName" class="form-control" id="authorId" value="{{ $book->damaged_quantity }}" readonly>
                        </div>
                        
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
                </form>
        </div>
    </div>
</div>