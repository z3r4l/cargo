<div>
    <a href="{{ route('partnership.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Kembali</a>
</div>
<div class="col-12">
    <label for="name" class="form-label">Nama</label>
    <input 
        type="text" 
        class="form-control
        @error('name')
            is-invalid
        @enderror" 
        id="name" 
        name="name" 
        placeholder="Nama" 
        value="{{ old('name') ?? $partnership->name }}" required>
    @error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
</div>

<div class="col-12">
    <label for="logo" class="form-label">Logo</label>
    <div class="col-sm-2 col-lg-4 mb-3">
        <img 
        class="img-preview img-fluid col-sm-5 d-block text-center rounded" 
        src="{{ ($partnership->logo == null) ? '' : asset('storage/partnership/' . $partnership->logo)   }}" 
        alt="{{ $partnership->logo }}" width="500">         
    </div>
    <input 
        type="file" 
        class="form-control  
        @error('logo')
            is-invalid
        @enderror" 
        id="logo" 
        name="logo" 
        placeholder="logo" 
        onchange="previewlogo()"
        {{ ($partnership->logo == null) ? 'required' : ''   }}
        >
        
        @error('logo')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
</div>
<div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-warning">Reset</button>
</div>

<script>
    function previewlogo(){
        
        const imgPreview = document.querySelector('.img-preview')

        const blob = URL.createObjectURL(logo.files[0]);
        imgPreview.src = blob;
    }
</script>