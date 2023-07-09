    <div>
        <a href="{{ route('tarif.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Kembali</a>
    </div>
    <div class="col-12">
        <label for="asal" class="form-label">Asal</label>
        <input type="text" id="asal" name="asal" placeholder="Batam" value="{{ old('asal') ?? $tarif->asal }}" 
            class="form-control
                @error('asal')
                    is-invalid
                @enderror" 
                required >
        @error('asal')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-12">
        <label for="tarif" class="form-label">Tujuan</label>
        <input type="text" id="tujuan" name="tujuan" placeholder="Batam" value="{{ old('tujuan') ?? $tarif->tujuan }}" 
            class="form-control
                @error('tujuan')
                    is-invalid
                @enderror" 
                required >
        @error('tujuan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-12">
        <label for="tarif" class="form-label">Tarif</label>
        <input type="number" id="tarif" name="tarif" placeholder="15.0000" value="{{ old('tarif') ?? $tarif->tarif }}" 
            class="form-control
                @error('tarif')
                    is-invalid
                @enderror" 
                required >
        @error('tarif')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>



    <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </div>