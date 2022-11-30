        <!-- Main Footer -->
        {{-- <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.0-rc.1
            </div>
        </footer> --}}
        </div>


        <!-- jQuery -->
        <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Select2 -->
        <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

        <!-- DataTables -->
        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

        <!-- Bootstrap4 Duallistbox -->
        <script src="{{ asset('assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>

        <!-- InputMask -->
        <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.bundle.js') }}"></script>
        <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>

        <!-- date-range-picker -->
        <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

        <!-- bootstrap color picker -->
        <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="{{ asset('assets/dist/js/demo.js') }}"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <!-- jQuery Mapael -->

        <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/fullcalendar/main.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/fullcalendar-daygrid/main.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/fullcalendar-timegrid/main.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/fullcalendar-interaction/main.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/fullcalendar-bootstrap/main.min.js') }}"></script>
        @yield('script')

        @include('inc.messages.toastr')
        </body>

        </html>
