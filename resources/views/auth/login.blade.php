<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Masuk ke akun anda</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email"
                        placeholder="your@email.com" autocomplete="off">
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

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center text-secondary mt-3 d-none">
        Belum punya akun ? <a href="{{route('register')}}"
            tabindex="-1">Daftar sekarang</a>
    </div>
</x-guest-layout>
