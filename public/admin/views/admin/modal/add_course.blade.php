<div id="addCourse" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
    aria-labelledby="addDepartmentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Course
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form class="form-default" role="form" action="{{ route('course.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Course Code:</label>
                        <input type="text" id="" class="form-control" name="code" placeholder="Course Code" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Course Unit:</label>
                        <input type="text" id="" class="form-control" name="unit" placeholder="Course Unit" required/>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Course Title:</label>
                        <input type="text" id="" class="form-control" name="title" placeholder="Course Title" required/>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="checkout-pincode">Semester:</label>
                            <select class="form-control mb-3" data-live-search="true" name="semester" required>
                                <option value="">Select Semester</option>
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
                                <option value="">Select Level</option>
                                @foreach (\App\Models\Level::all() as $key => $item)
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
