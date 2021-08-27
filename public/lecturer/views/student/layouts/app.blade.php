@include('student.layouts.header')
@include('student.layouts.nav')
@include('student.layouts.sidebar')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
@yield('content')

@include('student.layouts.footer')

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

    function add_course(course) {
        var url = '{{ route("student.add_course", ":id") }}';
        url = url.replace(':id', course);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'GET',
            success: function (response) {
                Snackbar.show({
                    text: 'Your Course has been registered successfully!',
                    width: 'auto',
                    pos: 'top-right',
                    onActionClick: function(element) {
                        //Set opacity of element to 0 to close Snackbar 
                        $(element).css('opacity', 0);
                    }
                });
            }
        });
    }
</script>