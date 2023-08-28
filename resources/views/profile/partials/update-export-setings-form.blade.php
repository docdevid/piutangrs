@if(session('status') === 'setings-export-updated')
<div class="alert alert-success alert-dismissible fade show mt-2"
    role="alert">
    <strong>Sukses </strong> Pengaturan export berhasil diperbarui.
    <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div>
@endif
<section>
    <div class="card">
        <div class="card-body">
            <form method="post" id="exportSetings"
                action="{{ route('seting-export.update') }}">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">Tanda tangan</label>
                    <input type="text" name="tanda_tangan"
                        class="form-control"
                        value="{{old('tanda_tangan',@$setings->tanda_tangan)}}"
                        placeholder="Masukan nama yang bertanda tangan">
                    @error('tanda_tangan')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">NIP</label>
                    <input type="text" name="nip"
                        value="{{old('nip',@$setings->nip)}}"
                        placeholder="Masukan NIP yang bertanda tangan"
                        class="form-control">
                    @error('nip')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </form>

        </div>
        <div class="card-footer">
            <button form="exportSetings" type="submit"
                class="btn btn-primary">Perbarui</button>
        </div>
    </div>
</section>
