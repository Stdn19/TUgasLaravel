@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Manajemen Data Pelanggan</h3>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {!! session('success') !!}
                            </div>
                        @endif
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>No Telp</th>
                                    <th>Alamat</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($suppliers as $supplier)
                                <tr>
                                    <td>{{ $supplier->name }}</td>
                                    <td>{{ $supplier->phone }}</td>
                                    <td>{{ str_limit($supplier->address, 50) }}</td>
                                    
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="5">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="float-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection