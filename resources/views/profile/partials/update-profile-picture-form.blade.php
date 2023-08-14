<section>
    @if(session('status') === 'profile-picture-updated')
    <div class="alert alert-success alert-dismissible fade show mt-2"
        role="alert">
        <strong>Sukses </strong> Foto Profil berhasil diperbarui.
        <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
    @endif
    <div class="card">
        <div
            class="card-header flex-column align-items-start">
            <span class="h3">Foto Profil</span>
        </div>
        <div class="card-body">

            <form method="post" id="ProfilePictureUpdate"
                action="{{ route('profile-picture.update') }}"
                enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label class="form-label">Foto profil</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                @if($user->getFirstMediaUrl('pengguna'))
                <div>
                    <img src="{{$user->getFirstMediaUrl('pengguna','preview')}}"
                        style="width:6rem;height: 6rem;object-fit: cover;"
                        class="rounded" />
                </div>
                @endif
            </form>
        </div>
        <div class="card-footer">
            <button form="ProfilePictureUpdate" type="submit"
                class="btn btn-primary">Perbarui</button>
        </div>
    </div>
</section>
