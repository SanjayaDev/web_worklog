@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="/assignment" class="text-dark text-decoration-none">
                <div class="card">
                    <div class="card-header">
                        <h6>Jumlah Assignment</h6>
                    </div>
                    <div class="card-body text-center">
                        <h4>{{ $total_assignment }}</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
