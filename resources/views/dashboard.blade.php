<x-app-layout title="{{$title}}">
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
                <h2>Dashboard</h2>
            </div>

            <div class="row row-cards mb-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span
                                        class="bg-success-lt text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-arrows-transfer-up"
                                            width="24" height="24"
                                            viewBox="0 0 24 24"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none"
                                                d="M0 0h24v24H0z"
                                                fill="none"></path>
                                            <path d="M7 21v-6"></path>
                                            <path d="M20 6l-3 -3l-3 3"></path>
                                            <path d="M17 3v18"></path>
                                            <path d="M10 18l-3 3l-3 -3"></path>
                                            <path d="M7 3v2"></path>
                                            <path d="M7 9v2"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{\App\Models\Piutang::count()}}
                                    </div>
                                    <div class="text-secondary">
                                        Piutang
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-info-lt text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-users"
                                            width="24" height="24"
                                            viewBox="0 0 24 24"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none"
                                                d="M0 0h24v24H0z"
                                                fill="none"></path>
                                            <path
                                                d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                            <path
                                                d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            <path
                                                d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{\App\Models\User::count()}}
                                    </div>
                                    <div class="text-secondary">
                                        Pasien
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-danger-lt text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-clipboard-heart"
                                            width="24" height="24"
                                            viewBox="0 0 24 24"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none"
                                                d="M0 0h24v24H0z"
                                                fill="none"></path>
                                            <path
                                                d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                                            <path
                                                d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                                            <path
                                                d="M11.993 16.75l2.747 -2.815a1.9 1.9 0 0 0 0 -2.632a1.775 1.775 0 0 0 -2.56 0l-.183 .188l-.183 -.189a1.775 1.775 0 0 0 -2.56 0a1.899 1.899 0 0 0 0 2.632l2.738 2.825z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{\App\Models\JenisPerawatan::count()}}
                                    </div>
                                    <div class="text-secondary">
                                        Jenis Perawatan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 col-md-4">
                    <div class="card bg-success-lt" style="height: 300px;">
                        <div class="card-body">
                            {{$chart->container()}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card bg-danger-lt" style="height: 300px;">
                        <div class="card-body">
                            {{$jenisPerawatanChart->container()}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card bg-primary-lt" style="height: 300px;">
                        <div class="card-body">
                            <div style="height:100%"
                                class="d-flex flex-column align-items-center justify-content-center">
                                <h2 class="text-primary fw-bold text-center">Total
                                    Biaya
                                    Perawatan</h2>
                                <span class="display-6 fw-bolder text-primary">
                                    Rp
                                    {{number_format(\App\Models\Piutang::pluck('total')->sum(),2,'.',',')}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 d-none">
                <div class="col-12">
                    <div class="card" style="height: 400px;">
                        <div class="card-body">
                            {{$kunjunganChart->container()}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
    {{ $jenisPerawatanChart->script() }}
    {{ $kunjunganChart->script() }}
</x-app-layout>
