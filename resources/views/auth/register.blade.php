@extends('layouts.master')

@section('content')

<div class="container">
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="row">
      <div class="col-md-6">
        <h2>Neden Kayıt Olmalısın?</h2>
        <p>Yeni fırsatları yakalamak ve bağlantılar kurmak için adımını at! İlanlarını paylaş, yaratıcılığını sergile;
            üniversite duyurularını takip et, etkinlikleri kaçırma;
            geleceğin iş veya staj fırsatlarını keşfetmek için aramıza katıl . Birlikte daha fazlasını başarabiliriz!
        </p>
      </div>
      <div class="col-md-6">
        <h2 class="registerh2">Kayıt Ol</h2>
        <div class="mt-3">
        <form  action="{{ route('registerPost') }}" method="POST" >
            @csrf
          <div class="mb-4">
            <label for="fullName" class="form-label">Ad Soyad</label>
            <input type="text" class="form-control" id="ad_soyad" name="ad_soyad" required>
          </div>
          <div class="mb-4">
            <label for="email" class="form-label">Kullanıcı Adı</label>
            <input type="text" class="form-control" id="kullanici_adi" name="kullanici_adi" required>
          </div>
          <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-4">
            <label for="university" class="form-label">Üniversite</label>
            <input type="text" class="form-control" id="university" name="university" required>
          </div>
          <div class="mb-4">
            <label for="password" class="form-label">Şifre</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="mb-4">
            <label for="password_confirmation" class="form-label">Şifre Tekrar</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                required>
        </div>
          <button type="submit" class="btn btn-primary">Kayıt Ol</button>
        </form>
      </div>
      </div>
    </div>
  </div>
@endsection

@section('css')
<style>
.container {
  padding: 20px;
  box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
  margin-top:-1rem;
}

.col-md-6 {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.form-label {
  font-weight: bold;
  color: black;
  letter-spacing: 1px;
  font-size: 15px;
  /* font-family: serif; */
}

.form-control {
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
}

.form-select {
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
}

.btn-primary {
  background-color: #001b48;
  /* color: #001b48; */
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
}

.btn-primary:hover {
  background-color: #0056b3;
}

.registerh2{
    margin-bottom: 35px;
    font-size:26px;
    text-align: center;
}
.col-md-6 h2 {
  font-size: 1.5rem;
  font-weight: bold;
  margin-bottom: 10px;
  color: #333;
}

.col-md-6 p {
  font-size: 1rem;
  color: #666;
  line-height: 2;
}

</style>
@endsection

@section('js')
 <script>

</script>
@endsection
