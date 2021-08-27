<form class="form-default" role="form" action="{{ route('semester.update', $semester_data->id) }}" method="POST">
            @csrf

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Semester:</label>
                        <input type="text" id="" class="form-control" name="name" placeholder="{{$semester_data->name}}" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Current:</label>
                            <select name="current" id="" class="form-control">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                </div>
        </form>

