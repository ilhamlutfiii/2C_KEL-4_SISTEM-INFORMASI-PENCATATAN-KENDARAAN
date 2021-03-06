@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-10">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Laporan Kendaraan</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <a class="btn btn-theme" href="{{ route('vehiclesOut.create') }}"> Add New Vehicle Out</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header row">
            
            <div class="col col-sm-6">
                <label for="">Pencarian Laporan Kendaraan Keluar</label>
                <div class="card-search with-adv-search dropdown">
                    <form action="{{ route('reports.index') }}" method="GET">
                        <input type="text" value="{{ request()->search_out }}" class="form-control" name="search_out"
                            placeholder="Cari..." required>
                        <input type="hidden" name="report_out" value="report_out">
                        <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                    </form>
                    <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle"
                        data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <form action="{{ route('reports.index') }}" method="GET">
                        <input type="hidden" name="report_out" value="report_out">
                        <div class="adv-search-wrap dropdown-menu dropdown-menu-right " aria-labelledby="adv_wrap_toggler">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="date">Dari Tanggal </label>
                                    <input type="text" value1="{{ request()->from_date }}"
                                        class="form-control datetimepicker-input" name="from_date" id="datepicker_out_from"
                                        data-toggle="datetimepicker" data-target="#datepicker_out_from">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date">Sampai Tanggal</label>
                                    <input type="text" value1="{{ request()->to_date }}"
                                        class="form-control datetimepicker-input" name="to_date" id="datepicker_out_to"
                                        data-toggle="datetimepicker" data-target="#datepicker_out_to">
                                </div>
                            </div>

                            <div class="btn-group" style="float: right">
                                <button class="btn btn-theme">Cari</button>
                            </div>
                        </div>
                        {{-- <input type="text" value="{{ old('from_date') }}" name="" id=""> --}}
                    </form>
                </div>
            </div>
                
        </div>
    </div>
    <div class="col-lg-6">
                <a class="btn btn-outline-primary" href="{{ route('reports.cetak_pdf') }}" > <i class="ik ik-printer"> Cetak Laporan Kendaran Parkir</i></a>
            </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (!empty($reports_out))
                        @include('reports.table_out')
                    @elseif(!empty($reports_in))
                        @include('reports.table_in')
                    @endif
                </div>
            </div>
        </div>
    </div>
    

@endsection
