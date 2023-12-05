@extends('layouts.master')

@section('content')
<div class="col-md-12" style="margin-top:-1.6rem ">
    <div class="row ">
        <div class="col-xl-3 col-lg-6">
            <div class="card_kategori l-bg-cherry">
                <div class="card-statistic-3 p-4">
                        <h5 class="card-title mb-0">İş İlanları</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card_kategori l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                        <h5 class="card-title mb-0">Ev İlanları</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card_kategori l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                        <h5 class="card-title mb-0">Eşya İlanları</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card_kategori l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                        <h5 class="card-title mb-0">Teknolojik Aletler</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Kategori kartları bittikten sonra ekleyebilirsiniz -->
<div class="col-md-12 text-center mt-3 mb-3">
    <a href="{{ route('ilan_ekle') }}" class="btn btn-info">İlan Ekle</a>
</div>

    <main>
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                @foreach ($ilanlar as $ilan)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <label class="ilanName">{{ $ilan->name}}</label>
                        <img
                            src="{{ $ilan->image }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary">{{ $ilan->kategori }}</span>
                                <span class="float-end price-hp">{{ $ilan->fiyat }} <i class="fa fa-turkish-lira" aria-hidden="true"></i></span>
                            </div>
                            <h5 >{{ $ilan->description }}</h5>
                        </div>
                        <div class="card-footer text-center "> <a href="#" class="btn btn-warning">İlan Detay</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </main>
@endsection

@section('css')
    <style>
        /* body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
} */
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        :root {
            --font1: 'Heebo', sans-serif;
            --font2: 'Fira Sans Extra Condensed', sans-serif;
            --font3: 'Roboto', sans-serif
        }

        body {
            font-family: var(--font3);
            background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%)
        }

        h2 {
            font-weight: 900
        }

        .container-fluid {
            max-width: 1200px
        }

        .card {
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .09);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            border: 2px solid #dddddd;
            border-radius: 1rem
        }

        .card .card-body {
            padding: 13px !important;
            height: 190px;
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: calc(1rem - 1px);
            border-top-right-radius: calc(1rem - 1px)
        }

        .card h5 {
            overflow: hidden;
            height: 130px;
            font-weight: 900;
            font-size: 1rem;
        }

        .card-img-top {
            width: 100%;
            max-height: 180px;
            object-fit: contain;
            padding: 30px
        }

        .card h2 {
            font-size: 1rem
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, 0.8)
            cursor: pointer;
        }

        .label-top {
            position: absolute;
            background-color: #8bc34a;
            color: #fff;
            top: 8px;
            right: 8px;
            padding: 5px 10px 5px 10px;
            font-size: .7rem;
            font-weight: 600;
            border-radius: 3px;
            text-transform: uppercase
        }

        .top-right {
            position: absolute;
            top: 24px;
            left: 24px;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            font-size: 1rem;
            font-weight: 900;
            background: #ff5722;
            line-height: 90px;
            text-align: center;
            color: white
        }

        .top-right span {
            display: inline-block;
            vertical-align: middle
        }

        @media (max-width: 768px) {
            .card-img-top {
                max-height: 250px
            }
        }

        .over-bg {
            background: rgba(53, 53, 53, 0.85);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(0.0px);
            -webkit-backdrop-filter: blur(0.0px);
            border-radius: 10px
        }

        .btn {
            font-size: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            padding: 5px 50px 5px 50px
        }

        .box .btn {
            font-size: 1.5rem
        }

        @media (max-width: 1025px) {
            .btn {
                padding: 5px 40px 5px 40px
            }
        }

        @media (max-width: 250px) {
            .btn {
                padding: 5px 30px 5px 30px
            }
        }

        .btn-warning {
            background: none #f7810a;
            color: #ffffff;
            fill: #ffffff;
            border: none;
            text-decoration: none;
            outline: 0;
            box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25);
            border-radius: 100px
        }

        .btn-warning:hover {
            background: none #ff962b;
            color: #ffffff;
            box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35)
        }

        .bg-success {
            font-size: 1rem;
            background-color: #f7810a !important
        }

        .bg-danger {
            font-size: 1rem
        }

        .price-hp {
            font-size: 1rem;
            font-weight: 600;
            color: darkgray
        }

        .amz-hp {
            font-size: .7rem;
            font-weight: 600;
            color: darkgray
        }

        .fa-question-circle:before {
            color: darkgray
        }

        .fa-plus:before {
            color: darkgray
        }

        .box {
            border-radius: 1rem;
            background: #fff;
            box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12)
        }

        .box-img {
            max-width: 300px
        }

        .thumb-sec {
            max-width: 300px
        }

        @media (max-width: 576px) {
            .box-img {
                max-width: 200px
            }

            .thumb-sec {
                max-width: 200px
            }
        }

        .inner-gallery {
            width: 60px;
            height: 60px;
            border: 1px solid #ddd;
            border-radius: 3px;
            margin: 1px;
            display: inline-block;
            overflow: hidden;
            -o-object-fit: cover;
            object-fit: cover
        }

        @media (max-width: 370px) {
            .box .btn {
                padding: 5px 40px 5px 40px;
                font-size: 1rem
            }
        }

        .disclaimer {
            font-size: .9rem;
            color: darkgray
        }

        .related h3 {
            font-weight: 900
        }

        footer {
            background: #212529;
            height: 80px;
            color: #fff
        }

        .ilanName {
    font-size: 1.25rem;
    font-weight: bold;
    margin-top: 10px;
    /* margin-bottom: -1rem; */
    text-align: center;
}
        /* kategori css */

        .card_kategori {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
     transition: transform 0.5s ease, box-shadow 0.3s ease;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}

.card_kategori:hover {
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.15), 0 0.9375rem 1.40625rem rgba(90,97,105,0.15), 0 0.25rem 0.53125rem rgba(90,97,105,0.2), 0 0.125rem 0.1875rem rgba(90,97,105,0.15);
    transform: translateY(-5px);
    cursor: pointer;
}

.l-bg-cherry {
    background: linear-gradient(to right, #493240, #f09) !important;
    color: #fff;
}

.l-bg-blue-dark {
    background: linear-gradient(to right, #373b44, #4286f4) !important;
    color: #fff;
}

.l-bg-green-dark {
    background: linear-gradient(to right, #0a504a, #38ef7d) !important;
    color: #fff;
}

.l-bg-orange-dark {
    background: linear-gradient(to right, #a86008, #ffba56) !important;
    color: #fff;
}

.card_kategori .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
    font-size: 110px;
}

.card_kategori .card-statistic-3 .card-icon {
    text-align: center;
    line-height: 50px;
    margin-left: 15px;
    color: #000;
    position: absolute;
    right: -5px;
    top: 20px;
    opacity: 0.1;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

.l-bg-green {
    background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
    color: #fff;
}

.l-bg-orange {
    background: linear-gradient(to right, #f9900e, #ffba56) !important;
    color: #fff;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}
    </style>
@endsection

@section('js')
    <script>

    </script>
@endsection
