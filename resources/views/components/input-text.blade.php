<div class="form-group">
    <label>{{ $label }}</label>
    <input type="text" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" $required value="{{ $value }}">
    @error($name)
        <small class="text-danger">{{ $message }}</small>        
    @enderror
</div>