<col-12 class="col-md-6">
    <div class="mb-2">
        <label for class="form-label col-12 col-md-4 fw-bold">Nama Jenis
            Perawatan</label>
        <input type="text" name="nama"
            class="form-control"
            value="{{old('nama',$jenisPerawatan->nama)}}"
            placeholder="Masukan Nama Jenis Perawatan" />
        @error('nama')
        <span class="text-danger fst-italic">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-2">
        <label for class="form-label col-12 col-md-4 fw-bold">Biaya Perawatan
            (default)</label>
        <input type="number" name="biaya"
            class="form-control"
            value="{{old('biaya',$jenisPerawatan->biaya)}}"
            placeholder="Masukan Biaya Perawatan" />
        @error('biaya')
        <span class="text-danger fst-italic">{{$message}}</span>
        <br />
        @enderror
        <small class="fst-italic">Untuk biaya perawatan bisa untuk tidak diisi.</small>
    </div>
</col-12>