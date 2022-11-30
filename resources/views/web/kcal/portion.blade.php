@extends('layouts.layout')
@section('title')
    Porion Distribution
@endsection
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
                        <li class="breadcrumb-item active">Portion Distribution</li>
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
                        <i class="fa fa-heartbeat" aria-hidden="true" style="user-select: auto;"></i> &nbsp;Portion
                        Distribution
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row pl-1">
                                {{-- start 1 --}}
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>EXCHANGE</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>TOTAL NUMBER</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>BREAKFAST TOTAL</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>SNACK1 TOTAL</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>LUNCH TOTAL</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>SNACK2 TOTAL</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>DINNER TOTAL</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>SNACK3 TOTAL</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>CHECK CELL</label>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-md-2">
                            @forelse ($kcals as $item)
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="form-control-plaintext">
                                                <strong>
                                                    {{ @$item->type }}
                                                </strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h1>No data here</h1>
                            @endforelse
                        </div>
                        {{-- start number of db --}}
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_milk_s"
                                        value="{{ $InputCal->milk_s }}" class="form-control " placeholder="" required=""
                                        step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_milk_l"
                                        value="{{ $InputCal->milk_l }}" class="form-control " placeholder="" required=""
                                        step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_milk_f"
                                        value="{{ $InputCal->milk_f }}" class="form-control " placeholder="" required=""
                                        step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_vegetable"
                                        value="{{ $InputCal->vegetable }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_fruit"
                                        value="{{ $InputCal->fruit }}" class="form-control " placeholder="" required=""
                                        step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_starch"
                                        value="{{ $InputCal->starch }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_proteins_l"
                                        value="{{ $InputCal->proteins_l }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_proteins_m"
                                        value="{{ $InputCal->proteins_m }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_proteins_h"
                                        value="{{ $InputCal->proteins_h }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_fat"
                                        value="{{ $InputCal->fat }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_halfstlmfat_s"
                                        value="{{ $InputCal->halfstlmfat_s }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_halfstlmfat_a"
                                        value="{{ $InputCal->halfstlmfat_a }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_stlmfat_p"
                                        class="form-control " value="{{ $InputCal->stlmfat_p }}" placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_stlmfat_f"
                                        value="{{ $InputCal->stlmfat_f }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_beverages"
                                        value="{{ $InputCal->beverages }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_alcohol"
                                        value="{{ $InputCal->alcohol }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_cho"
                                        value="{{ $InputCal->cho }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_miscellaneous"
                                        value="{{ $InputCal->miscellaneous }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" min="1" name="" id="db_supplements"
                                        value="{{ $InputCal->supplements }}" class="form-control " placeholder=""
                                        required="" step="any" disabled>
                                </div>
                            </div>
                        </div>
                        {{-- end number of db --}}
                        {{-- <form action="{{ route('test') }}" method="GET"> --}}
                        {{-- start BREAKFAST --}}

                            <div class="col-md-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="bf_Milk_s" id="bf_Milk_s"
                                            class="form-control keupinput" placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="bf_Milk_l" id="bf_Milk_l"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="bf_Milk_f" id="bf_Milk_f"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="bf_vegetable" id="bf_vegetable"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="bf_fruit" id="bf_fruit"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="bf_starch" id="bf_starch"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="bf_proteins_l" id="bf_proteins_l"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="bf_proteins_m" id="bf_proteins_m"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="bf_proteins_h" id="bf_proteins_h"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="bf_fat" id="bf_fat"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="bf_halfstlmfat_s"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="bf_halfstlmfat_a"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="bf_stlmfat_p"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="bf_stlmfat_f"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="bf_beverages"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="bf_alcohol"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="bf_cho"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="bf_miscellaneous"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="bf_supplements"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            {{-- end BREAKFAST --}}
                            {{-- start SNACK1  --}}
                            <div class="col-md-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_Milk_s" id="s1_Milk_s"
                                            class="form-control keupinput" placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_Milk_l" id="s1_Milk_l"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_Milk_f" id="s1_Milk_f"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_vegetable" id="s1_vegetable"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_fruit" id="s1_fruit"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_starch" id="s1_starch"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_proteins_l" id="s1_proteins_l"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_proteins_m" id="s1_proteins_m"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_proteins_h" id="s1_proteins_h"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_fat" id="s1_fat"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_halfstlmfat_s"
                                            id="s1_halfstlmfat_s" class="form-control " placeholder="" required=""
                                            step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_halfstlmfat_a"
                                            id="s1_halfstlmfat_a" class="form-control " placeholder="" required=""
                                            step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_stlmfat_p" id="s1_stlmfat_p"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_stlmfat_f" id="s1_stlmfat_f"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_beverages" id="s1_beverages"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_alcohol" id="s1_alcohol"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_cho" id="s1_cho"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_miscellaneous"
                                            id="s1_miscellaneous" class="form-control " placeholder="" required=""
                                            step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="s1_supplements" id="s1_supplements"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            {{-- end SNACK1  --}}

                            {{-- start LUNCH  --}}
                            <div class="col-md-1">

                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_Milk_s"
                                            class="form-control keupinput" placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_Milk_l"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_Milk_f"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_vegetable"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_fruit"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_starch"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_proteins_l"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_proteins_m"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_proteins_h"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_fat"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_halfstlmfat_s"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_halfstlmfat_a"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_stlmfat_p"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_stlmfat_f"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_beverages"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_alcohol"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_cho"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_miscellaneous"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="lunch_supplements"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            {{-- end LUNCH  --}}

                            {{-- start SNACK2  --}}
                            <div class="col-md-1">

                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_Milk_s"
                                            class="form-control keupinput" placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_Milk_l"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_Milk_f"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_vegetable"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_fruit"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_starch"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_proteins_l"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_proteins_m"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_proteins_h"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_fat"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_halfstlmfat_s"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_halfstlmfat_a"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_stlmfat_p"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_stlmfat_f"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_beverages"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_alcohol"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_cho"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_miscellaneous"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s2_supplements"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            {{-- end SNACK2  --}}

                            {{-- start DINNER  --}}
                            <div class="col-md-1">

                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_Milk_s"
                                            class="form-control keupinput" placeholder="" required=""
                                            step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_Milk_l"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_Milk_f"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_vegetable"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_fruit"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_starch"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_proteins_l"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_proteins_m"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_proteins_h"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_fat"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_halfstlmfat_s"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_halfstlmfat_a"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_stlmfat_p"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_stlmfat_f"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_beverages"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_alcohol"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_cho"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_miscellaneous"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="di_supplements"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            {{-- end DINNER  --}}

                            {{-- start SNACK3  --}}
                            <div class="col-md-1">

                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_Milk_s"
                                            class="form-control keupinput" placeholder="" required=""
                                            step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_Milk_l"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_Milk_f"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_vegetable"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_fruit"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_starch"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_proteins_l"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_proteins_m"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_proteins_h"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_fat"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_halfstlmfat_s"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_halfstlmfat_a"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_stlmfat_p"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_stlmfat_f"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_beverages"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_alcohol"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_cho"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_miscellaneous"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="s3_supplements"
                                            class="form-control " placeholder="" required="" step="any">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            {{-- end SNACK3  --}}

                            {{-- start CHECKCELL --}}
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="check_cell_milk_s"
                                            value="{{ $InputCal->milk_s }}" class="form-control " placeholder=""
                                            required="" step="any" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="check_cell_milk_l"
                                            value="{{ $InputCal->milk_l }}" class="form-control " placeholder=""
                                            required="" step="any" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="check_cell_milk_f"
                                            value="{{ $InputCal->milk_f }}" class="form-control " placeholder=""
                                            required="" step="any" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name=""
                                            id="check_cell_vegetable" value="{{ $InputCal->vegetable }}"
                                            class="form-control " placeholder="" required="" step="any"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="check_cell_fruit"
                                            value="{{ $InputCal->fruit }}" class="form-control " placeholder=""
                                            required="" step="any" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="check_cell_starch"
                                            value="{{ $InputCal->starch }}" class="form-control " placeholder=""
                                            required="" step="any" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name=""
                                            id="check_cell_proteins_l" value="{{ $InputCal->proteins_l }}"
                                            class="form-control " placeholder="" required="" step="any"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name=""
                                            id="check_cell_proteins_m" value="{{ $InputCal->proteins_m }}"
                                            class="form-control " placeholder="" required="" step="any"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name=""
                                            id="check_cell_proteins_h" value="{{ $InputCal->proteins_h }}"
                                            class="form-control " placeholder="" required="" step="any"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="check_cell_fat"
                                            value="{{ $InputCal->fat }}" class="form-control " placeholder=""
                                            required="" step="any" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name=""
                                            id="check_cell_halfstlmfat_s" value="{{ $InputCal->halfstlmfat_s }}"
                                            class="form-control " placeholder="" required="" step="any"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name=""
                                            id="check_cell_halfstlmfat_a" value="{{ $InputCal->halfstlmfat_a }}"
                                            class="form-control " placeholder="" required="" step="any"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name=""
                                            id="check_cell_stlmfat_p" value="{{ $InputCal->stlmfat_p }}"
                                            class="form-control " placeholder="" required="" step="any"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name=""
                                            id="check_cell_stlmfat_f" value="{{ $InputCal->stlmfat_f }}"
                                            class="form-control " placeholder="" required="" step="any"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name=""
                                            id="check_cell_beverages" value="{{ $InputCal->beverages }}"
                                            class="form-control " placeholder="" required="" step="any"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="check_cell_alcohol"
                                            value="{{ $InputCal->alcohol }}" class="form-control " placeholder=""
                                            required="" step="any" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name="" id="check_cell_cho"
                                            class="form-control " value="{{ $InputCal->cho }}" placeholder=""
                                            required="" step="any" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name=""
                                            id="check_cell_miscellaneous" value="{{ $InputCal->miscellaneous }}"
                                            class="form-control " placeholder="" required="" step="any"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="1" name=""
                                            id="check_cell_supplements" value="{{ $InputCal->supplements }}"
                                            class="form-control " placeholder="" required="" step="any"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            {{-- end CHECKCELL --}}
                            <div class="col-md-12">
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-la btn-success bg-gradient-success">
                                        Submit
                                    </button>
                                </div>
                            </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
    @section('script')
        <script src="{{ asset('assets/js/portion/index.js') }}"></script>
        <script>
            // start inputs modal
            function calcPortion(
                firetField, secondField, thirdField,
                fourthlyField, fifthField, sixthlyField,
                cuurent, resultInput
            ) {
                var fields = [firetField, secondField, thirdField, fourthlyField, fifthField, sixthlyField];

                let sum = 0;
                for (var i = 0; i < fields.length; i++) {
                    var val = $('#' + fields[i]).val();
                    value = parseFloat(val).toFixed(3);

                    if (value == 'NaN') {
                        value = 0;
                    }
                    sum += +value;
                }

                let cuurent_val = $("#" + cuurent).val();

                let result = cuurent_val - sum;

                (result < 0) ? $("#" + resultInput).addClass("bg-danger"): $("#" + resultInput).removeClass("bg-danger");
                $("#" + resultInput).val(result);

            };
            //end inputs modal
        </script>
    @endsection
@endsection
