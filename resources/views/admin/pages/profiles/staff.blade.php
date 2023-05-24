<div class="modal fade" id="staff-details-{{$staff->id}}" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
        
    <?php 
        $user = DB::table('user_staff')->where('staff_Id', $staff->User_Id)->first();
        $borrows = DB::table('staff_borrows')->where('User_Id', $staff->User_Id)->orderBy('created_at', 'asc')->take(10)->get();
    ?>
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel" style="float: left;"> Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="col">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" value="{{$user->First_Name}} {{$user->Last_Name}}" readonly>
                        </div>
                        <div class="col">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" value="{{$user->Email}}" readonly>
                        </div>
                    </div>
                    <hr>
                    <h5>Books borrow Details</h5>
                    <div class="form-row">
                        <div class="col">
                            <label class="form-label">Book ID</label>
                        </div>
                        <div class="col">
                            <label class="form-label">Borrow Date</label>
                        </div>
                        <div class="col">
                            <label class="form-label">Return Date</label>
                        </div>
                        <div class="col">
                            <label class="form-label">Status</label>
                        </div>
                    </div>
                    @foreach ($borrows as $item)
                        <div class="form-row">
                            <div class="col">
                                <span>{{$item->Book_Id}}</span>
                            </div>
                            <div class="col">
                                <span>{{$item->Borrow_Date}}</span>
                            </div>
                            <div class="col">
                                <span>{{$item->Return_Date}}</span>
                            </div>
                            <div class="col">
                                @if ($book->status == 1)
                                    <span class="badge badge-danger">
                                        <i class="fa fa-times"></i> Not returned
                                    </span>
                                @elseif ($book->status == 4)
                                    <span class="badge badge-warning">
                                        <i class="fa fa-times"></i> Payed
                                    </span>
                                @elseif ($book->status == 3)
                                    <span class="badge badge-info">
                                        <i class="fa fa-times"></i> Return date extended
                                    </span>
                                @elseif ($book->status == 2)
                                    <span class="badge badge-dark">
                                        <i class="fa fa-times"></i>Have return Request
                                    </span>
                                @elseif ($book->status == 5)
                                    <span class="badge badge-dark">
                                        <i class="fa fa-check"></i> Late return
                                    </span>
                                @else
                                    <span class="badge badge-success">
                                            <i class="fa fa-check"></i> Returned
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>