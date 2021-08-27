<form class="form-default" role="form" action="{{ route('lecturer.update', $lecturer_data->id) }}" method="POST">
            @csrf

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Name:</label>
                        <input type="text" id="" class="form-control" value="{{$lecturer_data->name}}"  name="name" placeholder="Full Name" required/>
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
                        <input type="text" id="" class="form-control" value="{{$lecturer_data->phone}}" name="phone" placeholder="Phone Number" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Email:</label>
                        <input type="email" id="" class="form-control" value="{{$lecturer_data->email}}" name="email" placeholder="Email" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Gender:</label>
                            <select class="form-control mb-3" data-live-search="true" name="gender" required>
                                <option value="{{$lecturer_data->gender ?? ''}}">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Department:</label>
                            <select class="form-control mb-3" name="department" required>
                                <option value="{{$lecturer_data->department ?? ''}}">Select Department</option>
                                @foreach (\App\Models\Department::all() as $key => $item)
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

