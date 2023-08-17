<x-app-layout title="{{$title}}">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="mb-4">
                <h2>Perbarui {{$title}}</h2>
            </div>
            <div class="card">
                <div class="card-body py-3">

                    <form id="form" method="POST"
                        action="{{route('pasien.update',$pasien->id)}}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('pasien._form')
                    </form>

                </div>
                <div class="card-footer d-flex align-items-center gap-1">
                    <a href="{{route('pasien.index')}}" class="btn">Kembali</a>
                    <button type="submit" form="form"
                        class="btn btn-primary">Perbarui</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
