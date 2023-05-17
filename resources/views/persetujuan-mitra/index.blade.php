@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Data Pendaftaran Mitra</h3>
                <br>
                <table id="table_mitra" class="table table-striped table-bordered display text-center"
                    width="100%" cellspacing="0">
                    <thead style="background-color: #439a97">
                        <tr>
                            <th class="text-center">Nama Venue</th>
                            <th class="text-center">Jam Buka</th>
                            <th class="text-center">Jumlah Lapangan</th>
                            <th class="text-center">Mulai Harga Sewa Lapangan</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function(){  
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }); 
                var table_mitra = $('#table_mitra').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    ajax: {
                        url: "{{route('index-sewa')}}",
                        type: 'GET',
                    },
                    columns: [
                        {data: 'venue_name', name: 'venue_name'},
                        {data: 'open_hour', name: 'open_hour'},
                        {data: 'field_qty', name: 'field_qty'},
                        {data: 'starting_fee', name: 'starting_fee'},
                        {data: 'status', name: 'status'},
                        {data: 'action', name: 'action'}
                    ],
                    
                    order: [
                        [0, 'asc']
                    ],
                });
            });
        </script>
        @push('css')
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap5.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap5.min.css">
        @endpush

        @push('scripts')
            <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>
            <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
        @endpush
    @endsection
