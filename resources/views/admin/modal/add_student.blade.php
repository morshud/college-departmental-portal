<div id="addStudent" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
    aria-labelledby="addStudentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Student
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form class="form-default" role="form" action="{{ route('student.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Name:</label>
                        <input type="text" id="" class="form-control" name="name" placeholder="Full Name" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Matric Number:</label>
                        <input type="text" id="" class="form-control" name="matric" placeholder="S216202000" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Password <small>Surname</small>:</label>
                        <input type="Password" id="" class="form-control" name="password" placeholder="Password" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Phone Number:</label>
                        <input type="text" id="" class="form-control" name="phone" placeholder="Phone Number" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Email:</label>
                            <input type="text" id="" class="form-control" name="email" placeholder="mail@example.com" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Gender:</label>
                            <select class="form-control mb-3" data-live-search="true" name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
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
                            <label for="checkout-pincode">Department:</label>
                            <select class="form-control mb-3" name="department" required>
                                <option value="">Select Department</option>
                                @foreach (\App\Models\Department::all() as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Session Admitted:</label>
                            <select class="form-control mb-3" name="session" required>
                                <option value="">Select Session</option>
                                @foreach (\App\Models\Session::all() as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                                </select>
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
