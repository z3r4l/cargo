    <div>
        <a href="{{ route('struktur.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Kembali</a>
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
            value="{{ old('name') ?? $struktur->name }}" required>
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>
    <div class="col-12">
        <label for="jabatan" class="form-label">Jabatan</label>
        <input 
            type="text" 
            class="form-control  
            @error('jabatan')
                is-invalid
            @enderror" 
            id="jabatan" 
            name="jabatan" 
            placeholder="Jabatan" 
            value="{{ $struktur->jabatan }}" required 
        >
        @error('jabatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-12">
        <label for="image" class="form-label">Foto</label>
        <div class="col-sm-2 col-lg-4 mb-3">
            <img 
            class="img-preview img-fluid col-sm-5 d-block text-center rounded" 
            src="{{ ($struktur->image == null) ? '' : asset('storage/struktur/' . $struktur->image)   }}" 
            alt="{{ $struktur->image }}" width="500">         
        </div>
        <input 
            type="file" 
            class="form-control  
            @error('image')
                is-invalid
            @enderror" 
            id="image" 
            name="image" 
            placeholder="image" 
            onchange="previewImage()" 
            {{ ($struktur->image == null) ? 'required' : ''   }} 
            >
            
            @error('image')
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
        function previewImage(){
            
            const imgPreview = document.querySelector('.img-preview')

            const blob = URL.createObjectURL(image.files[0]);
            imgPreview.src = blob;
        }
    </script>