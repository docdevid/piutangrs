<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
                <h2>Data {{$title}}</h2>
            </div>
        </div>

        <form id="export" method="GET" action="{{route('piutang.excel')}}"></form>
        <div class="mb-2">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="form-label">Pilih Tahun</div>
                    <input type="number" name="year" form="export"
                        class="form-control"
                        min="2000"
                        max="2023"
                        value="2023" />
                </div>
                <div class="col-12 col-md-3">
                    <div class="form-label">Pilih Bulan</div>
                    <select name="month" form="export" class="form-control">
                        @php
                        $bulan = array(
                        '01' => "Januari",
                        '02' => "Februari",
                        '03' => "Maret",
                        '04' => "April",
                        '05' => "Mei",
                        '06' => "Juni",
                        '07' => "Juli",
                        '08' => "Agustus",
                        '09' => "September",
                        '10' => "Oktober",
                        '11' => "November",
                        '12' => "Desember"
                        );
                        @endphp
                        @foreach($bulan as $i => $b)
                        <option value="{{$i}}"
                            @selected(old('month',(request('month')
                            ?? now()->format('m')),now()->format('m'))
                            ==
                            $i)>{{$b}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="mb-2">
            <button class="btn btn-primary" type="submit" form="export"><svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-database-export"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3"></path>
                    <path
                        d="M4 6v6c0 1.657 3.582 3 8 3c1.118 0 2.183 -.086 3.15 -.241"></path>
                    <path d="M20 12v-6"></path>
                    <path
                        d="M4 12v6c0 1.657 3.582 3 8 3c.157 0 .312 -.002 .466 -.005"></path>
                    <path d="M16 19h6"></path>
                    <path d="M19 16l3 3l-3 3"></path>
                </svg> Export</button>
        </div>
    </div>

</x-app-layout>
