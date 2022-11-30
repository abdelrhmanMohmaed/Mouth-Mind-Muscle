@extends('layouts.layout')

@section('main')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css">
@endsection
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                {{-- <h1 class="m-0 text-dark">Dashboard fire</h1> --}}
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Schedule</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">

    <div class="container-fluid">
        <div class="card card-info">

            <div class="card-header d-flex flex-row bd-highlight">
                <div class="bd-highlight">
                    <h3 class="card-title"><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;Schedules</h3>
                </div>
                <div class="ml-auto bd-highlight">
                    <button class="btn btn-sm btn-secondary bg-gradient-secondary" data-toggle="modal"
                        data-target="#createSchedule">
                        Add New Schedule
                    </button>
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                @include('inc.messages.errors')
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="card card-info ">
                            <div class="card-header shadow p-3   bg-body rounded">
                                <div class="bd-highlight">
                                    <h3 class="card-title"><i class="fa fa-calendar" aria-hidden="true"></i>
                                        &nbsp;Day Schedules
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body  ">
                                @forelse ($daySchedules as $item)
                                    <tr role="row">
                                        <th scope="row">{{ $loop->iteration }} - </th>
                                        <strong data-toggle="modal" style="cursor: pointer" href="#detailsModel"
                                            data-title="{{ $item->title }}" data-description="{{ $item->description }}"
                                            data-start_time="{{ $item->start_time }}"
                                            data-patient="{{ $item->patient }}">
                                            {{ $item->title }} -
                                            {{ \Carbon\Carbon::parse($item->start_time)->format('H:i A') }}
                                        </strong><br>
                                    </tr>
                                @empty
                                    <span>No meeting today.</span>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    @if (!empty($schedules))
                        <div class="col-md-9">
                            <div id="calendar" class="fc fc-ltr fc-unthemed" style=""> </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!--/. container-fluid -->
        
        <!--Start Modal Create-->
        <div class="modal fade" id="createSchedule" tabindex="-1" aria-labelledby="createMacroLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-secondary">
                        <h5 class="modal-title" id="createMacroLabel">
                            <i class="fa fa-calendar-plus" aria-hidden="true"></i>
                            Add New Schedule
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('schedule.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title" class="col-form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    placeholder="Title" required>
                            </div>
                            <div class="form-group">
                                <label>Patients</label>
                                <select class="custom-select" name="patient_id" id="patients" required>
                                    <option disabled selected>Select Patients</option>
                                    @foreach ($patients as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->first_name }}{{ @$item->middle_name }}{{ $item->last_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="start_time" class="col-form-label">Start time</label>
                                <input type="datetime-local" class="form-control" name="start_time" id="start_time"
                                    placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <label for="finish_time" class="col-form-label">Finish time</label>
                                <input type="datetime-local" class="form-control" name="end_time" id="end_time"
                                    placeholder="Enter Name" required>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-form-label">Color</label>
                                <input type="color" class="form-control" name="color" id="color" required>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-form-label">Description</label>
                                <textarea name="description" class="form-control" id="description" cols="20" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit"
                                class="btn btn-sm btn-secondary bg-gradient-secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal Create-->

        <!--Start Modal details-->
        <div class="modal fade" id="detailsModel" tabindex="-1" aria-labelledby="scheduleDetails"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-secondary">
                        <h5 class="modal-title" id="scheduleDetails">
                            <i class="fa fa-calendar-plus" aria-hidden="true"></i>
                            Schedule Details
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="patient" class="col-form-label">Patient</label>
                            <input type="text" class="form-control" name="patient" id="patient"
                                placeholder="patient" disabled>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                placeholder="Title" disabled>
                        </div>
                        <div class="form-group">
                            <label for="start_time" class="col-form-label">Start time</label>
                            <input type="datetime-local" class="form-control" name="start_time" id="start_time"
                                disabled>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" cols="20" rows="5" disabled></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Create-->

</section>


<!-- /.content -->
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>

<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'agendaWeek,agendaDay,month'
            },
            height: 650,
            events: [
                @foreach ($schedules as $item)
                    {
                        title: '{{ $item->title }}',
                        start: '{{ $item->date . ' ' . $item->start_time }}',
                        end: '{{ $item->date . ' ' . $item->finish_time }}',
                        backgroundColor: '{{ $item->color }}', //red
                        borderColor: '#fffff',
                        url: '{{ route('schedule.edit', $item->slug) }}',
                        extendedProps: {
                            department: 'BioChemistry'
                        },
                        description: '{{ $item->description }}',
                    },
                @endforeach
            ],
            selectable: true,
            selecHelper: true,
            select: function(start, end, allDays) {
                $('#createSchedule').modal('toggle');

            }

        })
    })
</script>

<script>
    $('#detailsModel').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)

        var title = button.data('title')
        var description = button.data('description')
        var start_time = button.data('start_time')
        var patient = button.data('patient')

        var modal = $(this)

        let first_name = patient.first_name;
        let middle_name = (patient.middle_name) ? null : '';
        let last_name = patient.last_name;

        patient = first_name + " " + middle_name + " " + last_name;


        modal.find('.modal-body #title').val(title);
        modal.find('.modal-body #description').text(description);
        modal.find('.modal-body #start_time').val(start_time);
        modal.find('.modal-body #patient').val(patient);

    });
</script>
@endsection
