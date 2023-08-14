<col-12 class="col-md-6">
    <div class="mb-2">
        <label for class="form-label col-12 col-md-4 fw-bold">Nama lengkap</label>
        <input type="text" name="nama"
            class="form-control"
            value="{{old('nama',$pasien->nama)}}"
            placeholder="Masukan Nama Lengkap Pasien" />
        @error('nama')
        <span class="text-danger fst-italic">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-2">
        <label for class="form-label col-12 col-md-4 fw-bold">No RM</label>
        <input type="text" name="no_rm"
            class="form-control"
            value="{{old('no_rm',$pasien->no_rm)}}"
            placeholder="Masukan Nomor Rekam medis Pasien" />
        @error('no_rm')
        <span class="text-danger fst-italic">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for class="form-label col-12 col-md-4 fw-bold">Alamat Pasien</label>
        <textarea class="form-control" name="alamat"
            rows="5"
            placeholder="Masukan alamat pasien">{{old('alamat',$pasien->alamat)}}</textarea>
        @error('alamat')
        <span class="text-danger fst-italic">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3 form-check">
        <input class="form-check-input" type="checkbox" value="1"
            name="asli_daerah"
            @checked(old('asli_daerah',$pasien->asli_daerah))
        id="flexCheckChecked"/>
        <label class="form-check-label" for="flexCheckChecked">
            Masyarakat asli daerah (Purworejo)
        </label>
        <small class="text-muted fst-italic">Centang jika pasien merupakan warga
            asli Purworejo.</small>
        @error('asli_daerah')
        <span class="text-danger fst-italic">{{$message}}</span>
        @enderror
    </div>
</col-12>