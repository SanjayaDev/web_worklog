@extends('layouts.admin.app')

@section('content')
  <div class="card">
    <div class="card-body">
      <form action="/assignment" method="POST">
        @csrf
        <div class="form-group">
          <label>User</label>
          <select name="user_id" class="form-control" required>
            @foreach ($users as $item)
              <option value="{{ $item->user_id }}">{{ $item->name }}</option>
            @endforeach
          </select>
          @error('user_id')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label>Project</label>
          <select name="project_id" class="form-control" required>
            @foreach ($projects as $item)
              <option value="{{ $item->project_id }}">{{ $item->project_name }}</option>
            @endforeach
          </select>
          @error('project_id')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        @can('su-access')
          <div class="form-group">
            <label>Status</label>
            <select name="assign_status_id" class="form-control">
              @foreach ($assignment_status as $status)
                <option value="{{ $status->assign_status_id }}">{{ $status->assign_status }}</option>
              @endforeach
            </select>
            @error('assign_status_id')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        @endcan
        <x-input-text label="Judul" name="assignment_title" value="{{ old('assignment_title') }}" required="required"></x-input-text>

        <div class="form-group">
          <label>Description</label>
          <textarea name="description" class="form-control" cols="30" rows="5">{{ old("description") }}</textarea>
          @error('description')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label>Skala Prioritas</label>
          <select name="priority" class="form-control">
            <option @if(old("priority") == "High") selected @endif value="High">High</option>
            <option @if(old("priority") == "Medium") selected @endif value="Medium">Medium</option>
            <option @if(old("priority") == "Low") selected @endif value="Low">Low</option>
          </select>
          @error('priority')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label>Tanggal Ditampilkan</label>
          <input type="date" class="form-control" name="show_date" value="{{ date("Y-m-d") }}" required>
          @error('show_date')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label>Tanggal Deadline</label>
          <input type="date" class="form-control" name="deadline_date" value="{{ date("Y-m-d") }}" required>
          @error('deadline_date')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <button class="btn btn-success btn-sm mt-3" type="submit">Simpan</button>
      </form>
    </div>
  </div>
@endsection