@extends('administrator.layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Properties</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.home') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Properties</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Table Properties</h2>

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <a href="{{ route('property_type.create') }}" class="btn btn-primary btn-icon icon-left  ">
                        <i class="fas fa-plus"></i> Create Property
                    </a>
                </div>
                <div class="card-body">
                    <div class="table table-responsive table-hover table-striped ">
                        {!! $html->table(['style' => 'width:100%', 'cellspacing' => '0']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
{!! $html->scripts() !!}
@endsection