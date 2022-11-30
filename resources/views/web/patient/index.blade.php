@extends('layouts.layout')
@section('title')
    Patients
@endsection
@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="text-dark">Dashboard fire</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        {{-- <li class="breadcrumb-item active">Dashboard v2</li> --}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="px-2">
            <!-- error messages -->
            @include('inc.messages.errors')
        </div>

        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header d-flex flex-row bd-highlight">
                    <div class="bd-highlight">
                        <h3 class="card-title"><i class="fa fa-id-card" aria-hidden="true"></i> &nbsp;Patients Table</h3>
                    </div>
                    <div class="ml-auto bd-highlight">
                        <a href="{{ route('patient.details') }}" class="btn btn-sm btn-secondary bg-gradient-secondary">
                            Add New Patient
                        </a>
                    </div>

                </div>
                {{-- @include('inc.messages.errors') --}}
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="tablePateint"
                                    class="table table-bordered table-striped dataTable table table-hover" role="grid"
                                    aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Birthday</th>
                                            <th>Phone</th>
                                            <th>Address</th>

                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($patients as $item)
                                            <tr role="row">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $item->first_name }}
                                                    {{ @$item->middle_name }}
                                                    {{ @$item->last_name }}
                                                </td>

                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->birthday }}</td>
                                                <td>{{ $item->phone }}</td>

                                                <td>{{ $item->address }}</td>
                                                <td>{{ $item->gender }}</td>
                                                <td>
                                                    @if (empty($item->inputCalc))
                                                        <a href="{{ route('kcal.index', $item->details->slug) }}"
                                                            class="btn btn-sm btn-danger bg-gradient-secondary"
                                                            title="Input Calculation ">
                                                            <i class="fa fa-calculator" aria-hidden="true"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('kcal.edit', $item->details->slug) }}"
                                                            class="btn btn-sm btn-danger bg-gradient-info"
                                                            title="Edit Input Calculation">
                                                            <i class="fa fa-edit text-white" aria-hidden="true"></i>
                                                        </a>
                                                    @endif
                                                    <a href="{{ route('portion.index', $item->details->slug) }}"
                                                        class="btn btn-sm btn-danger bg-gradient-info"
                                                        title="Portion Distribution">
                                                        <i class="fa fa-heartbeat" aria-hidden="true"
                                                            style="user-select: auto;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <span>No Data Here</span>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->

    <!-- /.content -->
    @section('script')
        <script>
            $(function() {
                $("#tablePateint").DataTable();
            });
        </script>
    @endsection
@endsection
