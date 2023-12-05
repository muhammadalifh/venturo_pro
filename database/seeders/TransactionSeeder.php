<?php

namespace Database\Seeders;

use App\Models\transaction;
use App\Models\Transaction as ModelsTransaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transaction = [
            [
                "tanggal"=> "2021-01-01",
                "id_menu"=> "1",
                "total"=> 50000
            ],
            [
                "tanggal"=> "2021-01-01",
                "id_menu"=> "7",
                "total"=> 15000
            ],
            [
                "tanggal"=> "2021-01-01",
                "id_menu"=> "6",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-01-01",
                "id_menu"=> "2",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-01-01",
                "id_menu"=> "4",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-01-01",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-01-01",
                "id_menu"=> "2",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-01-01",
                "id_menu"=> "10",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-01-01",
                "id_menu"=> "9",
                "total"=> 12000
            ],
            [
                "tanggal"=> "2021-01-01",
                "id_menu"=> "5",
                "total"=> 26000
            ],
            [
                "tanggal"=> "2021-01-15",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-01-15",
                "id_menu"=> "7",
                "total"=> 5000
            ],
            [
                "tanggal"=> "2021-01-15",
                "id_menu"=> "6",
                "total"=> 40000
            ],
            [
                "tanggal"=> "2021-01-15",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-01-15",
                "id_menu"=> "4",
                "total"=> 40000
            ],
            [
                "tanggal"=> "2021-01-15",
                "id_menu"=> "1",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-01-15",
                "id_menu"=> "10",
                "total"=> 9000
            ],
            [
                "tanggal"=> "2021-01-15",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-01-15",
                "id_menu"=> "3",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-01-15",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-01-31",
                "id_menu"=> "4",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-01-31",
                "id_menu"=> "7",
                "total"=> 15000
            ],
            [
                "tanggal"=> "2021-01-31",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-01-31",
                "id_menu"=> "7",
                "total"=> 15000
            ],
            [
                "tanggal"=> "2021-01-31",
                "id_menu"=> "1",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-01-31",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-01-31",
                "id_menu"=> "10",
                "total"=> 18000
            ],
            [
                "tanggal"=> "2021-01-31",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-02-01",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-02-01",
                "id_menu"=> "8",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-02-01",
                "id_menu"=> "3",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-02-01",
                "id_menu"=> "2",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-02-01",
                "id_menu"=> "10",
                "total"=> 21000
            ],
            [
                "tanggal"=> "2021-02-01",
                "id_menu"=> "1",
                "total"=> 100000
            ],
            [
                "tanggal"=> "2021-02-01",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-02-01",
                "id_menu"=> "7",
                "total"=> 5000
            ],
            [
                "tanggal"=> "2021-02-01",
                "id_menu"=> "5",
                "total"=> 39000
            ],
            [
                "tanggal"=> "2021-02-01",
                "id_menu"=> "7",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-02-01",
                "id_menu"=> "8",
                "total"=> 6000
            ],
            [
                "tanggal"=> "2021-02-15",
                "id_menu"=> "6",
                "total"=> 50000
            ],
            [
                "tanggal"=> "2021-02-15",
                "id_menu"=> "2",
                "total"=> 40000
            ],
            [
                "tanggal"=> "2021-02-15",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-02-15",
                "id_menu"=> "7",
                "total"=> 5000
            ],
            [
                "tanggal"=> "2021-02-15",
                "id_menu"=> "4",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-02-15",
                "id_menu"=> "10",
                "total"=> 9000
            ],
            [
                "tanggal"=> "2021-02-15",
                "id_menu"=> "3",
                "total"=> 26000
            ],
            [
                "tanggal"=> "2021-02-15",
                "id_menu"=> "9",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-02-15",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-02-15",
                "id_menu"=> "9",
                "total"=> 12000
            ],
            [
                "tanggal"=> "2021-02-28",
                "id_menu"=> "10",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-02-28",
                "id_menu"=> "7",
                "total"=> 25000
            ],
            [
                "tanggal"=> "2021-02-28",
                "id_menu"=> "3",
                "total"=> 26000
            ],
            [
                "tanggal"=> "2021-02-28",
                "id_menu"=> "10",
                "total"=> 9000
            ],
            [
                "tanggal"=> "2021-02-28",
                "id_menu"=> "6",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-02-28",
                "id_menu"=> "8",
                "total"=> 12000
            ],
            [
                "tanggal"=> "2021-02-28",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-02-28",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-02-28",
                "id_menu"=> "7",
                "total"=> 5000
            ],
            [
                "tanggal"=> "2021-02-28",
                "id_menu"=> "1",
                "total"=> 40000
            ],
            [
                "tanggal"=> "2021-03-01",
                "id_menu"=> "7",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-03-01",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-03-01",
                "id_menu"=> "8",
                "total"=> 9000
            ],
            [
                "tanggal"=> "2021-03-01",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-03-01",
                "id_menu"=> "4",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-03-01",
                "id_menu"=> "4",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-03-01",
                "id_menu"=> "6",
                "total"=> 40000
            ],
            [
                "tanggal"=> "2021-03-01",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-03-01",
                "id_menu"=> "3",
                "total"=> 26000
            ],
            [
                "tanggal"=> "2021-03-01",
                "id_menu"=> "2",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-03-15",
                "id_menu"=> "9",
                "total"=> 9000
            ],
            [
                "tanggal"=> "2021-03-15",
                "id_menu"=> "1",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-03-15",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-03-15",
                "id_menu"=> "4",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-03-15",
                "id_menu"=> "3",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-03-31",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-03-31",
                "id_menu"=> "2",
                "total"=> 40000
            ],
            [
                "tanggal"=> "2021-03-31",
                "id_menu"=> "6",
                "total"=> 50000
            ],
            [
                "tanggal"=> "2021-03-31",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-03-31",
                "id_menu"=> "10",
                "total"=> 9000
            ],
            [
                "tanggal"=> "2021-03-31",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-03-31",
                "id_menu"=> "5",
                "total"=> 39000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "2",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "3",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "6",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "1",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "6",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "2",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "9",
                "total"=> 9000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "1",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "4",
                "total"=> 40000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "10",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-04-01",
                "id_menu"=> "4",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-04-15",
                "id_menu"=> "8",
                "total"=> 9000
            ],
            [
                "tanggal"=> "2021-04-15",
                "id_menu"=> "7",
                "total"=> 5000
            ],
            [
                "tanggal"=> "2021-04-15",
                "id_menu"=> "4",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-04-15",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-04-15",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-04-15",
                "id_menu"=> "10",
                "total"=> 9000
            ],
            [
                "tanggal"=> "2021-04-15",
                "id_menu"=> "9",
                "total"=> 12000
            ],
            [
                "tanggal"=> "2021-04-15",
                "id_menu"=> "6",
                "total"=> 50000
            ],
            [
                "tanggal"=> "2021-04-15",
                "id_menu"=> "6",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-04-15",
                "id_menu"=> "1",
                "total"=> 40000
            ],
            [
                "tanggal"=> "2021-04-30",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-04-30",
                "id_menu"=> "2",
                "total"=> 50000
            ],
            [
                "tanggal"=> "2021-04-30",
                "id_menu"=> "5",
                "total"=> 26000
            ],
            [
                "tanggal"=> "2021-04-30",
                "id_menu"=> "6",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-04-30",
                "id_menu"=> "6",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-04-30",
                "id_menu"=> "6",
                "total"=> 80000
            ],
            [
                "tanggal"=> "2021-04-30",
                "id_menu"=> "9",
                "total"=> 12000
            ],
            [
                "tanggal"=> "2021-04-30",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-04-30",
                "id_menu"=> "9",
                "total"=> 9000
            ],
            [
                "tanggal"=> "2021-04-30",
                "id_menu"=> "9",
                "total"=> 6000
            ],
            [
                "tanggal"=> "2021-04-30",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-04-30",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-05-01",
                "id_menu"=> "4",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-05-01",
                "id_menu"=> "2",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-05-01",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-05-01",
                "id_menu"=> "3",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-05-01",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-05-01",
                "id_menu"=> "7",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-05-15",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-05-15",
                "id_menu"=> "2",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-05-15",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-05-15",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-05-15",
                "id_menu"=> "7",
                "total"=> 25000
            ],
            [
                "tanggal"=> "2021-05-15",
                "id_menu"=> "3",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-05-15",
                "id_menu"=> "10",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-05-15",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-05-15",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-05-15",
                "id_menu"=> "9",
                "total"=> 6000
            ],
            [
                "tanggal"=> "2021-05-15",
                "id_menu"=> "10",
                "total"=> 15000
            ],
            [
                "tanggal"=> "2021-05-31",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-05-31",
                "id_menu"=> "7",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-05-31",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-05-31",
                "id_menu"=> "6",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-05-31",
                "id_menu"=> "10",
                "total"=> 6000
            ],
            [
                "tanggal"=> "2021-05-31",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-05-31",
                "id_menu"=> "5",
                "total"=> 26000
            ],
            [
                "tanggal"=> "2021-05-31",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-06-01",
                "id_menu"=> "7",
                "total"=> 50000
            ],
            [
                "tanggal"=> "2021-06-01",
                "id_menu"=> "9",
                "total"=> 1000
            ],
            [
                "tanggal"=> "2021-06-01",
                "id_menu"=> "3",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-06-01",
                "id_menu"=> "2",
                "total"=> 50000
            ],
            [
                "tanggal"=> "2021-06-01",
                "id_menu"=> "6",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-06-01",
                "id_menu"=> "10",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-06-01",
                "id_menu"=> "1",
                "total"=> 5000
            ],
            [
                "tanggal"=> "2021-06-01",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-06-01",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-06-15",
                "id_menu"=> "6",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-06-15",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-06-15",
                "id_menu"=> "8",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-06-15",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-06-15",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-06-15",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-06-15",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-06-15",
                "id_menu"=> "2",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-06-15",
                "id_menu"=> "6",
                "total"=> 100000
            ],
            [
                "tanggal"=> "2021-06-30",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-06-30",
                "id_menu"=> "4",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-06-30",
                "id_menu"=> "10",
                "total"=> 6000
            ],
            [
                "tanggal"=> "2021-06-30",
                "id_menu"=> "1",
                "total"=> 40000
            ],
            [
                "tanggal"=> "2021-06-30",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-06-30",
                "id_menu"=> "6",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-06-30",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-06-30",
                "id_menu"=> "6",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-06-30",
                "id_menu"=> "2",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-06-30",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-06-30",
                "id_menu"=> "8",
                "total"=> 9000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "10",
                "total"=> 6000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "6",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "3",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "8",
                "total"=> 15000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "5",
                "total"=> 39000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "6",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "10",
                "total"=> 6000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "7",
                "total"=> 25000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "4",
                "total"=> 50000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-07-01",
                "id_menu"=> "7",
                "total"=> 5000
            ],
            [
                "tanggal"=> "2021-08-01",
                "id_menu"=> "5",
                "total"=> 78000
            ],
            [
                "tanggal"=> "2021-08-01",
                "id_menu"=> "6",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-08-01",
                "id_menu"=> "7",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-08-01",
                "id_menu"=> "8",
                "total"=> 18000
            ],
            [
                "tanggal"=> "2021-08-01",
                "id_menu"=> "4",
                "total"=> 100000
            ],
            [
                "tanggal"=> "2021-08-01",
                "id_menu"=> "4",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-08-01",
                "id_menu"=> "5",
                "total"=> 26000
            ],
            [
                "tanggal"=> "2021-08-01",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-08-01",
                "id_menu"=> "9",
                "total"=> 15000
            ],
            [
                "tanggal"=> "2021-08-01",
                "id_menu"=> "8",
                "total"=> 6000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "10",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "8",
                "total"=> 9000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "1",
                "total"=> 40000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "4",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "6",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "6",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "4",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "2",
                "total"=> 50000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "2",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-09-01",
                "id_menu"=> "9",
                "total"=> 21000
            ],
            [
                "tanggal"=> "2021-10-01",
                "id_menu"=> "4",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-10-01",
                "id_menu"=> "3",
                "total"=> 26000
            ],
            [
                "tanggal"=> "2021-10-01",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-10-01",
                "id_menu"=> "7",
                "total"=> 5000
            ],
            [
                "tanggal"=> "2021-10-01",
                "id_menu"=> "4",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-10-01",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-10-01",
                "id_menu"=> "8",
                "total"=> 6000
            ],
            [
                "tanggal"=> "2021-10-01",
                "id_menu"=> "2",
                "total"=> 40000
            ],
            [
                "tanggal"=> "2021-10-01",
                "id_menu"=> "5",
                "total"=> 26000
            ],
            [
                "tanggal"=> "2021-10-01",
                "id_menu"=> "1",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-11-01",
                "id_menu"=> "4",
                "total"=> 20000
            ],
            [
                "tanggal"=> "2021-11-01",
                "id_menu"=> "7",
                "total"=> 25000
            ],
            [
                "tanggal"=> "2021-11-01",
                "id_menu"=> "9",
                "total"=> 15000
            ],
            [
                "tanggal"=> "2021-11-01",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-11-01",
                "id_menu"=> "1",
                "total"=> 40000
            ],
            [
                "tanggal"=> "2021-11-01",
                "id_menu"=> "6",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-11-01",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-11-01",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-11-01",
                "id_menu"=> "6",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-11-01",
                "id_menu"=> "10",
                "total"=> 15000
            ],
            [
                "tanggal"=> "2021-11-01",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-12-01",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-12-01",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-12-01",
                "id_menu"=> "1",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-12-01",
                "id_menu"=> "6",
                "total"=> 30000
            ],
            [
                "tanggal"=> "2021-12-01",
                "id_menu"=> "5",
                "total"=> 13000
            ],
            [
                "tanggal"=> "2021-12-01",
                "id_menu"=> "10",
                "total"=> 15000
            ],
            [
                "tanggal"=> "2021-12-01",
                "id_menu"=> "9",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-12-01",
                "id_menu"=> "4",
                "total"=> 10000
            ],
            [
                "tanggal"=> "2021-12-01",
                "id_menu"=> "8",
                "total"=> 3000
            ],
            [
                "tanggal"=> "2021-12-01",
                "id_menu"=> "4",
                "total"=> 10000
            ]
        ];


        foreach ($transaction as $key => $value) {
            ModelsTransaction::create($value);
        }
    }
}
