@php
 use Carbon\Carbon;
    $now = Carbon::now();
    $year = $now->year;
@endphp

<footer class="footer">
  <div class="container-fluid d-flex justify-content-between">
    <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Tüm Hakları Saklıdır. {{$year}}</span>
    <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
  </div>
</footer>