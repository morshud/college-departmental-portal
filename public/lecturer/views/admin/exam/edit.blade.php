<form class="form-default" role="form" action="{{ route('timetable.update', $exam_data->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Course Code:</label>
                            <select class="form-control mb-3" data-live-search="true" name="course" required>
                                <option value="{{$exam_data->course}}">{{$exam_data->course}}</option>
                                @foreach (\App\Models\Course::all() as $key => $item)
                                    <option value="{{ $item->course_code }}">{{ $item->course_code }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Date:</label>
                        <input type="date" id="" class="form-control" value="{{$exam_data->date}}" name="date" placeholder="Course Date" required/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Time From:</label>
                        <input type="time" id="" class="form-control" value="{{$exam_data->time_from}}" name="time_from" placeholder="Course Time From" required/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Time To:</label>
                            <input type="time" id="" value="{{$exam_data->time_to}}" class="form-control" name="time_to" placeholder="Course Time To" required/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Venue:</label>
                        <input type="text" id="" value="{{$exam_data->hall}}" class="form-control" name="venue" placeholder="Exam Venue" required/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Level:</label>
                            <select class="form-control mb-3" name="level" required>
                                <option value="{{$exam_data->level}}">{{$exam_data->level}}</option>
                                @foreach (\App\Models\Level::all() as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                                </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Invigilator:</label>
                            <input type="text" id="" value="{{$exam_data->invigilator}}" class="form-control" name="invigilator" placeholder="Invigilator" required/>
                        </div>
                    </div>
            </div>
                    <div class="modal-footer">
                    <button type="submit"
                        class="btn btn-primary waves-effect waves-light">Update</button>
                    </div>
        </form>

