<form class="form-default" role="form" action="{{ route('course.update', $course_data->id) }}" method="POST">
            @csrf

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Course Code:</label>
                        <input type="text" id="" class="form-control" value="{{$course_data->course_code}}" name="code" placeholder="Course Code" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Course Unit:</label>
                        <input type="text" id="" class="form-control" value="{{$course_data->course_unit}}" name="unit" placeholder="Course Unit" required/>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Course Title:</label>
                        <input type="text" id="" class="form-control" value="{{$course_data->course_title}}" name="title" placeholder="Course Title" required/>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Semester:</label>
                            <select class="form-control mb-3" data-live-search="true" name="semester" required>
                            <option value="{{$course_data->semester}}">{{$course_data->semester}}</option>
                                @foreach (\App\Models\Semester::all() as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Level:</label>
                            <select class="form-control mb-3" name="level" required>
                                <option value="{{$course_data->level}}">{{$course_data->level}}</option>
                                @foreach (\App\Models\Level::all() as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                                </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Lecturer In Charge:</label>
                            <select class="form-control mb-3" data-live-search="true" name="lecturer_incharge" required>
                                <option value="{{$course_data->lecturer_incharge ?? ''}}">{{$course_data->lecturer_incharge ?? 'Select Lecturer'}}</option>
                                @foreach (\App\Models\Lecturer::all() as $key => $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                                </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit"
                    class="btn btn-primary waves-effect waves-light">Save</button>
                </div>
        </form>

