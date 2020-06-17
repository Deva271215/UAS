@extends('layout.master2')

@section('content')
<!-- Card -->
<div class="container">

    <div class="card o-hidden border-rad-21 border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="p-2">
                <div class="text-center mt-5">
                    <h1 class="h4 text-gray-900 mb-4">Ayo Isi Formya!</h1>
                </div>

                <form class="user" action="/form/create" method="post">
                    <input type="text" value="{{$proyek->id}}">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input name="fname" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <input name="lname" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="alamat" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input name="wa" type="number" class="form-control form-control-user" id="wa" placeholder="Whatsapp">
                        </div>
                        <div class="col-sm-6">
                            <input name="email" type="email" class="form-control form-control-user" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="dana" type="text" class="form-control form-control-user" id="dana" placeholder="Jumlah yang ingin di investasikan">
                    </div>
                    <div class="text-center">
                        <p class="small">Eks. Keuntungan <span id="roi">Rp 11.600</span></p>
                    </div>
                    <div class="text-center">
                        <a href="" type="submit" class="btn btn-primary font-weight btn-user tombol">
                            Kirim
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection