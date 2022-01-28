<div>
    <div class="card">
			<div class="card-body">
				<form action="/assignment" wire:submit.prevent="store">
					@csrf
					<div class="form-group">
						<label>User</label>
						<select wire:model="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror" required>
							<option value="">Pilih User</option>
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
						<select wire:model="project_id" name="project_id" class="form-control @error('project_id') is-invalid @enderror" required>
							<option value="">Pilih Project</option>
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
							<select wire:model="assign_status_id" name="assign_status_id" class="form-control @error('assign_status_id') is-invalid @enderror">
								<option value="">Pilih Status</option>
								@foreach ($assignment_status as $status)
									<option value="{{ $status->assign_status_id }}">{{ $status->assign_status }}</option>
								@endforeach
							</select>
							@error('assign_status_id')
								<small class="text-danger">{{ $message }}</small>
							@enderror
						</div>
					@endcan
					<x-input-text label="Judul" name="assignment_title" required="required"></x-input-text>

					<div class="form-group">
						<label>Description</label>
						<textarea wire:model.lazy="description" name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="5"></textarea>
						@error('description')
							<small class="text-danger">{{ $message }}</small>
						@enderror
					</div>
					<div class="form-group">
						<label>Skala Prioritas</label>
						<select name="priority" wire:model="priority" class="form-control @error('priority') is-invalid @enderror">
							<option value="">Pilih Prioritas</option>
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
						<input wire:model="show_date" type="date" class="form-control @error('show_date') is-invalid @enderror" name="show_date" required>
						@error('show_date')
							<small class="text-danger">{{ $message }}</small>
						@enderror
					</div>
					<div class="form-group">
						<label>Tanggal Deadline</label>
						<input wire:model="deadline_date" type="date" class="form-control @error('deadline_date') is-invalid @enderror" name="deadline_date" required>
						@error('deadline_date')
							<small class="text-danger">{{ $message }}</small>
						@enderror
					</div>

					<button class="btn btn-success btn-sm mt-3" type="submit">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	// Livewire.hook("component.initialized", component => {
	// 	let dataDefault = {
	// 		user_id: document.querySelector("[name='user_id']").value,
	// 		project_id: document.querySelector("[name='project_id']").value,
	// 		assign_status_id: document.querySelector("[name='assign_status_id']").value,
	// 		priority: document.querySelector("[name='priority']").value,
	// 		show_date: document.querySelector("[name='show_date']").value,
	// 		deadline_date: document.querySelector("[name='deadline_date']").value,
	// 	};

	// 	// console.log(dataDefault);
	// 	Livewire.emit("initializeDefaultValue", dataDefault);	
	// });
</script>