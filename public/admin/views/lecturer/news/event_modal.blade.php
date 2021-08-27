<div class="modal-header">
    <h5 class="modal-title" id="exampleModalCenterTitle">{{$event_data->type}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
</div>
<div class="modal-body">
    <h4 class="modal-heading mb-4 mt-2">{{$event_data->title}}</h4>
    <p class="modal-text">{{$event_data->description}}</p>
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
</div>