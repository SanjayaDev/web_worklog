@extends('layouts.app')

@section('content')
  @if($assignment->assign_status_id == 1)
    <a href="/assignment/{{ $assignment->assign_id }}/finish" class="btn btn-primary mb-4">Tandai Selesai</a>
  @endif

  <div class="card">
    <div class="card-body">
      <table class="table">
        <tr>
          <td>Nama Project</td>
          <td>: {{ $assignment->project->project_name }}</td>
        </tr>
        <tr>
          <td>Nama Pembuat</td>
          <td>: {{ $assignment->user_create->name }}</td>
        </tr>
        <tr>
          <td>Judul Assignment</td>
          <td>: {{ $assignment->assignment_title }}</td>
        </tr>
        <tr>
          <td>Deskripsi</td>
          <td>: {!! nl2br($assignment->description) !!}</td>
        </tr>
        <tr>
          <td>Tanggal Muncul</td>
          <td>: {{ date("d M Y", strtotime($assignment->show_date)) }}</td>
        </tr>
        <tr>
          <td>Tanggal Deadline</td>
          <td>: {{ date("d M Y", strtotime($assignment->deadline_date)) }}</td>
        </tr>
      </table>

      @can('update-assign', $assignment)
        <a href="/assignment/{{ $assignment->assign_id }}/edit" class="btn btn-primary btn-sm">Edit</a>
      @endcan
    </div>
  </div>
@endsection