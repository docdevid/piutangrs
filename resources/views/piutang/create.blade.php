<x-app-layout title="{{$title}}">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="mb-4">
                <h2>Tambah {{$title}}</h2>
            </div>
            <div class="card">
                <div class="card-body py-3">

                    <form id="form" method="POST"
                        action="{{route('piutang.store')}}">
                        @csrf
                        @include('piutang._form')
                    </form>

                </div>
                <div class="card-footer d-flex align-items-center gap-1">
                    <a href="{{route('piutang.index')}}" class="btn">Kembali</a>
                    <button type="submit" form="form"
                        class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
