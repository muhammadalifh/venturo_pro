@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg">
            <div class="card" style="margin: 2rem 0rem;">
                <div class="card-header">
                    {{ __('Venturo - Laporan penjualan tahunan per menu') }}</div>
                <div class="card-body">
                    <form action="GET">
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <select name="tahun" id="my-select" class="form-control">
                                        <option value="">Pilih Tahun</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">Tampilkan</button>
                            </div>
                        </div>
                    </form>
                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
