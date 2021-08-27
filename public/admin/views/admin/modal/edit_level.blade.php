<form class="form-default" role="form" action="{{ route('level.update', $level_data->id) }}" method="POST">
            @csrf

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Level:</label>
                        <input type="text" id="" class="form-control" name="name" placeholder="{{$level_data->name}}" required/>
                        </div>
                    </div>

                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                </div>
        </form>
