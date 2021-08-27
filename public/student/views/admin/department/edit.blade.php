<form class="form-default" role="form" action="{{ route('department.update', $dept_data->id) }}" method="POST">
            @csrf

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Department:</label>
                        <input type="text" id="" class="form-control" name="name" placeholder="{{$dept_data->name}}" required/>
                        </div>
                    </div>

                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                </div>
        </form>

