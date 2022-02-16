@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-body">
      <a href="/assignment/create" class="btn btn-success mb-4">Buat Baru</a>

      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Project</th>
            <th>Title</th>
            <th>Prioritas</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($assignments as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->project->project_name }}</td>
              <td>{{ $item->assignment_title }}</td>
              <td>{{ $item->priority }}</td>
              <td>
                <a class="btn btn-info btn-sm" href="{{ "/assignment/$item->assign_id" }}">Detail</a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5">
                <p class="text-center">Tidak ada tugas</p>
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection