@include('lecturer.layouts.header')
@include('lecturer.layouts.nav')
@include('lecturer.layouts.sidebar')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
@yield('content')

@include('lecturer.layouts.footer')

<script>
    function show_event(event) {
        var url = '{{ route("events.show", ":id") }}';
        url = url.replace(':id', event);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'GET',
            success: function (response) {
                $('#show_modal_content').html(response);
                $('#show-event-modal').modal('show');
            }
        });
    }
</script>