<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
                <h2>Detail {{$title}}</h2>
            </div>
            <div class="card">
                <div class="card-body py-3">
                    <div class="row">
                        <div class="col-12 col-md-1">
                            @if($pengguna->getFirstMediaUrl('pengguna','preview'))
                            <img
                                src="{{$pengguna->getFirstMediaUrl('pengguna','preview')}}"
                                class="rounded"
                                style="width:100px; object-fit: cover;" />
                            @else
                            <img
                                src="/static/default/default.png"
                                class="rounded"
                                style="width:100px; object-fit: cover;" />
                            @endif

                        </div>
                        <div class="col-12 col-md-4">
                            <p class="h3"><span class="text-success fw-bold">{{$pengguna->getRoleNames()->implode(',')}}</span></p>
                            <h2>{{$pengguna->name}}</h2>
                            <p>{{$pengguna->email}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <a href="{{route('pengguna.index')}}" class="btn">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
