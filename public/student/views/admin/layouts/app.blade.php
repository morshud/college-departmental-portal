@include('admin.layouts.header')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
@yield('content')
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

@include('admin.layouts.footer')


@yield('script')

<script>
    function edit_level(level) {
        var url = '{{ route("level.edit", ":id") }}';
        url = url.replace(':id', level);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'GET',
            success: function (response) {
                $('#edit_modal_body').html(response);
                $('#edit-level-modal').modal('show');
            }
        });
    }

    function edit_dept(dept) {
        var url = '{{ route("department.edit", ":id") }}';
        url = url.replace(':id', dept);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'GET',
            success: function (response) {
                $('#edit_modal_body').html(response);
                $('#edit-dept-modal').modal('show');
            }
        });
    }

    function edit_session(session) {
        var url = '{{ route("session.edit", ":id") }}';
        url = url.replace(':id', session);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'GET',
            success: function (response) {
                $('#edit_modal_body').html(response);
                $('#edit-session-modal').modal('show');
            }
        });
    }

    function edit_course(course) {
        var url = '{{ route("course.edit", ":id") }}';
        url = url.replace(':id', course);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'GET',
            success: function (response) {
                $('#edit_modal_body').html(response);
                $('#edit-course-modal').modal('show');
            }
        });
    }

    function edit_semester(semester) {
        var url = '{{ route("semester.edit", ":id") }}';
        url = url.replace(':id', semester);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'GET',
            success: function (response) {
                $('#edit_modal_body').html(response);
                $('#edit-semester-modal').modal('show');
            }
        });
    }

    function edit_lecturer(lecturer) {
        var url = '{{ route("lecturer.edit", ":id") }}';
        url = url.replace(':id', lecturer);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'GET',
            success: function (response) {
                $('#edit_modal_body').html(response);
                $('#edit-lecturer-modal').modal('show');
            }
        });
    }

    function edit_student(student) {
        var url = '{{ route("student.edit", ":id") }}';
        url = url.replace(':id', student);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'GET',
            success: function (response) {
                $('#edit_modal_body').html(response);
                $('#edit-student-modal').modal('show');
            }
        });
    }

    function edit_fee(fee) {
        var url = '{{ route("fee.edit", ":id") }}';
        url = url.replace(':id', fee);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'GET',
            success: function (response) {
                $('#edit_modal_body').html(response);
                $('#edit-fee-modal').modal('show');
            }
        });
    }

    function edit_exam(exam) {
        var url = '{{ route("timetable.edit", ":id") }}';
        url = url.replace(':id', exam);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'GET',
            success: function (response) {
                $('#edit_modal_body').html(response);
                $('#edit-exam-modal').modal('show');
            }
        });
    }

    function show_event(event) {
        var url = '{{ route("event.show", ":id") }}';
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
