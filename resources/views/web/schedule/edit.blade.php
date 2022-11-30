@extends('layouts.layout')

@section('main')
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
                        <li class="breadcrumb-item"><a href="{{ route('schedule.index') }}">Schedules</a></li>
                        <li class="breadcrumb-item active">Update Schedule</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content ">
        <div class="container-fluid   align-items-center justify-content-center">
            <!-- Info boxes -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;
                        Update Schedule: <strong>{{ $schedule->title }}</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <form action="{{ route('schedule.update') }}" method="POST" class="col-md-12">
                            @csrf
                            <input type="hidden" name="slug" value="{{ $schedule->slug }}">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input value="{{ $schedule->title }}" type="text" name="title" id="title"
                                        class="form-control" placeholder="Title">
                                    @error('title')
                                        <span class="text-danger">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Patients</label>
                                    <select class="custom-select" name="patient_id" id="patients" required>
                                        <option disabled selected>Select Patients</option>
                                        @foreach ($patients as $item)
                                            <option value="{{ $item->id }}" @if ($schedule->patient->id == $item->id) selected @endif>
                                                {{ $item->first_name }}{{ @$item->middle_name }}{{ $item->last_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Start Time</label>
                                    <input value="{{ $schedule->start_time }}" type="datetime-local" name="start_time"
                                        id="start_time" class="form-control" placeholder="start time">
                                    @error('start_time')
                                        <span class="text-danger">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>End Time</label>
                                    <input value="{{ $schedule->finish_time }}" type="datetime-local" name="end_time"
                                        id="end_time" class="form-control" placeholder="End time">
                                    @error('end_time')
                                        <span class="text-danger">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input value="{{ $schedule->color }}" type="color" name="color" id="color"
                                        class="form-control" placeholder="Color">
                                    @error('color')
                                        <span class="text-danger">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10"> {{ $schedule->description }} </textarea>
                                    @error('description')
                                        <span class="text-danger">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-sm btn-success bg-gradient-success">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!--/. container-fluid -->
    </section>


    <!-- /.content -->
@endsection
