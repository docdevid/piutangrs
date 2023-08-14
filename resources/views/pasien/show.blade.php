<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
                <h2>Detail {{$title}}</h2>
            </div>
            <div class="card">
                <div class="card-body py-3">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h2>{{$pasien->nama}} ({{$pasien->no_rm}})</h2>
                            <table class="table table-borderless table-sm">
                                <tr class="align-top">
                                    <td class="text-muted col-2">Terdaftar</td>
                                    <td class>{{$pasien->created_at->format('d M Y')}}</td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Didaftarkan
                                        oleh</td>
                                    <td class>{{$pasien->creator->name ?? '-'}}</td>
                                </tr>
                                <tr class="align-top">
                                    <td class="text-muted">Alamat</td>
                                    <td class>{{$pasien->alamat}}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-muted">Asli
                                        Purworejo</td>
                                    <td class>{!!$pasien->asli_daerah
                                        ? '<span class="text-success">Yes</span>' : '<span
                                            class="text-danger">Yes</span>'!!}</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <a href="{{route('pasien.index')}}" class="btn">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
