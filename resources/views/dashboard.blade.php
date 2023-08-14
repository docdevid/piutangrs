<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
                <h2>Dashboard</h2>
            </div>

            <div class="row row-cards mb-2">
                @hasanyrole('Super Admin')
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"><path
                                                stroke="none" d="M0 0h24v24H0z"
                                                fill="none"></path><path
                                                d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path><path
                                                d="M12 3v3m0 12v3"></path></svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{\App\Models\User::count()}}
                                    </div>
                                    <div class="text-secondary">
                                        Pengguna
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endhasanyrole

            </div>

            @hasanyrole('Super Admin')
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            {{$chart->container()}}
                        </div>
                    </div>
                </div>
            </div>
            @endhasanyrole

        </div>
    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
</x-app-layout>
