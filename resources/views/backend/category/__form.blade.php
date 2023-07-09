<div>
    <a href="{{ route('category.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Kembali</a>
</div>
<div class="col-12">
    <label for="name" class="form-label">Nama Category</label>
    <input type="text" id="name" name="name" placeholder="Nama Category" value="{{ old('name') ?? $category->name }}" 
        class="form-control
            @error('name')
                is-invalid
            @enderror" 
            required >
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-warning">Reset</button>
</div>