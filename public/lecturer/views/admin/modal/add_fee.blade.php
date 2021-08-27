<div id="addFee" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
    aria-labelledby="addSessionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Fee
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form class="form-default" role="form" action="{{ route('fee.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Type:</label>
                        <input type="text" id="" class="form-control" name="type" placeholder="Fee Type" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Amount:</label>
                        <input type="text" id="" class="form-control" name="amount" placeholder="Fee Amount" required/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-2">
                        <label for="checkout-pincode">Charges:</label>
                        <input type="text" id="" class="form-control" name="charges" placeholder="Fee Charges" required/>
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
