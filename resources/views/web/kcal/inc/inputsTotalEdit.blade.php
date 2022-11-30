<div class="total-distribution shadow p-3 mb-5 bg-white rounded ">

    <div class="switch shadow-lg mx-1 rounded bg-dark ">
        <i class="fa fa-mouse-pointer p-2 rounded" aria-hidden="true"></i>
    </div>

    {{-- start slide modal --}}
    <div class="row ">
        <div class="col-md-6">
            <div class="form-group">
                <label>INPUT KCAL</label>
                <div class="form-group">
                    <div class="input-group input-group-sm mb-3">
                        <input type="number" step="any" id="input_ideal_goal"
                            value="{{ @$patient_detail->ideal_goal }}" class="form-control bg-success text-success "
                            placeholder="0" required="" disabled>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>TOTAL KCAL</label>
                <div class="form-group">
                    <div class="input-group input-group-sm mb-3">
                        <input type="number" id="total_kcal" step="any" class="form-control" placeholder="0"
                            required="" disabled>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.input group -->
            </div>
        </div>
        {{-- title --}}
        <div class="col-md-2">
            <div class="form-group">
                <label>Total</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Ideal %</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Total Kcal</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Total Grams</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Total Exchanges</label>
            </div>
        </div>
        {{-- input cho --}}
        <div class="col-md-2 mt-1">
            <div class="form-group">
                <label>CHO</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" step="any" id="input_macro_ideal_cho"
                        value="{{ @$patient_detail->macro->ideal_cho }}" class="form-control" placeholder="0"
                        required="" disabled>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" step="any" id="total_Kcal_cho" class="form-control" placeholder="0"
                        required="" disabled>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" step="any" id="total_grams_cho_first_modal" class="form-control"
                        placeholder="0" required="" disabled>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" step="any" id="total_exchanges_cho_first_modal" class="form-control"
                        placeholder="0" required="" disabled>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        {{-- input Proteins --}}
        <div class="col-md-2">
            <div class="form-group mt-1">
                <label>Proteins</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" id="input_macro_ideal_protien"
                        value="{{ @$patient_detail->macro->ideal_protien }}" step="any" class="form-control"
                        placeholder="0" required="" disabled>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" step="any" id="total_Kcal_protien" class="form-control" placeholder="0"
                        required="" disabled>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" step="any" id="total_grams_protien_first_modal" class="form-control"
                        placeholder="0" required="" disabled>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" step="any" id="total_exchanges_protien_first_modal"
                        class="form-control" placeholder="0" required="" disabled>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        {{-- input Fat --}}
        <div class="col-md-2">
            <div class="form-group mt-1">
                <label>Fat</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" step="any" id="input_macro_ideal_fat"
                        value="{{ @$patient_detail->macro->ideal_fat }}" class="form-control" placeholder="0"
                        required="" disabled>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" step="any" id="total_Kcal_fat" class="form-control " placeholder="0"
                        required="" disabled>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" step="any" id="total_grams_fat_first_modal" class="form-control"
                        placeholder="0" required="" disabled>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                    <input type="number" step="any" id="total_exchanges_fat_first_modal" class="form-control"
                        placeholder="0" required="" disabled>
                </div>
                <!-- /.input group -->
            </div>
        </div>
    </div>
    {{-- end slide modal --}}




    {{--  --}}
    <div class="row ">
        <div class="col-md-2">

        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>CHO</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>PROT</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>FAT</label>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-2">
            <div class="form-group">
                <label>Grams</label>

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <div class="form-group">
                    <div class="input-group input-group-sm mb-3">
                        <input type="number" step="any" id="total_grams_cho_second_modal" class="form-control"
                            placeholder="0" required="" disabled>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="form-group">
                    <div class="input-group input-group-sm mb-3">
                        <input type="number" step="any" id="total_grams_prot_second_modal" class="form-control"
                            placeholder="0" required="" disabled>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <div class="form-group">
                    <div class="input-group input-group-sm mb-3">
                        <input type="number" step="any" id="total_grams_fat_second_modal" class="form-control"
                            placeholder="0" required="" disabled>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.input group -->
            </div>
        </div>
    </div>

    {{--  --}}

    <div class="row ">
        <div class="col-md-2">
            <div class="form-group">
                <label>Exch</label>

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <div class="form-group">
                    <div class="input-group input-group-sm mb-3">
                        <input type="number" step="any" id="total_exch_cho_second_modal" class="form-control"
                            placeholder="0" required="" disabled>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <div class="form-group">
                    <div class="input-group input-group-sm mb-3">
                        <input type="number" step="any" id="total_exch_prot_second_modal" class="form-control"
                            placeholder="0" required="" disabled>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <div class="form-group">
                    <div class="input-group input-group-sm mb-3">
                        <input type="number" step="any" id="total_exch_fat_second_modal" class="form-control"
                            placeholder="0" required="" disabled>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.input group -->
            </div>
        </div>
    </div>

    {{--  --}}

</div>
