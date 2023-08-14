<col-12 class="col-md-6">
    <div class="mb-2">
        <label for class="form-label col-12 col-md-4 fw-bold">Nama lengkap</label>
        <input type="text" name="name"
            class="form-control"
            value="{{old('name',$pengguna->name)}}"
            placeholder="Masukan Nama lengkap" />
        @error('name')
        <span class="text-danger fst-italic">{{$errors->first('name')}}</span>
        @enderror
    </div>
    <div class="mb-2">
        <label for class="form-label col-12 col-md-4 fw-bold">Email</label>
        <input type="email" name="email" class="form-control"
            value="{{old('email',$pengguna->email)}}"
            placeholder="Masukan Email" />
        @error('email')
        <span class="text-danger fst-italic">{{$errors->first('email')}}</span>
        @enderror
    </div>
    <div class="mb-2">
        <label for class="form-label col-12 col-md-4 fw-bold">Password</label>
        <input type="password" name="password" class="form-control"
            placeholder="Masukan Password" />
        @error('password')
        <span class="text-danger fst-italic">{{$errors->first('password')}}</span>
        @enderror
    </div>
    @if(!$pengguna->id)
    <div class="mb-2">
        <label for class="form-label col-12 col-md-4 fw-bold">Role</label>
        <select name="role" class="form-control">
            <option value>Pilih role</option>
            @foreach($roles as $role)
            <option value="{{$role->name}}"
                {{old('role',$pengguna->getRoleNames()->first()) == $role->name
                ? 'selected' : ''}}
                >{{$role->name}}</option>
            @endforeach
        </select>

        @error('role')
        <span class="text-danger fst-italic">{{$errors->first('role')}}</span>
        @enderror
    </div>
    @else
    <div class="mb-2">
        <label for class="form-label col-12 col-md-4 fw-bold">Role</label>
        <input type="text" disabled readonly class="form-control"
            value="{{$pengguna->getRoleNames()->first()}}" />
    </div>
    @endif
    <div class="mb-2">
        <label for class="form-label col-12 col-md-4 fw-bold">Foto profil</label>
        <input type="file" name="image" class="form-control" />
        @if($pengguna->getFirstMediaUrl('pengguna','preview') != '')
        <div class="mt-3">
            <img src="{{$pengguna->getFirstMediaUrl('pengguna','preview')}}"
                class="rounded"
                style="width:100px; object-fit: cover;" />
        </div>
        @endif
    </div>
</col-12>