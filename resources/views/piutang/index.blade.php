<x-app-layout>
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
                            <a href="{{route('piutang.create')}}"
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
                                action="{{route('piutang.index')}}">
                                <div class="d-flex gap-2">
                                    <input type="text"
                                        class="form-control me-1"
                                        name="month"
                                        id="month"
                                        value="{{request('month')}}"
                                        aria-label="Cari data piutang">

                                    <input type="text"
                                        class="form-control me-1"
                                        name="search"
                                        value="{{request('search')}}"
                                        aria-label="Cari data piutang">
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
                                <th style="width: 40px;" rowspan="2">No.</th>
                                <th class="col-2" rowspan="2">Nama Pasien</th>
                                <th class="col-1" rowspan="2">No Rekam Medis</th>
                                <th class="col-1 text-center" colspan="2">Tanggal</th>
                                <th class="col-1 text-center" rowspan="2">Zaal</th>
                                <th colspan="{{$jenisPerawatans->count()}}"
                                    class="text-center">Biaya
                                    Perawatan</th>
                                <th class="text-start" rowspan="2"><span
                                        class="px-4">Total</span></th>
                                <th class="text-end" rowspan="2"></th>
                            </tr>
                            <tr>
                                <th class="col-1 text-center">Masuk</th>
                                <th class="col-1 text-center">Keluar</th>
                                @foreach($jenisPerawatans as $jenis)
                                <th class="col text-start"><span class="px-2">{{$jenis->nama}}</span></th>
                                @endforeach
                                <th class="col text-start"></th>
                                <th class="col text-end"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 0;
                            $no = ($piutangs->perPage() *
                            $piutangs->currentPage()) -
                            $piutangs->perPage()
                            @endphp
                            @foreach($piutangs as $piutang)
                            <tr>
                                <td class="text-secondary">{{++$no}}</td>
                                <td class=" py-3">{{$piutang->pasien->nama}}</td>
                                <td class="text-secondary py-3"><span
                                        class="p-1 bg-success-lt">{{$piutang->pasien->no_rm}}</span></td>
                                <td
                                    class="text-secondary py-3 text-center small">{{$piutang->tgl_masuk->format('d/m/y')}}</td>
                                <td
                                    class="text-secondary py-3 text-center small">{{$piutang->tgl_keluar->format('d/m/y')}}</td>
                                <td class="text-secondary py-3 text-center">{{$piutang->zaal}}</td>
                                @foreach($jenisPerawatans as $jenis)
                                <td class="text-secondary text-start small">
                                    <span class="p-2">
                                        @if($piutang->biaya_perawatan->count() >
                                        0)
                                        @php
                                        $biaya =
                                        $piutang->biaya_perawatan->where('jenis_perawatan_id','=',$jenis->id)->first()->toArray()['biaya']
                                        @endphp
                                        {{'Rp '.number_format($biaya,2,'.',',')}}
                                        @else
                                        Rp 0.00
                                        @endif
                                    </span>
                                </td>
                                @endforeach
                                <td class="text-secondary py-3 text-start">
                                    <span class="px-4">
                                        @if($piutang->biaya_perawatan->count())
                                        Rp
                                        {{number_format($piutang->biaya_perawatan->pluck('biaya')->sum(),2,',','.')}}
                                        @else
                                        Rp 0.00
                                        @endif
                                    </span>
                                </td>

                                <td class="text-center">
                                    <span class="dropdown">
                                        <button
                                            class="btn dropdown-toggle"
                                            data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Aksi</button>
                                        <div
                                            class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{route('piutang.show',$piutang->id)}}">
                                                Detail
                                            </a>
                                            <a class="dropdown-item d-none"
                                                href="{{route('piutang.edit',$piutang->id)}}">
                                                Edit
                                            </a>
                                            <a class="dropdown-item"
                                                form="delete" href="#"
                                                onclick="showingDeleteConfirmation(this,{{$piutang->id}})">
                                                Delete
                                            </a>
                                            <form class="d-none"
                                                id="delete{{$piutang->id}}"
                                                method="POST"
                                                action="{{route('piutang.destroy',$piutang->id)}}">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </span>
                                </td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    {!! $piutangs->appends(request()->query())->links()
                    !!}
                </div>
            </div>
        </div>
    </div>
    <script type="module">
        function showingDeleteConfirmation(form,id){
            let isConfirm = confirm('Hapus data ini ?');
            if(isConfirm){
                form.nextElementSibling.submit()
            }
        }

        window.Litepicker && (new Litepicker({
            element:document.getElementById('month'),
            dropdowns:{"minYear":1990,"maxYear":null,"months":false,"years":false}
        }))
    </script>
</x-app-layout>
