<div id="addDepartment" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
    aria-labelledby="addDepartmentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Department
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form class="form-default" role="form" action="{{ route('department.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group mb-2">
                    <label for="checkout-pincode">Session:</label>
                    <input type="text" id="" class="form-control" name="name" placeholder="Computer Science" required/>
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
