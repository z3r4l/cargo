    <div>
        <a href="{{ route('post.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Kembali</a>
    </div>
    <div class="col-12">
        <label for="title" class="form-label">Title</label>
        <input 
            type="text" 
            class="form-control
            @error('title')
                is-invalid
            @enderror" 
            id="title" 
            name="title" 
            placeholder="Title" 
            value="{{ old('title') ?? $post->title }}" required>
        @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>   
    <div class="col-12">
        <label for="" class="form-label">Kategori</label>
        <select class="form-select  @error('category_id') is-invalid @enderror" name="category_id">
         <option class="text-muted" disabled selected>--Pilih Kategori--</option>
             @foreach ($category as $item)
                 <option value="{{ $item->id }}" {{  isset($post->category->id) ? ($post->category->id == $post->category->id) ? 'selected' : '' : '' , old('category_id') == $item->id ? ' selected' : ''}} >{{ $item->name }}</option>    
             @endforeach
        </select>
        @error('category_id')
         <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12">
        <label for="image" class="form-label">Foto</label>
        <div class="col-sm-2 col-lg-4 mb-3">
            <img 
            class="img-preview img-fluid col-sm-5 d-block text-center rounded" 
            src="{{ ($post->image == null) ? '' : asset('storage/post/' . $post->image)   }}" 
            alt="{{ $post->image }}" width="500">         
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
            {{ ($post->image == null) ? 'required' : ''   }} 
            >
            
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
    </div>

    <div class="col-12">
        <label for="body" class="form-label">Body</label>
        <textarea placeholder="Body" id="title" style="height: 100px;" name="body" 
            class="form-control @error('body')
                is-invalid
            @enderror" 
            value="{{ old('body') ?? $post->body }}" required>{{ $post->body }}</textarea>
        @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>   

    {{-- <div class="col-12">
        <label for="body" class="form-label">Body</label>
        <div class="card" style="height: 300px;">
            <div class="quill-editor-full">
                    
            </div>
        </div>
    </div> --}}
   
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