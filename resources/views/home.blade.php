@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-3 card-report">
        <a href="/assignment">
            <div class="card">
                <h5 class="card-title">Assignment</h5>
                <div class="icon-center-report">
                    <h4>{{ $total_assignment }}</h4>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
