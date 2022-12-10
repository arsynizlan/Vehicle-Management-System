@extends('layouts.master')

@section('title')
    Riwayat Service Mobil - Nikel Corp
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span>Riwayat Service Mobil</span>
        </h4>

        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary" onclick="create()">Tambah Riwayat</button>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table" id="table">
                        <thead class="table-light">
                            <tr>
                                <th width="5%">#</th>
                                <th>Nama Mobil</th>
                                <th>Plat Nomor</th>
                                <th>Tanggal Service</th>
                                <th>Deskripsi</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!-- Bootstrap Table with Header - Light -->

    </div>
    <!-- / Content -->

    @include('components.modals.serviceHistories.create')
    {{-- @include('components.modals.cars.update') --}}
@endsection


@push('script')
    @include('components.scripts.datatables')
    @include('components.scripts.sweetalert')
    @include($script)
@endpush
