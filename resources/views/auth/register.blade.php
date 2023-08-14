<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Buat akun baru</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama lengkap</label>
                    <input type="text" class="form-control" name="name"
                        placeholder="Masukan nama lengkap" autocomplete="off">
                    @if($errors->get('name'))
                    <span class="text-danger mt-1">{{$errors->get('name')[0]}}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email"
                        placeholder="Masukan Email" autocomplete="off">
                    @if($errors->get('email'))
                    <span class="text-danger mt-1">{{$errors->get('email')[0]}}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password"
                        placeholder="Password"
                        autocomplete="off">
                    @if($errors->get('password'))
                    <span class="text-danger mt-1">{{$errors->get('password')[0]}}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control"
                        name="password_confirmation"
                        placeholder="Password"
                        autocomplete="off">
                    @if($errors->get('password_confirmation'))
                    <span class="text-danger mt-1">{{$errors->get('password_confirmation')[0]}}</span>
                    @endif
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center text-secondary mt-3">
        Sudah punya akun ? <a href="{{route('login')}}"
            tabindex="-1">Login</a>
    </div>
</x-guest-layout>
