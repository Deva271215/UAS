@extends('layout.master2')

@section('content')
<section class="spc-hidden-bar-medium"></section>
<section class="spc-hidden-bar-medium"></section>
<div class="container">
    <div class="border-rad-21 shadow p-3">
        <form action="" method="post">
            {{ csrf_field() }}
            <h1 class="text-center text-blue spc-border-bottom">Ayo Beli Produk Para Pejuang</h1>
            <br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="produk">Mau beli apa?</label>
                    <select class="custom-select" id="produk" name="produk">
                        <option selected disabled>Pilih...</option>
                        @foreach($data_trades as $trades)
                        <option value="{{$trades->nama}}">{{$trades->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="jumlah">Beli berapa kilo?</label>
                    <input type="number" class="form-control" id="jumlah" nama="jumlah" placeholder="Beli berapa kilo?">
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan">Ada keterangan tambahan?</label>
                <textarea type="text" class="form-control" id="keterangan" nama="keterangan"
                    placeholder="Contoh: Saya mau lelenya dibersihkan isi perutnya"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="notel">Nomor telepon / Whatsapp penerima</label>
                    <input type="text" class="form-control" id="notel" name="notel"
                        placeholder="Nomor Telephon/whatsapp..">
                </div>
                <div class="form-group col-md-6">
                    <label for="nama">Nama Lengkap Penerima</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap anda.. ">
                </div>
                <div class="form-group col-md-3">
                    <label for="jam">Mau dikirim jam berapa?</label>
                    <select class="custom-select" id="jam" name="jam">
                        <option selected>Pilih jam...</option>
                        <option value="Jam 4 sore">Jam 4 sore</option>
                        <option value="Jam 5 sore">Jam 5 sore</option>
                        <option value="Jam 6 pagi">Jam 6 pagi</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="inputAddress">Alamat Lengkap</label>
                    <textarea type="text" class="form-control" id="inputAddress"
                        placeholder="Gang Satria No. 2, Jln. I Gst. Ngr.Rai, Kec. Petang, Badung"></textarea>
                </div>
            </div>
            <button type="button" class="btn btn-primary" id="kirim">Pesan Sekarang</button>
    </div>
    </form>
</div>
<section class="spc-hidden-bar-medium"></section>

@endsection

@section('script')
<script>
    $(document).ready(function() {

        $('#kirim').click(function() {
            var produk = $('#produk').val();
            var jumlah = $('#jumlah').val();
            var keterangan = $('#keterangan').val();
            var nama = $('#nama').val();
            var notel = $('#notel').val();
            var alamat = $('#inputAddress').val();
            var pesan = '*** DETAIL PESANAN ANDA *** \n \n' +
                'Nama penerima: ' + nama + '\n' +
                'Nama produk: ' + produk + '\n' +
                'Jumlah: ' + jumlah + '\n' +
                'Kontak: ' + notel + '\n' +
                'Alamat: ' + alamat;
            pesan = encodeURI(pesan);
            window.open('https://api.whatsapp.com/send?phone=62881037757298&text=' + pesan, '_blank');
        });
    });
</script>
@endsection