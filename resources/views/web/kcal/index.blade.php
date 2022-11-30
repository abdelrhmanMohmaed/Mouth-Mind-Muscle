@extends('layouts.layout')
@section('title')
    KCAL
@endsection
@section('main')

    <style>
        .total-distribution {
            position: fixed;
            top: 75px;
            right: -650px;
            width: 650px;
            /* padding: 10px; */
            /* background: #fff; */
            z-index: 2;
            animation: 2s linear infinite;
            transition: 500ms;
            /* opacity: 0.8; */

        }

        .modalActive {
            right: 5px;
        }

        .switch {
            position: absolute;
            top: 0;
            left: -35px;
            /* padding: 10px 20px; */
            cursor: pointer;
            /* font-size: 35px; */
        }
    </style>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0 text-dark">Input Calculation</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Input Calculation</li>
                        &nbsp; &nbsp; &nbsp;
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-calculator" aria-hidden="true"></i> &nbsp;Input Calculation <span
                            id="title"></span>
                    </h3>
                </div>

                @include('inc.messages.errors')
                @include('web.kcal.inc.inputsTotal')
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">

                                {{-- start 1 --}}
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Type</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Number:</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>CHO:</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Protien:</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>FAT:</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>KCAL:</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>KCAL2:</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @dump($patient_detail) --}}
                        <div class="col-md-12">
                            <form class="row" action="{{ route('kcal.store') }}" method="POST">
                                @csrf
                                <input type="hidden" id="patient_id" value="{{ $patient_detail->patient_id }}"
                                    name="patient_id">
                                @forelse ($kcals as $item)
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <span>
                                                <strong>
                                                    {{ @$item->type }}
                                                </strong>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" name="num_{{ @$item->type }}"
                                                    id="input_{{ @$item->id }}" class="form-control "
                                                    placeholder="Enter Number" required=""
                                                    onchange="calc({{ @$item->id }})" step="any">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    {{-- start cho  --}}
                                    <input type="hidden" value="{{ @$item->cho }}" id="cho_{{ @$item->id }}">

                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" id="result_cho_{{ @$item->id }}" step="any"
                                                    class="form-control" placeholder="0" required="" disabled>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    {{-- end cho  --}}

                                    {{-- start Protien  --}}
                                    <input type="hidden" value="{{ @$item->prot }}" id="prot_{{ @$item->id }}">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" id="result_prot_{{ @$item->id }}" step="any"
                                                    class="form-control " placeholder="0" required="" disabled>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    {{-- end Protien  --}}


                                    {{-- start fat  --}}
                                    <input type="hidden" value="{{ @$item->fat }}" id="fat_{{ @$item->id }}">
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" id="result_fat_{{ @$item->id }}" step="any"
                                                    class="form-control " placeholder="0" required="" disabled>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    {{-- end fat  --}}

                                    {{-- start kcal  --}}
                                    <input type="hidden" value="{{ @$item->kcal }}" id="kcal_{{ @$item->id }}">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" id="result_kcal_{{ @$item->id }}" step="any"
                                                    class="form-control " placeholder="0" required="" disabled>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    {{-- end kcal  --}}

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" name="" id=""
                                                    value="{{ @$item->kcal }}" class="form-control " placeholder="70"
                                                    required="" disabled>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    {{-- end 1 --}}
                                @empty
                                    <h1>fire</h1>
                                @endforelse
                                <div class="col-md-12">
                                    <div class="form-group float-right">
                                        <button type="submit" class="btn btn-la btn-success bg-gradient-success">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->

    @section('script')
        <script>
            $(window).on("load", function() {
                totalKcal('total_Kcal_cho', $('#input_ideal_goal').val(), $('#input_macro_ideal_cho').val())
                totalKcal('total_Kcal_protien', $('#input_ideal_goal').val(), $('#input_macro_ideal_protien').val())
                totalKcal('total_Kcal_fat', $('#input_ideal_goal').val(), $('#input_macro_ideal_fat').val())


                totalGrams('total_grams_cho_first_modal', $('#input_ideal_goal').val(), $('#input_macro_ideal_cho')
                    .val(), 4)
                totalGrams('total_grams_protien_first_modal', $('#input_ideal_goal').val(), $(
                    '#input_macro_ideal_protien').val(), 4)
                totalGrams('total_grams_fat_first_modal', $('#input_ideal_goal').val(), $('#input_macro_ideal_fat')
                    .val(), 9)

                totalExchanges('total_exchanges_cho_first_modal', 'total_grams_cho_first_modal', 15);
                totalExchanges('total_exchanges_protien_first_modal', 'total_grams_protien_first_modal', 7);
                totalExchanges('total_exchanges_fat_first_modal', 'total_grams_fat_first_modal', 5);

                $('.layOut').fadeOut(600);
                $(".total-distribution").toggleClass("modalActive");
            });


            function calc(params) {

                var input_value = $("#input_" + params).val();
                var cho_value = $("#cho_" + params).val();
                var result_cho = (input_value * cho_value);
                $("#result_cho_" + params).val(parseFloat(result_cho).toFixed(3));

                var prot_value = $("#prot_" + params).val();
                var result_prot = (input_value * prot_value);
                $("#result_prot_" + params).val(parseFloat(result_prot).toFixed(3));

                var fat_value = $("#fat_" + params).val();
                var result_fat = (input_value * fat_value);
                $("#result_fat_" + params).val(parseFloat(result_fat).toFixed(3));

                var kcal_value = $("#kcal_" + params).val();
                let result_kcal = (input_value * kcal_value);
                $("#result_kcal_" + params).val(parseFloat(result_kcal).toFixed(3));


                // total calc and First Second modal
                TotalCalcFirstModal('result_kcal_', 'input_ideal_goal', 'total_kcal');

                TotalSecondModalGrams('result_cho_', 'total_grams_cho_first_modal', 'total_grams_cho_second_modal');
                TotalSecondModalGrams('result_prot_', 'total_grams_protien_first_modal', 'total_grams_prot_second_modal');
                TotalSecondModalGrams('result_fat_', 'total_grams_fat_first_modal', 'total_grams_fat_second_modal');


                TotalSecondModalExch('total_grams_cho_second_modal', 'total_exch_cho_second_modal', 15);
                TotalSecondModalExch('total_grams_prot_second_modal', 'total_exch_prot_second_modal', 7);
                TotalSecondModalExch('total_grams_fat_second_modal', 'total_exch_fat_second_modal', 5);

            }


            // start inputs modal
            $('body').on("click", ".switch", function() {
                $(".total-distribution").toggleClass("modalActive");
            });
            //end inputs modal


            //helpers fun
            //start calc first and second modal and send result
            function TotalCalcFirstModal(id, maxId, total) {
                let sum = 0;
                @foreach ($kcals as $item)
                    var val = $("#" + id + "{{ $item->id }}").val();
                    value = parseFloat(val).toFixed(3);
                    if (value == 'NaN') {
                        value = 0;
                    }
                    sum += +value;
                @endforeach

                var currentValue = $("#" + maxId).val();
                $("#" + total).val(parseFloat(sum).toFixed(3));

                (currentValue < sum) ? $("#" + total).addClass("bg-danger"): $("#" + total).removeClass("bg-danger");
            }

            function TotalSecondModalGrams(id, maxId, total) {
                let sum = 0;
                @foreach ($kcals as $item)
                    var val = $("#" + id + "{{ $item->id }}").val();
                    value = parseFloat(val).toFixed(3);
                    if (value == 'NaN') {
                        value = 0;
                    }
                    sum += +value;
                @endforeach

                var currentValue = $("#" + maxId).val();
                let result = currentValue - sum;
                $("#" + total).val(parseFloat(result).toFixed(3));
                (result <= 0) ? $("#" + total).addClass("bg-danger"): $("#" + total).removeClass("bg-danger");
            }

            function TotalSecondModalExch(vGrams, result_input, num) {
                var input_value = $("#" + vGrams).val();
                var result = input_value / num;
                $("#" + result_input).val(parseFloat(result).toFixed(3));
                (input_value > 0) ? $("#" + result_input).addClass("bg-danger"): $("#" + result_input).removeClass("bg-danger");
            }
            //end calc first and second modal and send result

            // start Total Kcal
            function totalKcal(id, ideal_goal, feild) {
                let result = ideal_goal * feild / 100;
                $('#' + id).val(parseFloat(result).toFixed(3));
            }
            // end Total Kcal

            // start Total Grams
            function totalGrams(id, ideal_goal, feild, num) {
                let result = ideal_goal * (feild / 100) / num;
                $('#' + id).val(parseFloat(result).toFixed(3));
            }
            // end Total Grams

            // start Total Exchanges
            function totalExchanges(idResault, feild, num) {
                let result = $('#' + feild).val() / num;
                $('#' + idResault).val(parseFloat(result).toFixed(3));
            }
            // end Total Exchanges
        </script>
    @endsection
@endsection
