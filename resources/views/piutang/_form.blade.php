
<col-12 class="col-md-6">
    <div class="mb-2">
        <label for class="form-label col-12 col-md-4 fw-bold">Masukan nama
            pasien</label>
        <select id="selectPasien" name="pasien_id"
            placeholder="Masukan nama pasien atau No Rekam Medis..."></select>

        @error('pasien_id')
        <span class="text-danger fst-italic">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-2">
        <div class="row">
            <div class="col-6">
                <label for class="form-label col-12 col-md-4 fw-bold">Tgl Masuk</label>
                <input type="date" name="tgl_masuk"
                    class="form-control"
                    value="{{old('tgl_masuk',$jenisPerawatan->tgl_masuk)}}"
                    placeholder="Masukan tgl masuk" />
                @error('tgl_masuk')
                <span class="text-danger fst-italic">{{$message}}</span>
                <br />
                @enderror
            </div>
            <div class="col-6">
                <label for class="form-label col-12 col-md-4 fw-bold">Tgl Keluar</label>
                <input type="date" name="tgl_keluar"
                    class="form-control"
                    value="{{old('tgl_keluar',$jenisPerawatan->tgl_keluar)}}"
                    placeholder="Masukan tgl keluar" />
                @error('tgl_keluar')
                <span class="text-danger fst-italic">{{$message}}</span>
                <br />
                @enderror
            </div>
        </div>
    </div>
    <div class="mb-2">
        <label for class="form-label fw-bold">Zaal</label>
        <input type="text" class="form-control" name="zaal"
            value="{{old('zaal',$jenisPerawatan->zaal)}}" />
        @error('zaal')
        <span class="text-danger fst-italic">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-2">
        <label for class="form-label fw-bold">Jenis Dan Biaya Perawatan</label>
        <div class="table-responsive">
            <table class="table table-borderless table-sm">
                @foreach($jenisPerawatans as $jp)
                <tr>
                    <td class='fst-italic fw-light'>{{$jp->nama}} <small>(Rp)</small></td>
                    <td>
                        <input type="number" name="jenis_perawatan[{{$jp->id}}]"
                            class="form-control"
                            value="{{old("jenis_perawatan.".$jp->id,0)}}"
                        />
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="mb-2">
        <label for class="form-label fw-bold">Cicilan</label>
        <input type="number" name="cicilan" id class="form-control"
            value="{{old('cicilan',$jenisPerawatan->cicilan)}}">
        @error('cicilan')
        <span class="text-danger fst-italic">{{$message}}</span>
        <br />
        @enderror
    </div>
    <div class="mb-2">
        <label for class="form-label fw-bold">Keterangan</label>
        <textarea name="keterangan" id cols="30" rows="4" class="form-control">{{old('keterangan',$jenisPerawatan->keterangan)}}</textarea>
    </div>
</col-12>

<script
    src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
<script>
    new TomSelect("#selectPasien",{
        valueField: 'id',
		labelField: 'nama',
		searchField: 'nama',
        load: function(query,callback){
            var url = '{{route('piutang.pasien')}}?search='+encodeURIComponent(query);
            fetch(url)
				.then(response => response.json())
				.then(json => {
					callback(json.items);
				}).catch(()=>{
					callback();
				});
        },
        render:{
            option:function(item,escape){
                return `<div class="d-flex gap-4 align-items-center justify-content-start">
                    <span class="col-2">${item.nama}</span>
                    <span class="bg-secondary-lt p-1">${item.no_rm}</span>
                </div>`
            },
            item:function(item,escape){
                return `<div class="d-flex gap-4 align-items-center justify-content-start">
                    <span class="">${item.nama}</span>
                    <span class="fw-bold text-primary">(${item.no_rm})</span>
                    </div>`
            }
        }
    })

</script>
