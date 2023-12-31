<x-app-layout title="{{$title}}">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="mb-4">
                <h2>Perbarui {{$title}}</h2>
            </div>
            <div class="card">
                <div class="card-body py-3">

                    <form id="form" method="POST"
                        action="{{route('jenis-perawatan.update',$jenisPerawatan->id)}}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('jenis-perawatan._form')
                    </form>

                </div>
                <div class="card-footer d-flex align-items-center gap-1">
                    <a href="{{route('jenis-perawatan.index')}}" class="btn">Kembali</a>
                    <button type="submit" form="form"
                        class="btn btn-primary">Perbarui</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
