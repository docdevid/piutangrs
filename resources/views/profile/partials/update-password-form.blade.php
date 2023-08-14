@if(session('status') === 'password-updated')
<div class="alert alert-success alert-dismissible fade show mt-2"
    role="alert">
    <strong>Sukses </strong> Password berhasil diperbarui.
    <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div>
@endif
<section>
    <div class="card">
        <div
            class="card-header flex-column align-items-start gap-0">
            <span class="h3">Perbarui Password</span>
            <span>Pastikan password anda pangjang dan random</span>
        </div>
        <div class="card-body">
            <form method="post" id="passwordUpdate"
                action="{{ route('password.update') }}">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">Password saat ini</label>
                    <input type="password" name="current_password"
                        class="form-control">
                    @error('current_password')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" id
                        class="form-control">
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id
                        class="form-control">
                    @error('password_confirmation')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </form>

        </div>
        <div class="card-footer">
            <button form="passwordUpdate" type="submit"
                class="btn btn-primary">Perbarui</button>
        </div>
    </div>
</section>
