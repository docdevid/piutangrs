<section>
    @if(session('status') === 'profile-updated')
    <div class="alert alert-success alert-dismissible fade show mt-2"
        role="alert">
        <strong>Sukses </strong> Profil berhasil diperbarui.
        <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
    @endif
    <div class="card">
        <div
            class="card-header flex-column align-items-start">
            <span class="h3">Informasi Profil</span>
            <span>Perbarui informasi profil dan alamat email</span>
        </div>
        <div class="card-body">

            <form method="post" id="ProfileUpdate"
                action="{{ route('profile.update') }}">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label class="form-label">Nama lengkap</label>
                    <input type="text" name="name" id
                        value="{{old('name',$user->name)}}" class="form-control">
                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" id
                        value="{{old('email',$user->email)}}"
                        class="form-control">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </form>

        </div>
        <div class="card-footer">
            <button form="ProfileUpdate" type="submit"
                class="btn btn-primary">Perbarui</button>
        </div>
    </div>
</section>
