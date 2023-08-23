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
                        <div class="text-secondary ms-2 d-none">
                            <a href="{{route('piutang.import')}}"
                                class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-database-import"
                                    width="24" height="24" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"
                                        fill="none"></path>
                                    <path
                                        d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3"></path>
                                    <path
                                        d="M4 6v6c0 1.657 3.582 3 8 3c.856 0 1.68 -.05 2.454 -.144m5.546 -2.856v-6"></path>
                                    <path
                                        d="M4 12v6c0 1.657 3.582 3 8 3c.171 0 .341 -.002 .51 -.006"></path>
                                    <path d="M19 22v-6"></path>
                                    <path d="M22 19l-3 -3l-3 3"></path>
                                </svg>
                                <span class="d-none d-md-inline">Import</span>
                            </a>
                        </div>

                        <div class="ms-auto text-secondary">

                            <div class="d-flex gap-2">
                                <form method="GET" id="search"
                                    action="{{route('piutang.index')}}"></form>
                                <div class="col-5 input-icon">
                                    <input class="form-control"
                                        name="date"
                                        form="search"
                                        placeholder="Pilih tanggal"
                                        value="{{request('date')}}"
                                        id="datepicker-icon">
                                    <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="icon" width="24"
                                            height="24" viewBox="0 0 24 24"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"><path
                                                stroke="none"
                                                d="M0 0h24v24H0z"
                                                fill="none"></path><path
                                                d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path
                                                d="M16 3v4"></path><path
                                                d="M8 3v4"></path><path
                                                d="M4 11h16"></path><path
                                                d="M11 15h1"></path><path
                                                d="M12 15v3"></path></svg>
                                    </span>
                                </div>

                                <input type="text"
                                    form="search"
                                    class="form-control me-1"
                                    name="search"
                                    value="{{request('search')}}"
                                    aria-label="Cari data piutang">

                                <button form="search" class="btn btn-primary">Cari</button>

                                <form id="export" method="GET"
                                    action="{{route('piutang.excel')}}">
                                </form>

                                <input type="hidden"
                                    value="{{request('date')}}"
                                    form="export"
                                    name="date" />
                                <button type="submit"
                                    form="export"
                                    href="{{route('piutang.export')}}"
                                    class="btn btn-primary">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-database-export"
                                        width="24" height="24"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none"
                                            d="M0 0h24v24H0z"
                                            fill="none"></path>
                                        <path
                                            d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3"></path>
                                        <path
                                            d="M4 6v6c0 1.657 3.582 3 8 3c1.118 0 2.183 -.086 3.15 -.241"></path>
                                        <path d="M20 12v-6"></path>
                                        <path
                                            d="M4 12v6c0 1.657 3.582 3 8 3c.157 0 .312 -.002 .466 -.005"></path>
                                        <path d="M16 19h6"></path>
                                        <path d="M19 16l3 3l-3 3"></path>
                                    </svg>
                                    <span class="d-none d-md-inline">Export</span>
                                </a>

                            </div>
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
                                <th class="text-start" rowspan="2"><span
                                        class>Cicilan</span></th>
                                <th class="text-start" rowspan="2"><span
                                        class>Sisa</span></th>
                                <th class="text-start" rowspan="2"><span
                                        class>Ket</span></th>
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
                                <td class="text-secondary text-start">
                                    <span class="px-3">
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
                                        @php
                                        $total =
                                        $piutang->biaya_perawatan->pluck('biaya')->sum();
                                        @endphp
                                        Rp
                                        {{number_format($total,2,',','.')}}
                                        @else
                                        Rp 0.00
                                        @endif
                                    </span>
                                </td>
                                <td class="text-start text-muted">
                                    <span class="px-2">Rp
                                        {{number_format($piutang->cicilan,2,',','.')}}</td></span>
                                <td class="text-start text-muted">Rp
                                    <span class="px-2">
                                        @php
                                        $sisa = ($total ?? 0) -
                                        $piutang->cicilan
                                        @endphp
                                        {{number_format($sisa,2,',','.')}}
                                    </span>
                                </td>
                                <td>
                                    <span class="px-2">-</span>
                                </td>

                                <td class="text-end">
                                    <span class="dropdown">
                                        <button
                                            class="btn dropdown-toggle"
                                            data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Aksi</button>
                                        <div
                                            class="dropdown-menu">
                                            <a class="dropdown-item d-none"
                                                href="{{route('piutang.show',$piutang->id)}}">
                                                Detail
                                            </a>
                                            <a class="dropdown-item"
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
    <script>
            function showingDeleteConfirmation(form,id){
            let isConfirm = confirm('Hapus data ini ?');
            if(isConfirm){
                form.nextElementSibling.submit()
            }
        }
    </script>
    <script type="module">
     document.addEventListener("DOMContentLoaded", function () {
    	window.Litepicker && (new Litepicker({
            element: document.getElementById('datepicker-icon'),
            singleMode: false,
            numberOfMonths:2,
            numberOfColumns:2,
            resetButton: () => {
   let btn = document.createElement('button');
   btn.innerHTML = '<span class="btn">Reset</span>';
   btn.addEventListener('click', (evt) => {
     evt.preventDefault();

     // some custom action
   });

   return btn;
},
    		buttonText: {
    			previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
    			nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
    		},
    	}));
    });
    </script>
</x-app-layout>
