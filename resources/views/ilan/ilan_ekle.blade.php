@extends('layouts.master')

@section('content')

        <div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form  action="{{ route('ilan_ver') }}" method="POST">
                @csrf
                <h3>İlan Ver</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="İlan Başlığı"  />
                        </div>
                        <div class="form-group">
                            <input type="number" name="fiyat" class="form-control" placeholder="Fiyat"  />
                        </div>
                        <div class="form-group">
                            <select name="category" class="form-control" id="category">
                                <option value="İş İlanları">iş İlanı</option>
                                <option value="Ev İlanları">Ev İlanı</option>
                                <option value="Eşya İlanları">Eşya İlanı</option>
                                <option value="Teknolojik Aletler">Teknolojik Alet</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="İlan Açıklaması" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        {{-- <div class="form-group">
                            <label for="image">Fotoğraf Ekle</label>
                            <input type="file" name="image" class="form-control" accept="image/*" />
                        </div> --}}
                    </div>
                </div>


                <div class="row">
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="İlan Ver" />
                    </div>
                </div>


            </form>
</div>

@endsection

@section('css')
    <style>

.content-wrapper{
     background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 3%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -15%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background:  -webkit-linear-gradient(left, #0072ff, #00c6ff);
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
.form-control{
    border: 1px solid gray;
}

#category {
    border: 1px solid gray;
}
    </style>
@endsection

@section('js')
    <script>

    </script>
@endsection
