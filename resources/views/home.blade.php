@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Album List - KPop Store') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Album</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Nama Supplier</th>
                                <th scope="col">Pembuat</th>
                                <th scope="col">Tanggal Dibuat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key=>$dt)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <th scope="row">{{ $dt->album_name }}</th>
                                <th scope="row">{{ $dt->price }}</th>
                                <th scope="row">{{ $dt->stock }}</th>
                                <th scope="row">{{ $dt->supplier->name }}</th>
                                <th scope="row">{{ $dt->user->name }}</th>
                                <th scope="row">{{ date('d/m/Y', $dt->created_at) }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection