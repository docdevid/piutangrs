<x-app-layout title="{{$title}}">
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
                <h2>Data {{$title}}</h2>
            </div>

            @if(session('status') == 'create-success')
            <div class="alert alert-success alert-dismissible fade show"
                role="alert">
                <strong>Sukses !</strong> Insert data berhasil.
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            @endif
            @if(session('status') == 'update-success')
            <div class="alert alert-success alert-dismissible fade show"
                role="alert">
                <strong>Sukses !</strong> Update data berhasil.
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            @endif
            @if(session('status') == 'delete-success')
            <div class="alert alert-success alert-dismissible fade show"
                role="alert">
                <strong>Sukses !</strong> Hapus data berhasil.
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            @endif

            <div class="card">
                <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                        <div class="text-secondary">
                            <a href="{{route('pasien.create')}}"
                                class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-plus p-0 m-0"
                                    width="24" height="24" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"
                                        fill="none"></path>
                                    <path d="M12 5l0 14"></path>
                                    <path d="M5 12l14 0"></path>
                                </svg>
                                <span class="d-none d-md-inline">Tambah</span>
                            </a>
                        </div>
                        <div class="ms-auto text-secondary ">
                            <form method="GET"
                                action="{{route('pasien.index')}}">
                                <div class="ms-2 d-flex">
                                    <input type="text"
                                        class="form-control me-1"
                                        name="search"
                                        value="{{request('search')}}"
                                        aria-label="Search invoice">
                                    <button class="btn btn-primary">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table
                        class="table card-table table-vcenter text-nowrap datatable table-stripped table-sm ">
                        <thead>
                            <tr>
                                <th style="width: 60px;">No.</th>
                                <th class="col-2">Nama Pasien</th>
                                <th class="col-1">No Rekam Medis</th>
                                <th class="col-2 text-center">Asli Daerah</th>
                                <th>Terdaftar</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 0;
                            $no = ($pasiens->perPage() *
                            $pasiens->currentPage()) - $pasiens->perPage()
                            @endphp
                            @foreach($pasiens as $pasien)
                            <tr>
                                <td class="text-secondary">{{++$no}}</td>
                                <td class="text-secondary py-3">{{$pasien->nama}}</td>
                                <td>
                                    <span
                                        class="bg-success-lt p-1 rounded">
                                        {{$pasien->no_rm}}
                                    </span>
                                </td>
                                <td class="text-center">
                                    {!!$pasien->asliDaerahWithBadge()!!}
                                </td>
                                <td class="text-secondary py-3 small">{{$pasien->created_at->format('d M Y')}}</td>
                                <td class="text-end">

                                    <span class="dropdown">
                                        <button
                                            class="btn dropdown-toggle"
                                            data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Aksi</button>
                                        <div
                                            class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{route('pasien.show',$pasien->id)}}">
                                                Detail
                                            </a>
                                            <a class="dropdown-item "
                                                href="{{route('pasien.edit',$pasien->id)}}">
                                                Edit
                                            </a>
                                            <a class="dropdown-item"
                                                form="delete" href="#"
                                                onclick="showingDeleteConfirmation(this,{{$pasien->id}})">
                                                Delete
                                            </a>
                                            <form class="d-none"
                                                id="delete{{$pasien->id}}"
                                                method="POST"
                                                action="{{route('pasien.destroy',$pasien->id)}}">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    {!! $pasiens->appends(request()->query())->links() !!}
                </div>
            </div>
        </div>
    </div>
    <script>
        function showingDeleteConfirmation(form,id){
            let isConfirm = confirm('Hapus data ini ?');
            if(isConfirm){
                form.nextElementSibling.submit()
            }
        }
    </script>
</x-app-layout>
