@extends('layouts.master')

@section('content')
<div class="container">
<div class="row mb-5">
  <div class="search-bar">
    <input type="text" class="search-input" placeholder="Üniversiteni Bul..." id="searchInput">
    <button class="search-button"  id="searchButton">
        <i class="fa fa-search"></i>
    </button>
</div>


</div>
    <div class="row">
      <div class="row mb-4">
        <h3>Üniversitelerimiz</h3>
        <div class="btn-group" role="group" aria-label="Üniversite Türü">
            <button type="button" class="btn btn-info filter-button" id="btnDevlet" value="Devlet">Devlet Üniversiteleri</button>
            <button type="button" class="btn btn-success filter-button" id="btnVakif" value="Vakıf">Vakıf Üniversiteleri</button>
          </div>
      </div>
      @foreach($universiteler as $universite)
          <div class="col-md-4 mb-4 university-card" data-name="{{$universite->universite_ad}}">
              <div class="card">
                @if($universite->image)
                <img src="{{$universite->image}}" class="card-img-top" alt="Üniversite Resmi">
            @else
                <img src="varsayilan_foto.jpg" class="card-img-top" alt="Üniversite Resmi">
            @endif
                  <div class="card-body">
                      <h5 class="card-title mb-4">{{$universite->universite_ad}}</h5>
                      <p class="card-text">Üniversite Şehri : {{$universite->universite_il}}</p>
                      <p class="card-text">Üniversite Türü : {{$universite->turu}}</p>
                      <p class="card-text">Kuruluş Tarihi : {{$universite->kurulus}}</p>
                  </div>
                  <div class="card-footer">
                      <a href="{{ route('universite_detay', ['id' =>$universite->id]) }}" class="btn btn-success btnCard">Bilgi Al</a>
                      <a href="http://www.{{$universite->internet_sitesi}}" class="btn btn-primary btnCard">Resmi Siteye Git</a>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</div>

@endsection

@section('css')
<style>
h3 {
  font-size: 28px;
  font-weight: bold;
  color: #333;
  margin-bottom: 15px;
  border-bottom: 2px solid #4caf50;
  padding-bottom: 5px;
}

 /* Search bar container */
.search-bar {
    display: flex;
    align-items: center;
    background-color: #f5f5f5;
    border-radius: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 8px;
    width: 500px;
    margin: 0 auto;
}

/* Search input field */
.search-input {
    flex: 1;
    border: none;
    outline: none;
    padding: 10px;
    font-size: 14px;
    background-color: transparent;
}

/* Search button */
.search-button {
    border: none;
    background-color: #4caf50;
    color: #fff;
    padding: 8px 12px;
    border-radius: 20px;
    cursor: pointer;
    margin-left: 8px;
    transition: background-color 0.3s;
}

.search-button:hover {
    background-color: #45a049;
}



.card {
  border: 1px solid #e0e0e0;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  overflow: hidden;
  width: 300px;
  margin-bottom: 20px;
}

.card:hover {
  transform: translateY(-15px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.7);
}

.card-img-top {
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  height: 160px;
  object-fit: cover;
}

.card-body {
  padding: 15px;
  background-color: #fff;
}

.card-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.card-text {
  font-size: 14px;
  color: #666;
  margin-bottom: 10px;
}

.card-footer {
  background-color: #f8f9fa;
  padding: 8px 15px;
  border-bottom-left-radius: 8px;
  border-bottom-right-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.btnCard {
  font-size: 14px;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 6px 15px;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.btnCard:hover {
  background-color: #0056b3;
}

.btn-group {
    display: flex;
    gap: 100px;
    margin-bottom: 20px;
    margin-top: 20px;
  }

</style>


@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $("#searchInput").on("input", function() {
      const searchTerm = $(this).val().trim().toLowerCase();
      $(".university-card").each(function() {
        const universityName = $(this).data("name").toLowerCase();
        if (universityName.includes(searchTerm)) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });

    $("#searchButton").on("click", function() {
      $("#searchInput").focus();
    });

    // $("#btnDevlet").on("click", function() {
    //     var universite_turu = $(this).val();
    //     console.log(universite_turu)
    //     $.ajax({
    //                 type: "GET",
    //                 url: '{{ route('devlet_universite_getir') }}?universite_turu=' + universite_turu,
    //                 headers: {
    //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //                 },
    //                 success: function(data) {
    //                     console.log(data)


    //                 },//end success
    //             });//end ajax
    // });

  });



</script>
@endsection
