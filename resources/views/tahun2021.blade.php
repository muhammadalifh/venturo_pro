<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="table-responsive">
        <table class="table table-hover table-bordered" style="margin: 0;">
            <thead>
                <tr class="table-dark">
                    <th rowspan="2" style="text-align:center;vertical-align: middle;width: 250px;">Menu</th>
                    <th colspan="12" style="text-align: center;">Periode Pada 2021
                    </th>
                    <th rowspan="2" style="text-align:center;vertical-align: middle;width:75px">Total</th>
                </tr>
                <tr class="table-dark">
                    <th style="text-align: center;width: 75px;">Jan</th>
                    <th style="text-align: center;width: 75px;">Feb</th>
                    <th style="text-align: center;width: 75px;">Mar</th>
                    <th style="text-align: center;width: 75px;">Apr</th>
                    <th style="text-align: center;width: 75px;">Mei</th>
                    <th style="text-align: center;width: 75px;">Jun</th>
                    <th style="text-align: center;width: 75px;">Jul</th>
                    <th style="text-align: center;width: 75px;">Ags</th>
                    <th style="text-align: center;width: 75px;">Sep</th>
                    <th style="text-align: center;width: 75px;">Okt</th>
                    <th style="text-align: center;width: 75px;">Nov</th>
                    <th style="text-align: center;width: 75px;">Des</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table-secondary" colspan="14"><b>Makanan</b></td>
                </tr>
                <tr>
                    <?php
                        $transaction1 = App\Models\Transaction::where('id_menu', 1)->get();
                        $transaction2 = App\Models\Transaction::where('id_menu', 2)->get();
                        $transaction3 = App\Models\Transaction::where('id_menu', 3)->get();
                        $transaction4 = App\Models\Transaction::where('id_menu', 4)->get();

                        $january = App\Models\Transaction::where('tanggal', 'like', '2021-01%')->get();

                        $akumulasi_total_bulan_jaunary = App\Models\Transaction::where('tanggal', 'like', '2021-01%')->sum('total');
                        $akumulasi_total_bulan_february = App\Models\Transaction::where('tanggal', 'like', '2021-02%')->sum('total');

                    ?>

                    @foreach ($transaction1 as $item)
                        <td>{{$item->menu->menu}}</td>
                        @break
                    @endforeach
                    {{-- @foreach ($akumulasi_total_bulan_jaunary as $item) --}}
                        <td style="text-align: right;">
                            {{$akumulasi_total_bulan_jaunary}}
                        </td>
                        <td style="text-align: right;">
                            {{$akumulasi_total_bulan_february}}
                        </td>
                    {{-- @endforeach --}}
                    {{-- @foreach ($january as $item)
                        <td style="text-align: right;">
                            {{$item->tanggal}}
                        </td>
                    @endforeach --}}
                </tr>
                <tr>
                    @foreach ($transaction2 as $item)
                        <td>{{$item->menu->menu}}</td>
                        @break
                    @endforeach
                    <td style="text-align: right;">
                        20,000
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;"><b>20,000</b></td>
                </tr>
                <tr>
                    <td>Nasi Teriyaki</td>
                    <td style="text-align: right;">
                        65,000
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;"><b>65,000</b></td>
                </tr>
                <tr>
                    <td>Nasi Ayam Katsu</td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;"><b>0</b></td>
                </tr>
                <tr>
                    <td>Nasi Goreng Mawut</td>
                    <td style="text-align: right;">
                        26,000
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;"><b>26,000</b></td>
                </tr>
                <tr>
                    <td class="table-secondary" colspan="14"><b>Minuman</b></td>
                </tr>
                <tr>
                    <td>Teh Hijau</td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;"><b>0</b></td>
                </tr>
                <tr>
                    <td>Teh Lemon</td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;"><b>0</b></td>
                </tr>
                <tr>
                    <td>Teh</td>
                    <td style="text-align: right;">
                        12,000
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;"><b>12,000</b></td>
                </tr>
                <tr>
                    <td>Kopi Hitam</td>
                    <td style="text-align: right;">
                        12,000
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;"><b>12,000</b></td>
                </tr>
                <tr>
                    <td>Kopi Susu</td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;"><b>0</b></td>
                </tr>
                <tr class="table-dark">
                    <td><b>Total</b></td>
                    <td style="text-align: right;">
                        <b>175,000</b>
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;">
                    </td>
                    <td style="text-align: right;"><b>175,000</b></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

