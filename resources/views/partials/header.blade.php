
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color: #001B48;">
  <div class="logo" style="margin-left: 30px">
    <a href="/" class="link link-brand">
        <span class="logo-text">UniVerse</span>
    </a>
</div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">


    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item" >
        <a class="nav-link" href="/">
          <span class="menu-title">Anasayfa</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/universite">
          <span class="menu-title">Üniversiteler</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span class="menu-title">Etkinlikler</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="/duyurular">
          <span class="menu-title">Duyurular</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="/ilanlar">
          <span class="menu-title">İlanlar</span>
        </a>
      </li>
      @auth
      {{-- Kullanıcı giriş yapmışsa --}}
      <li class="nav-item">
        <a class="nav-link" href="/logout">
          <span class="menu-title">Çıkış Yap</span>
        </a>
      </li>
    @else
      {{-- Kullanıcı giriş yapmamışsa --}}
      <li class="nav-item">
        <a class="nav-link" href="/login">
          <span class="menu-title">Giriş Yap</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">
          <span class="menu-title">Kayıt Ol</span>
        </a>
      </li>
    @endauth



      <li class="nav-item d-none d-lg-block full-screen-link">
        <a class="nav-link">
          <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
        </a>
      </li>






    </ul>



  </div>
</nav>


