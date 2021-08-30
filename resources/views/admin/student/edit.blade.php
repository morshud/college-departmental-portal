<form class="form-default" role="form" action="{{ route('student.update', $student_data->id) }}" method="POST">
            @csrf

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Name:</label>
                        <input type="text" id="" class="form-control" value="{{$student_data->name}}" name="name" placeholder="Full Name" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Matric Number:</label>
                        <input type="text" id="" class="form-control" value="{{$student_data->matric}}" name="matric" placeholder="S216202000" required/>
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
                        <label for="checkout-pincode">Email:</label>
                        <input type="text" id="" class="form-control" value="{{$student_data->email}}" name="email" placeholder="mail@example.com" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Phone Number:</label>
                        <input type="text" id="" class="form-control" value="{{$student_data->phone_number}}" name="phone" placeholder="Course Title" required/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Gender:</label>
                            <select class="form-control mb-3" data-live-search="true" name="gender" required>
                                <option value="{{$student_data->gender}}">{{$student_data->gender ?? 'Select Gender'}}</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Level:</label>
                            <select class="form-control mb-3" name="level" required>
                                <option value="{{$student_data->level ?? ''}}">{{$student_data->level ?? 'Select level'}}</option>
                                @foreach (\App\Models\Level::all() as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Session Admitted:</label>
                            <select class="form-control mb-3" name="session" required>
                                <option value="{{$student_data->session ?? ''}}">{{$student_data->session ?? 'Select Session'}}</option>
                                @foreach (\App\Models\Session::all() as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                                </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit"
                    class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
        </form>

