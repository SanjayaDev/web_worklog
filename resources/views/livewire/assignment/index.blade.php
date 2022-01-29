<div>
    <a href="/assignment/create" class="btn btn-success mb-4">Buat Baru</a>
    <div class="card">
        <div class="card-body">

            @if (session()->has("success_message"))
                <div class="alert bg-success">{{ session("success_message") }}</div>
            @endif
            @if (session()->has("error_message"))
                <div class="alert bg-danger">{{ session("error_message") }}</div>
            @endif

            {{-- <div class="row">
                <div class="col-md-2 mb-3">
                    <small>Show</small>
                    <select wire:model="show_count" name="show_count" class="form-control">
                        @for ($i = 10; $i < 50; $i++)
                            @if ($i % 10 == 0)
                                <option value="{{ $i }}">{{ $i }}</option>                                
                            @endif
                        @endfor
                    </select>
                </div>
            </div> --}}
            <livewire:assignment.assignment-datatable />
            {{-- <table class="table table-striped table-bordered table-hover">
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
                        <td colspan="4">
                        <p class="text-center">Tidak ada tugas</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table> --}}

            {{-- {{ $assignments->links() }} --}}
        </div>
    </div>
</div>
