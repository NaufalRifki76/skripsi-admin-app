@extends('layout.index')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <h3 class="mb-3">Daftar Data Pemesanan</h3>
                <br>
                <table id="tabel-data-pemesanan" class="table table-striped table-bordered display text-center" width="100%" cellspacing="0">
                    <thead style="background-color: #439a97">
                        <tr>
                            <th>Nama Pemesan</th>
                            <th>Nama Tempat</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Jam</th>
                            <th>Harga Sewa</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                          <td>Faris Hakim</td>
                          <td>Futsal Koe</td>
                          <td>10/12/2023</td>
                          <td>09.00 - 10.00<br></td>
                          <td>150000<br/></td>
                          <td>Pending<br></td>
                          <td class="d-flex justify-content-center text-center">
                            <a href="{{ route('data-pemesanan.detail') }}"><button class="btn btn-sm btn-warning me-2 px-3 text-white">Detail</button></a> 
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $table_venue = $('#tabel-data-pemesanan').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: {
                    url: "{{route('data-pemesanan.index')}}",
                    type: 'GET',
                },
                columns: [
                    {data: 'cust_name', name: 'cust_name'},
                    {data: 'venue_name', name: 'venue_name'},
                    {data: 'order_date', name: 'order_date'},
                    {data: 'price_sum', name: 'price_sum'},
                    {data: 'confirmation', name: 'confirmation'},
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
        $(document).ready(function(){
            $('#tabel-data-pemesanan').DataTable();
        });
    </script>
        
    @endpush
@endsection

