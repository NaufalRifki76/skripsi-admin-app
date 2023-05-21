@extends('layout.index')

@section('content')
    <div class="card shadow">
        @include('session-flash')
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Daftar Lapangan</h3>
                <div class="newbtn">
                    <div class="row">
                        <div class="col-8">
                            <!-- BUTTON New -->
                            <a class="btn-green-hover py-2" style="text-decoration: none; color: white;"
                                href="{{ route('create-hours-venue') }}"><i class="fa-solid fa-file-circle-plus"></i>
                                Atur Jam Operasional</a>
                        </div>
                    </div>
                    <br>
                </div>
                <table id="tabel-lapangan" class="table table-striped table-bordered display text-center" width="100%"
                    cellspacing="0">
                    <thead style="background-color: #439a97">
                        <tr>
                            <th class="text-center">Nama Tempat</th>
                            <th class="text-center">Jumlah Lapangan</th>
                            <th class="text-center">Jam Buka</th>
                            <th class="text-center">Jam Tutup</th>
                            <th class="text-center">Harga Sewa (Mulai Dari)</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $table_venue = $('#tabel-lapangan').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: {
                    url: "{{route('index-venue')}}",
                    type: 'GET',
                },
                columns: [
                    {data: 'venue_name', name: 'venue_name'},
                    {data: 'field_qty', name: 'field_qty'},
                    {data: 'open_hour', name: 'open_hour'},
                    {data: 'close_hour', name: 'close_hour'},
                    {data: 'starting_fee', name: 'starting_fee'},
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
        <script>
            $(document).ready(function() {
                $('#tabel-lapangan').DataTable();
            });
        </script>
    @endpush
@endsection
