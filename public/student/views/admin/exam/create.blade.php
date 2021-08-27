<div id="addExam" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
    aria-labelledby="addDepartmentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Time-Table
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form class="form-default" role="form" action="{{ route('timetable.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Course Code:</label>
                            <select class="form-control mb-3" data-live-search="true" name="course" required>
                                <option value="">Select Course</option>
                                @foreach (\App\Models\Course::all() as $key => $item)
                                    <option value="{{ $item->course_code }}">{{ $item->course_code }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Session</label>
                        <input type="text" id="" readonly class="form-control" value="{{\App\Models\Session::where('current', 'Yes')->first()->name}}" name="session" placeholder="Course Date" required/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Semester</label>
                        <input type="text" id="" readonly class="form-control" value="{{\App\Models\Semester::where('current', 'Yes')->first()->name}}" name="semester" placeholder="Course Date" required/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Department</label>
                        <input type="text" id="" readonly class="form-control" value="Computer Science" name="department" placeholder="Course Date" required/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Date:</label>
                        <input type="date" id="" class="form-control" name="date" placeholder="Course Date" required/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Time From:</label>
                        <input type="time" id="" class="form-control" name="time_from" placeholder="Course Time From" required/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Time To:</label>
                        <input type="time" id="" class="form-control" name="time_to" placeholder="Course Time To" required/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Venue:</label>
                        <input type="text" id="" class="form-control" name="venue" placeholder="Exam Venue" required/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Level:</label>
                            <select class="form-control mb-3" name="level" required>
                                <option value="">Select Level</option>
                                @foreach (\App\Models\Level::all() as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                                </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Invigilator:</label>
                        <input type="text" id="" class="form-control" name="invigilator" placeholder="Invigilator" required/>
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="submit"
                    class="btn btn-primary waves-effect waves-light">Save</button>
            </div>
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
