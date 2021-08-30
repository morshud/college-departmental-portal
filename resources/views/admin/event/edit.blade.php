<form class="form-default" role="form" action="{{ route('event.update', $event_data->id) }}" method="POST">
    @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group mb-2">
                <label for="checkout-pincode">Event Type:</label>
                <input type="text" id="" value="{{$event_data->type}}" class="form-control" name="type" placeholder="Type" required/>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group mb-2">
                <label for="checkout-pincode">Event Title:</label>
                <input type="text" id="" value="{{$event_data->title}}" class="form-control" name="title" placeholder="Title" required/>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group mb-2">
                <label for="checkout-pincode">Event Description:</label>
                <textarea name="description" id="" class="form-control" cols="30" rows="10">
                    {{$event_data->description}}
                </textarea>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="submit"
            class="btn btn-primary waves-effect waves-light">Save</button>
    </div>
</form>
