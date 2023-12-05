@extends('layouts.master')
@section('content')
<h2 class="text-center mb-5">{{$universite->universite_ad}}</h2>

<div class="container mt-3">

    <div class="row">
        <div class="col-md-6">
            <h5 class="text-center">Sosyal Medya</h5>
            <div class="header2-media-icons-div">
                <div class="header2-media-icon-div ">
                    <a href="https://www.instagram.com/ibuajanda/" target="_blank" class="header2-ikon-a  instagram-color" title="İnstagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="header2-media-icon-div">
                    <a href="//twitter.com/ibuajanda" target="_blank" class="header2-ikon-a twitter-color" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
                <div class="header2-media-icon-div">
                    <a href="//www.youtube.com/ibuajanda" target="_blank" class="header2-ikon-a youtube-color" title="Youtube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                {{-- <div class="header2-media-icon-div">
                    <a href="https://rehber.ibu.edu.tr/" target="_blank" class="header2-ikon-a telefon-color" title="Telefon Rehberi">
                        <i class="fas fa-phone"></i>
                    </a>
                </div> --}}
                {{-- <div class="header2-media-icon-div">
                    <a href="https://mail.ibu.edu.tr" target="_blank" class="header2-ikon-a mail-color " title="İBU Eposta">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div> --}}
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <p>Üniversite Şehri: {{$universite->universite_il}}</p>
                    <p>Üniversite Türü: {{$universite->turu}}</p>
                    <p>Kuruluş Tarihi: {{$universite->kurulus}}</p>
                </div>
            </div>

        </div>
        <div class="col-md-6">
                         <h2>Kullanıcı Yorumları</h2>
                @auth
                    <div class="mb-3">
                        <form method="post" action="{{ route('universite_yorum_ekle',$universite->id) }}">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" name="comment" class="form-control" placeholder="Yorum yap...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn  btn-info">Gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endauth
                   @foreach ($universite_yorumlar as $comment)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"> <i class="fas fa-user" style="margin-left: 10px;"></i>
                                  @php
                                      $user = DB::table('users')->where('id',$comment->user_id)->value('name');
                                      echo $user;
                                  @endphp
                                </h5>
                                <p class="card-text">{{ $comment->yorum }}</p>
                                <small class="text-muted">Yorum Tarihi: {{ $comment->created_at }}</small>
                            </div>
                            @if (Auth::check() && Auth::user()->id === $comment->user_id)

                            <form action="{{ route('universite_yorum_sil', [$universite->id, $comment->id]) }}"
                                method="POST">  @csrf  @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        @endif
                        </div>
                   @endforeach


        </div>
    </div>
</div>

@endsection

@section('css')
<style>
body {
    font-family: Arial, sans-serif;
}

.container {
    margin-top: 50px;
}


.card {
    border: none;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 0px;
}

.card.comment-card {
    margin-top: 20px;
    border: none;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.card.comment-card .card-body {
    padding: 15px;
}

.form-control.comment-input {
    border-radius: 0;
}


h2 {
    color: #333;
}
.header2-media-icons-div {
    display: flex;
    justify-content: center;
    align-items: center;
}

.header2-media-icon-div {
    margin: 0 10px;
    font-size: 24px;
}

.header2-ikon-a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    text-decoration: none;
}

.header2-ikon-a:hover {
    /* color: inherit; */
}

.instagram-color {
    color: #C13584;
}
.instagram-color:hover {
    color: #ffffff;
    background-color: #C13584;
}

.twitter-color {
    color: #1DA1F2;
}
.twitter-color:hover {
    color: #ffffff;
    background-color: #1DA1F2;
}

.youtube-color {
    color: #FF0000;
}
.youtube-color:hover {
    color: #ffffff;
    background-color: #FF0000;
}
.mail-color {
    color: #FFA500;
}
.mail-color:hover {
    color: #ffffff;
    background-color: #FFA500;
}

.telefon-color {
    color: #0000ff ;
}

.telefon-color:hover{
    color: #ffffff;
    background-color: #0000ff;
}
.btn-danger{
    float: right;
    margin-right: 30px;
    margin-bottom: 15px;
}
</style>
@endsection



@section('js')
<script>
    $(document).ready(function() {
    $(".sticky-top").stick_in_parent();
});
</script>

@endsection

