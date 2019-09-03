@extends('administrator.layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Property Types</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.home') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Property Types</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Form Create Property Types</h2>

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card card-primary">
                <div class="card-body">
                    @include('partials.alert_error')

                    <form action="{{ route('property_type.store') }}" method="POST">
                        @csrf
                        <div class="form-group ">
                            <label>Property Type Name</label>
                            <input type="text" name="name"
                                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                placeholder="Property Type Name" autofocus>
                        </div>
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        <a href="{{ route('property_type.index') }}" role="button" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')

@endsection
