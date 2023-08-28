
@php
$export_setings = \App\Models\Setings::first();
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

@php
$no = 0;
$total_biaya_perawatan = [];
$total_total = 0;
$total_cicilan = 0;
$total_sisa = 0;
@endphp

@php
$lastData = $piutangs->last()->tgl_keluar
@endphp
<table>
    <tr>
        <th colspan="16"
            style="text-align: center;font-weight: bold;font-size: 16px;">Daftar
            Piutang Pasien Tahun {{$lastData->year}}</th>
    </tr>
    <tr>
        <th colspan="16"
            style="text-align: center;font-weight: bold;font-size: 16px;">RSUD
            dr.
            TJITROWARDOJO KABUPATEN PURWOREJO</th>
    </tr>
    <tr>
        <th colspan="16"
            style="text-align: center;font-weight: bold;font-size: 16px;">KEADAAN
            PER {{$lastData->monthName}}</th>
    </tr>
</table>
<table>
    <thead>
        <tr style="border:1px solid black;border-collapse: collapse;">
            <th
                style="width:40px;text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;"
                rowspan="2">No.</th>
            <th
                style="width:150px;text-align:left;font-weight:bold;border:1px solid black;border-collapse: collapse;"
                rowspan="2">Nama Pasien</th>
            <th
                style="width:100px;text-align:left;font-weight:bold;border:1px solid black;border-collapse: collapse;"
                rowspan="2">No Rekam Medis
            </th>
            <th
                style="width:100px;text-align:left;font-weight:bold;border:1px solid black;border-collapse: collapse;"
                rowspan="2">Alamat
            </th>
            <th
                style="width:75px;text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;"
                colspan="2">Tanggal</th>
            <th
                style="width:50px;text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;"
                rowspan="2">Zaal</th>
            <th
                style="width:150px;text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;"
                colspan="{{ $jenisPerawatans->count() }}">
                Biaya
                Perawatan</th>
            <th
                style="width:75px;text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;"
                rowspan="2">
                <span>Total</span></th>
            <th
                style="width:75px;text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;"
                rowspan="2"><span
                    class>Cicilan</span></th>
            <th
                style="width:75px;text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;"
                rowspan="2"><span
                    class>Sisa</span></th>
            <th
                style="width:75px;text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;"
                rowspan="2"><span
                    class>Ket</span></th>
        </tr>
        <tr>
            <th
                style="width:100px;text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;">Masuk</th>
            <th
                style="width:100px;text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;">Keluar</th>
            @foreach ($jenisPerawatans as $jenis)
            <th
                style="width:75px;text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;">
                <span>{{ $jenis->nama }}</span></th>
            @endforeach
        </tr>
    </thead>
    @php
    $data_ = $piutangs
    @endphp
    @if(count($data_) > 0)

    <tbody>

        @foreach ($data_ as $piutang)
        <tr>
            <td
                style="text-align:center;border:1px solid black;border-collapse: collapse;">{{
                ++$no }}</td>
            <td
                style="text-align:left;border:1px solid black;border-collapse: collapse;">{{
                $piutang->pasien->nama }}</td>
            <td
                style="text-align:left;border:1px solid black;border-collapse: collapse;"><span>{{
                    $piutang->pasien->no_rm }}</span>
            </td>
            <td
                style="text-align:left;border:1px solid black;border-collapse: collapse;"><span>{{
                    $piutang->pasien->alamat }}</span>
            </td>
            <td
                style="text-align:center;border:1px solid black;border-collapse: collapse;">{{
                $piutang->tgl_masuk->format('d-M-y') }}
            </td>
            <td
                style="text-align:center;border:1px solid black;border-collapse: collapse;">
                {{ $piutang->tgl_keluar->format('d-M-y') }}</td>
            <td
                style="text-align:center;border:1px solid black;border-collapse: collapse;">{{
                $piutang->zaal }}</td>
            @foreach ($jenisPerawatans as $jenis)
            <td
                style="text-align:center;border:1px solid black;border-collapse: collapse;">
                @if ($piutang->biaya_perawatan->count())
                @php
                $biaya = $piutang->biaya_perawatan
                ->where('jenis_perawatan_id', '=', $jenis->id)
                ->first()
                ->toArray()['biaya'];
                @endphp

                @php
                $total_biaya_perawatan[$jenis->id][] = $biaya;
                @endphp

                @if ($biaya)
                {{ number_format($biaya, 0, '.', ',') }}
                @endif
                @endif
            </td>
            @endforeach
            {{-- total --}}
            <td
                style="width:75px;text-align:center;border:1px solid black;border-collapse: collapse;">
                @if ($piutang->biaya_perawatan->count())
                @php
                $total = $piutang->biaya_perawatan->pluck('biaya')->sum();
                $total_total += $total;
                @endphp
                {{ number_format($total, 0, '.', ',') }}
                @endif
            </td>
            {{-- cicilan --}}
            <td
                style="width:75px;text-align:center;border:1px solid black;border-collapse: collapse;">
                {{ number_format($piutang->cicilan, 0, '.', ',') }}

                @php
                $total_cicilan += $piutang->cicilan;
                @endphp
            </td>
            {{-- sisa --}}
            <td
                style="width:75px;text-align:center;border:1px solid black;border-collapse: collapse;">
                <span>
                    @php
                    $sisa = $total - $piutang->cicilan;
                    $total_sisa += $sisa;
                    @endphp
                    {{ number_format($sisa, 0, '.', ',') }}
                </span>
            </td>
            <td
                style="width:75px;text-align:center;border:1px solid black;border-collapse: collapse;">
                <span></span>
            </td>
        </tr>
        @endforeach
    </tbody>

    @endif

    <tfoot>
        <tr>
            <th
                style="text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;"
                colspan="7">Jumlah</th>
            @foreach ($jenisPerawatans as $jenis)
            <th
                style="text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;">
                @php
                $t_bp = array_sum($total_biaya_perawatan[$jenis->id]);
                @endphp
                @if ($t_bp > 0)
                {{ number_format($t_bp, 0, '.', ',') }}
                @endif
            </th>
            @endforeach
            <th
                style="text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;">
                {{ number_format($total_total, 0, '.', ',') }}
            </th>
            <th
                style="text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;">
                {{ number_format($total_cicilan, 0, '.', ',') }}
            </th>
            <th
                style="text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;">
                {{ number_format($total_sisa, 0, '.', ',') }}
            </th>
            <th
                style="text-align:center;font-weight:bold;border:1px solid black;border-collapse: collapse;"></th>
        </tr>
    </tfoot>
</table>

<table>
    <tr>
        @for($i=1; $i <= 11;$i++)
        <td></td>
        @endfor
        <td colspan="3" style="text-align: center;">Purworejo,
            {{now()->translatedFormat('j F Y')}}</td>
    </tr>
    <tr>
        @for($i=1; $i <= 11;$i++)
        <td></td>
        @endfor
        <td colspan="3" style="text-align: center;">Kepala Bagian Keuangan</td>
    </tr>

    @for($i = 0; $i <= 2;$i++)
    <tr>
        @for($j=1; $j <= 11;$j++)
        <td></td>
        @endfor
        <td colspan="3" style="text-align: center;"></td>
    </tr>
    @endfor

    <tr>
        @for($i=1; $i <= 11;$i++)
        <td></td>
        @endfor
        <td colspan="3"
            style="text-align: center;border-bottom: 1px solid black;border-collapse: collapse;">
            <p>{{$export_setings->tanda_tangan}}</p>
        </td>
    </tr>
    <tr>
        @for($i=1; $i <= 11;$i++)
        <td></td>
        @endfor
        <td colspan="3" style="text-align: center;">
            <p>NIP. {{$export_setings->nip}}</p>
        </td>
    </tr>
</table>