@extends('layouts.user')
@section('content')






 <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Transaksi') }}</div>

                    <div class="card-body">
                        @if (session('transaksi'))
                            <div class="alert alert-success" role="alert">
                                {{ session('transaksi') }}
                            </div>
                        @endif

                        {{ __('Thank You') }}
                    </div>
                </div>
            </div>
        </div>
    </div>






























@endsection