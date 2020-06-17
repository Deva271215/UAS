@extends('layout.master2')

@section('content')
<section class="spc-hidden-bar" id="page-proyek"></section>
<div class="container">
    <div class="border-rad-21 shadow p-3">
        <form action="" method="post">
            {{ csrf_field() }}
            <h1 class="text-center text-blue spc-border-bottom">Ayo Beli Bibit untuk Mulai Berjuang!</h1>
            <br>
            <!-- Gambar -->
            <div class="row">
                <div class="form-group col-md-6">
                    <img class="col-md-12" src="/img/{{$proyek->gambar}}" alt="">
                    <div class="group p-3">
                        <h3 class="small font-weight-bold">{{$proyek->nama_proyek}}</h3>
                        <h3 class="medium green-text font-weight-bold" id="harga">Rp {{$proyek->harga}}</h3>
                        <h3 class="small font-weight-light">Tersisa: <span
                                class="font-weight-bold text-center">{{$proyek->bibit_tersisa}}/</span><span
                                class="font-super-small">{{$proyek->bibit_stock}}</span> paket</>

                    </div>
                </div>
                <!-- Form -->
                <div class="form-group col-md-6">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="humlah">Mau beli berapa?</label>
                            <input type="number" id="jumlah" name="jumlah" onchange="calculateAmount(this.value)"
                                class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tot_amount">Total</label>
                            <input type="text" name="tot_amount" id="tot_amount" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="notel">Nama Lengkap Anda</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Nama lengkap anda..">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama">Nomor Whatsapp</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Nama lengkap anda.. ">
                        </div>
                    </div>
                    <div class="form-group col-md-12 p-0">
                        <label for="alamat">Alamat tinggal anda</label>
                        <textarea type="text" class="form-control" id="alamat" name="alamat"
                            placeholder="Contoh: Gang Satria No. 2, Jln. I Gst. Ngr.Rai, Kec. Petang, Badung"></textarea>
                    </div>
                    <div class="form-group">
                        <input name="checkbox" type="checkbox" aria-label="Checkbox for following text input">
                        <label for="checkbox">Saya sudah membaca dan menyetujui persyaratan dan ketentuan yang
                            diberlakukan oleh teampal.id. <a href="">Baca ketentuan.</a></label>
                    </div>
                    <button type="button" class="btn btn-success" id="kirim">Pesan Sekarang</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
    function calculateAmount(val) {
        var jumlah = $('#jumlah').val();
        var tot_price = jumlah * 10;
        /*display the result*/
        var tampil = 'Rp ' + tot_price + '.000';
        var divobj = document.getElementById('tot_amount');
        divobj.value = tampil;
    }
</script>
<script>
    $(document).ready(function() {

        $('#kirim').click(function() {
            var jumlah = $('#jumlah').val();
            var tampil = $('#tot_amount').val();
            var nama = $('#keterangan').val();
            var alamat = $('#alamat').val();
            var notel = $('#notel').val();
            var pesan = '*** DETAIL PESANAN ANDA *** \n \n' +
                'Jumlah pembelian: ' + jumlah + '\n' + ' paket' +
                'Total: ' + tampil + '\n' +
                'Nama lengkap: ' + nama + '\n' +
                'Alamat: ' + alamat + '\n' +
                'Kontak: ' + notel + '\n' +
                '*Saya telah membaca dan menyetujui semua persyaratan dan ketentuan yang tersedia.';
            pesan = encodeURI(pesan);
            window.open('https://api.whatsapp.com/send?phone=62881037757298&text=' + pesan, '_blank');
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
@endsection