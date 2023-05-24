<?php if (isset($book->id)):?>
    <div class="modal fade" id="user-details-{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
        <?php 
            $user = DB::table('user_students')->where('Stu_Id', $book->user_id)->first();
            $borrows = DB::table('student_borrows')->where('User_Id', $book->user_id)->orderBy('created_at', 'asc')->take(10)->get();
            $fines = DB::table('student_fines')->where('User_Id', $book->user_id)->orderBy('created_at', 'asc')->take(10)->get();
            if (!$user) {
                $user = DB::table('user_staff')->where('staff_Id', $book->user_id)->first();
                $borrows = DB::table('staff_borrows')->where('User_Id', $book->user_id)->orderBy('created_at', 'asc')->take(10)->get();
                $fines = DB::table('staff_fines')->where('User_Id', $book->user_id)->orderBy('created_at', 'asc')->take(10)->get();
            } 
        ?>
<?php elseif (isset($item->id)):?>
    <div class="modal fade" id="user-details-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
        <?php 
            $user = DB::table('user_students')->where('Stu_Id', $item->Stu_Id)->first();
            $borrows = DB::table('student_borrows')->where('User_Id', $item->Stu_Id)->orderBy('created_at', 'asc')->take(10)->get();
            $fines = DB::table('student_fines')->where('User_Id', $item->Stu_Id)->orderBy('created_at', 'asc')->take(10)->get();
            if (!$user) {
                $user = DB::table('user_staff')->where('staff_Id', $item->staff_Id)->first();
                $borrows = DB::table('staff_borrows')->where('User_Id', $item->staff_Id)->orderBy('created_at', 'asc')->take(10)->get();
                $fines = DB::table('staff_fines')->where('User_Id', $item->staff_Id)->orderBy('created_at', 'asc')->take(10)->get();
            } 
        ?>
<?php endif; ?>
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel" style="float: left;"> Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if (isset($user)):?>
                <form>
                    <div class="form-row">
                        <div class="col">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" value="{{$user->First_Name}} {{$user->Last_Name}}" readonly>
                        </div>
                        <div class="col">
                            @if (isset($user->Grade))
                                <label class="form-label">Grade</label>
                                <input type="text" class="form-control" value="{{$user->Grade}}-{{$user->Class}}" readonly>
                            @else
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" value="{{$user->Email}}" readonly>
                            @endif
                        </div>
                    </div>
                    @if (isset($user->guardName))
                        <div class="form-row">
                            <div class="col">
                                <label class="form-label">Guardians' Name</label>
                                <input type="text" class="form-control" value="{{$user->guardName}}" readonly>
                            </div>
                            <div class="col">
                                <label class="form-label">Guardians' Number</label>
                                <input type="text" class="form-control" value="{{$user->guardNo}}" readonly>
                            </div>
                        </div>
                    @endif
                    <div class="form-row">
                        <div class="col">
                            <label class="form-label">Registered Date</label>
                            <input type="text" class="form-control" value="{{$user->created_at}}" readonly>
                        </div>
                        <div class="col">
                            <label class="form-label">Last Details Update Date</label>
                            <input type="text" class="form-control" value="{{$user->updated_at}}" readonly>
                        </div>
                    </div>
                    <hr>
                    <h5>Books borrow Details</h5>
                    <div class="form-row" style="border-bottom: 1px solid rgb(147, 147, 147)">
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
                        <div class="form-row" style="border-bottom: 1px solid rgb(147, 147, 147)">
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
                                @if ($item->status == 1)
                                    <span class="badge badge-danger">
                                        <i class="fa fa-times"></i> Not returned
                                    </span>
                                @elseif ($item->status == 4)
                                    <span class="badge badge-warning">
                                        <i class="fa fa-times"></i> Payed
                                    </span>
                                @elseif ($item->status == 3)
                                    <span class="badge badge-info">
                                        <i class="fa fa-times"></i> Return date extended
                                    </span>
                                @elseif ($item->status == 2)
                                    <span class="badge badge-dark">
                                        <i class="fa fa-times"></i>Have return Request
                                    </span>
                                @elseif ($item->status == 5)
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
                <?php endif?>

                <hr>

                <?php if (isset($fines)):?>
                <form>
                    <h5>Fines Details</h5>
                    <div class="form-row" style="border-bottom: 1px solid rgb(147, 147, 147)">
                        <div class="col">
                            <label class="form-label">Book ID</label>
                        </div>
                        <div class="col">
                            <label class="form-label">Description</label>
                        </div>
                        <div class="col">
                            <label class="form-label">Fine(Rs.)</label>
                        </div>
                        <div class="col">
                            <label class="form-label">Date</label>
                        </div>
                    </div>
                    @foreach ($fines as $item)
                        <div class="form-row" style="border-bottom: 1px solid rgb(147, 147, 147)">
                            <div class="col">
                                <span>{{$item->Book_Id}}</span>
                            </div>
                            <div class="col">
                                <span>{{$item->desc}}</span>
                            </div>
                            <div class="col">
                                <span>{{$item->Total_Fine}}</span>
                            </div>
                            <div class="col">
                                <span>{{$item->created_at}}</span>
                            </div>
                        </div>
                    @endforeach
                </form>
                <?php endif?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


