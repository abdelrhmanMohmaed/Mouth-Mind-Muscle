@extends('layouts.layout')
@section('title')
    Macro Distribution
@endsection
@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0">Macro Distribution</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">MacroDistribution</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="px-2">
            <!-- error messages -->
            @include('inc.messages.errors')
        </div>

        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header d-flex flex-row bd-highlight">
                    <div class="px-1 bd-highlight">
                        <h3 class="card-title"><i class="fa fa-cogs" aria-hidden="true"></i> &nbsp;Macro Table</h3>
                    </div>
                    <div class="ml-auto bd-highlight">
                        <button class="btn btn-sm btn-secondary bg-gradient-secondary" data-toggle="modal"
                            data-target="#createMacro">
                            Add New Macro
                        </button>
                    </div>
                </div>
                {{-- @include('inc.messages.errors') --}}
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="tableMacro" class="table table-bordered table-striped dataTable table table-hover"
                                    role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Min CHO</th>
                                            <th>Ideal CHO</th>
                                            <th>Max CHO</th>

                                            <th>Min Protien</th>
                                            <th>Ideal Protien</th>
                                            <th>Max Protien</th>

                                            <th>Min Fat</th>
                                            <th>Ideal Fat</th>
                                            <th>Max Fat</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($macros as $item)
                                            <tr role="row">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $item->name }}</td>

                                                <td>{{ $item->min_cho }}</td>
                                                <td>{{ $item->ideal_cho }}</td>
                                                <td>{{ $item->max_cho }}</td>

                                                <td>{{ $item->min_protien }}</td>
                                                <td>{{ $item->ideal_protien }}</td>
                                                <td>{{ $item->max_protien }}</td>

                                                <td>{{ $item->min_fat }}</td>
                                                <td>{{ $item->ideal_fat }}</td>
                                                <td>{{ $item->max_fat }}</td>

                                                <td>

                                                    <button class="btn btn-sm btn-success bg-gradient-success"
                                                        data-toggle="modal" href="#editModel" title="Edit"
                                                        data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                                        data-min_cho="{{ $item->min_cho }}"
                                                        data-ideal_cho="{{ $item->ideal_cho }}"
                                                        data-max_cho="{{ $item->max_cho }}"
                                                        data-min_protien="{{ $item->min_protien }}"
                                                        data-ideal_protien="{{ $item->ideal_protien }}"
                                                        data-max_protien="{{ $item->max_protien }}"
                                                        data-min_fat="{{ $item->min_fat }}"
                                                        data-ideal_fat="{{ $item->ideal_fat }}"
                                                        data-max_fat="{{ $item->max_fat }}">

                                                        <i class="fa fa-edit text-white" aria-hidden="true"></i>
                                                    </button>


                                                    <button class="btn btn-sm btn-danger bg-gradient-danger"
                                                        data-toggle="modal" href="#deleteModel" title="delete"
                                                        data-id="{{ $item->id }}">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>

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


                <!--Start Modal Create-->
                <div class="modal fade" id="createMacro" tabindex="-1" aria-labelledby="createMacroLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-secondary">
                                <h5 class="modal-title" id="createMacroLabel">
                                    <i class="fa fa-cogs" aria-hidden="true"></i>
                                    Add New Macro
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('macro.store') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Macro Name:</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter Name" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">CHO:</label>
                                        <input type="number" step="any" class="form-control mb-2" name="min_cho"
                                            placeholder="CHO Min" required>
                                        <input type="number" step="any" class="form-control mb-2" name="ideal_cho"
                                            placeholder="CHO Ideal" required>
                                        <input type="number" step="any" class="form-control mb-2" name="max_cho"
                                            placeholder="CHO Max" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Protien:</label>
                                        <input type="number" step="any" class="form-control mb-2"
                                            name="min_protien" placeholder="Protien Min" required>
                                        <input type="number" step="any" class="form-control mb-2"
                                            name="ideal_protien" placeholder="Protien Ideal" required>
                                        <input type="number" step="any" class="form-control mb-2"
                                            name="max_protien" placeholder="Protien Max" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Fat:</label>
                                        <input type="number" step="any" class="form-control mb-2" name="min_fat"
                                            placeholder="Fat Min" required>
                                        <input type="number" step="any" class="form-control mb-2" name="ideal_fat"
                                            placeholder="Fat Ideal" required>
                                        <input type="number" step="any" class="form-control mb-2" name="max_fat"
                                            placeholder="Fat Max" required>
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

                <!--Start Modal edit-->
                <div class="modal fade" id="editModel" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h5 class="modal-title text-white" id="createMacroLabel">
                                    <i class="fa fa-edit text-white" aria-hidden="true"></i>
                                    Edit Macro
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('macro.update') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="id" id="id">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Macro Name:</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter Name" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">CHO:</label>
                                        <input type="number" step="any" class="form-control mb-2" name="min_cho"
                                            id="min_cho" placeholder="CHO Min" required>
                                        <input type="number" step="any" class="form-control mb-2" name="ideal_cho"
                                            id="ideal_cho" placeholder="CHO Ideal" required>
                                        <input type="number" step="any" class="form-control mb-2" name="max_cho"
                                            id="max_cho" placeholder="CHO Max" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Protien:</label>
                                        <input type="number" step="any" class="form-control mb-2"
                                            name="min_protien" id="min_protien" placeholder="Protien Min" required>
                                        <input type="number" step="any" class="form-control mb-2"
                                            name="ideal_protien" id="ideal_protien" placeholder="Protien Ideal" required>
                                        <input type="number" step="any" class="form-control mb-2"
                                            name="max_protien" id="max_protien" placeholder="Protien Max" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">Fat:</label>
                                        <input type="number" step="any" class="form-control mb-2" name="min_fat"
                                            id="min_fat" placeholder="Fat Min" required>
                                        <input type="number" step="any" class="form-control mb-2" name="ideal_fat"
                                            id="ideal_fat" placeholder="Fat Ideal" required>
                                        <input type="number" step="any" class="form-control mb-2" name="max_fat"
                                            id="max_fat" placeholder="Fat Max" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit"
                                        class="btn btn-sm btn-success bg-gradient-success text-white">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Modal edit-->

                <!--Start Modal delete-->
                <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title text-white" id="createMacroLabel">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    Delete Macro
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('macro.delete') }}" method="get">
                                <div class="modal-content">
                                    <div class="modal-body w-100 text-center">
                                        <input type="hidden" name="macro_id" id="macro_id">
                                        <h4 class="w-100 text-center text-danger">
                                            Are you sure want to delete this Macro ?
                                        </h4>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-sm btn-danger bg-gradient-danger">Yes
                                            Delete</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Modal delete-->

                <!-- /.card-body -->
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->

    @section('script')
        <script src="{{ asset('assets/js/macro/index.js') }}"></script>
    @endsection

@endsection
