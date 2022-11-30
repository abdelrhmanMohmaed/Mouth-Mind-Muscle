@extends('layouts.layout')
@section('title')
    Patient Details
@endsection
@section('main')
    <style>
        .validtion,
        .age_range_modal,
        .fasting_modal {
            display: none;
        }
    </style>
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
                        <li class="breadcrumb-item active">New Patient Details</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        {{-- <i class="fa fa-info-circle" aria-hidden="true"></i> --}}
                        <i class="fa fa-id-card" aria-hidden="true"></i> &nbsp;
                        New Patient Details
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('patient.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <!-- first_name input -->
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}"
                                        class="form-control" placeholder="Enter First Name" required>
                                    @error('first_name')
                                        <span class="text-danger">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <!-- middle_name input -->
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" name="middle_name" id="middle_name" class="form-control"
                                        placeholder="Enter Middle Name">
                                    @error('middle_name')
                                        <span class="text-danger">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-5">
                                <!-- last_name input -->
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                        placeholder="Enter Last Name" required>
                                    @error('last_name')
                                        <span class="text-danger">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Birthday</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="date" id="birthday" name="birthday"
                                                class="form-control float-right" required>
                                        </div>
                                        @error('birthday')
                                            <span class="text-danger">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                {{ $message }}</span>
                                        @enderror
                                        <div class="validtion bg-danger border rounded mt-1 p-2  birthday">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            Please select your birthday before (Activity, Goal)
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>E-Mail:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Email" required>
                                            @error('email')
                                                <span class="text-danger">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Phone:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="number" name="phone" id="phone" class="form-control"
                                                data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask=""
                                                im-insert="true" placeholder="(961) 70 123456" required>
                                            @error('phone')
                                                <span class="text-danger">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <div class="input-group">
                                            <input type="text" name="address" id="address" class="form-control"
                                                placeholder="Address" required>
                                        </div>
                                        @error('address')
                                            <span class="text-danger">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                {{ $message }}</span>
                                        @enderror
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Macros</label>
                                        <select class="custom-select" name="macros" id="macros" required>
                                            <option disabled selected>Select Macros</option>
                                            @foreach ($macros as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('macros')
                                            <span class="text-danger">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex flex-row bd-highlight">
                                        <div class="px-1 bd-highlight">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-sm btn-danger bg-gradient-danger"
                                                    data-toggle="modal" data-target="#allergansModal">
                                                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Allergans
                                                </button>
                                            </div>
                                        </div>
                                        <div class="px-1 bd-highlight">
                                            <div class="form-group">
                                                <button type="button"
                                                    class="btn btn-sm btn-secondary bg-gradient-secondary"
                                                    data-toggle="modal" data-target="#diteTypeModal">
                                                    <i class="fa fa-filter" aria-hidden="true"></i>
                                                    {{-- <i class="fa fa-heart" aria-hidden="true"></i>  --}}
                                                    Diet Type
                                                </button>
                                                <small class="text-warning">&#128072; Please select (Diet Type).</small>
                                            </div>
                                        </div>
                                    </div>
                                    @error('diet_type')
                                        <span class="text-danger">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Height(cm):</label>
                                            <div class="input-group">
                                                <input type="number" name="height" id="height" class="form-control"
                                                    placeholder="160" required>
                                            </div>
                                            @error('height')
                                                <span class="text-danger">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                            <div class="validtion bg-danger border rounded mt-1 p-2  height">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                Please select your Height before (Activity, Goal)
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Weight(kg):</label>
                                            <div class="input-group">
                                                <input type="number" name="weight" id="weight"
                                                    class="form-control " placeholder="70" required>
                                            </div>
                                            @error('weight')
                                                <span class="text-danger">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                            <div class="validtion bg-danger border rounded mt-1 p-2  weight">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                Please select your Weight before (Activity, Goal)
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="custom-select" name="gender" id="gender" required>
                                                <option selected disabled>Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                            @error('gender')
                                                <span class="text-danger">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                            <div class="validtion bg-danger border rounded mt-1 p-2  gender">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                Please select your birthday before (Activity, Goal)
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Activities:</label>
                                            <select class="custom-select" id="activity" name="activity"
                                                onchange="calcActivity()" required>
                                                <option selected disabled>Select Activity</option>
                                                @foreach ($activities as $item)
                                                    <option value="{{ $item->value }}">{{ $item->value }}</option>
                                                @endforeach
                                            </select>
                                            @error('activity')
                                                <span class="text-danger">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>BMR:</label>
                                            <input type="text" class="form-control" step="any" id="bmr"
                                                disabled>
                                            @error('bmr')
                                                <span class="text-danger">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                            <input type="hidden" class="form-control" step="any" name="bmr"
                                                id="bmr_hide">
                                        </div>
                                        <div class="form-group">
                                            <label>TDE:</label>
                                            <input type="text" class="form-control " step="any" id="tde"
                                                disabled>
                                            @error('tde')
                                                <span class="text-danger">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                            <input type="hidden" class="form-control " step="any" name="tde"
                                                id="tde_hide">
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Goal:</label>
                                            <select class="custom-select" name="goal" id="goal"
                                                onchange="calcGoals()" required>
                                                <option selected disabled>Select Activity</option>
                                                <option value="loss">Weight loss</option>
                                                <option value="gain">Weight Gain</option>
                                                <option value="maintenance">Maintenance</option>
                                            </select>
                                            @error('goal')
                                                <span class="text-danger">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Start Goal:</label>
                                            <input type="text" class="form-control " step="any" id="start_goal"
                                                disabled>

                                            @error('start_goal')
                                                <span class="text-danger">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                            <input type="hidden" class="form-control " step="any" name="start_goal"
                                                id="start_goal_hide">
                                        </div>
                                        <div class="form-group">
                                            <label>Ideal Goal:</label>
                                            <input type="text" class="form-control " step="any" id="ideal_goal"
                                                disabled>
                                            @error('ideal_goal')
                                                <span class="text-danger">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                            <input type="hidden" class="form-control " step="any" name="ideal_goal"
                                                id="ideal_goal_hide">
                                        </div>
                                        <div class="form-group">
                                            <label>Max Goal:</label>
                                            <input type="text" class="form-control " step="any" id="max_goal"
                                                disabled>
                                            @error('max_goal')
                                                <span class="text-danger">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                            <input type="hidden" class="form-control " step="any" name="max_goal"
                                                id="max_goal_hide">
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="form-group float-right">
                                            <button type="submit" class="btn btn-sm btn-success bg-gradient-success">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Allergans-->
                        <div class="modal fade " id="allergansModal" tabindex="-1"
                            aria-labelledby="allergansModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger">
                                        <h5 class="modal-title text-white" id="allergansModalLabel">
                                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Allergans
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-check">
                                            @foreach ($allergans as $item)
                                                <input class="form-check-input" name="allergans[]" type="checkbox"
                                                    id="{{ $item->id }}" value="{{ $item->id }}">
                                                <label class="form-check-label"
                                                    for="{{ $item->id }}">{{ $item->name }}</label>
                                                <br>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal diteType-->
                        <div class="modal fade " id="diteTypeModal" tabindex="-1" aria-labelledby="diteTypeModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-secondary">
                                        <h5 class="modal-title text-white" id="diteTypeModalLabel">
                                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Dite Type
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Dite Types</label>
                                            <select class="custom-select" name="diet_type" id="diet_types">
                                                <option disabled selected>Select Dite Types</option>
                                                @foreach ($dietTypes as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group age_range_modal">
                                            <label>Age Range</label>
                                            <select class="custom-select" name="age_range" id="age_range">
                                                {{-- <option disabled selected>Select Age Range</option>
                                                <option value="10-15 YEARS OLD">10-15 YEARS OLD</option>
                                                <option value="15-20 YEARS OLD">15-20 YEARS OLD</option>
                                                <option value="20-25 YRS OLD">20-25 YRS OLD</option>
                                                <option value="25-30 YEARS OLD">25-30 YEARS OLD</option>
                                                <option value="30-35 YEARS OLD">30-35 YEARS OLD</option>
                                                <option value="35-40 YEARS OLD">35-40 YEARS OLD</option>
                                                <option value="40-45 YEARS OLD">40-45 YEARS OLD</option>
                                                <option value="45-50 YRS OLD">45-50 YRS OLD</option>
                                                <option value="50-55 YEARS OLD">50-55 YEARS OLD</option>
                                                <option value="55-60 YEARS OLD">55-60 YEARS OLD</option>
                                                <option value="65+ YEARS OLD">65+ YEARS OLD</option> --}}
                                            </select>
                                        </div>

                                        <div class="form-group fasting_modal">
                                            <label>Fasting</label>
                                            <select class="custom-select" name="fasting" id="fasting">
                                                <option disabled selected>Select Fasting</option>
                                                <option value="IF1 14:10">IF1 14:10</option>
                                                <option value="IF2 18:06">IF2 18:06</option>
                                                <option value="IF3 20:04">IF3 20:04</option>
                                                <option value="IF4 16:08">IF4 16:08</option>
                                                <option value="IF5 05:02">IF5 05:02</option>
                                                <option value="IF6 EAT-STOP-EAT">IF6 EAT-STOP-EAT</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!--/. container-fluid -->
    </section>
@section('script')
    <script src="{{ asset('assets/js/patient/index.js') }}"></script>
    <script>
        $('body').on("change", "#diet_types", function() {
            var diet_id = $('#diet_types').val();
            if (diet_id == 1) {
                $.ajax({
                    url: '{{ url('') }}/' + 'get/ageRange/' + diet_id,
                    type: 'get',
                    dataType: 'html',
                    success: function(data) {
                        $("#age_range").html(data);
                        $(".age_range_modal").slideDown(300);
                    }
                });
            } else {
                $(".fasting_modal").slideUp(400);
                $(".age_range_modal").slideUp(400);
            };
        });

        $('body').on("change", "#age_range", function() {
            var diet_id = $('#diet_types').val();
            var age_range = $('#diet_types').val();

            if (diet_id == 1 && age_range != '') {
                $(".fasting_modal").slideDown(500);
            } else {
                $(".fasting_modal").slideUp(400);
            }
        });
    </script>
@endsection


@endsection
