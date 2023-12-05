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
                    <th colspan="12" style="text-align: center;">Periode Pada 2022
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
                    <td>Nasi Goreng</td>
                    <td style="text-align: right;">
                        40,000
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
                    <td style="text-align: right;"><b>40,000</b></td>
                </tr>
                <tr>
                    <td>Mie Freno</td>
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

