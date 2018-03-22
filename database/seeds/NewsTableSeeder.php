<?php

use Illuminate\Database\Seeder;
use App\Models\Users;
class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=50;$i++){
            DB::table('news')->insert([
                'title' => 'Премьер-Лига: "Динамо" и "Шахтер" разгромили соперников в 24 туре',
                'category' => 'Спорт',
                'description' => 'Матч "Шахтер" - "Мариуполь" завершился счетом 3:0. ФК "Динамо" обыграл "Ворсклу" со счетом 4-0',
                'content' => 'Донецкий ФК "Шахтер" и киевский клуб "Динамо" одержали уверенные победы в матчах 24 тура украинской Премьер-лиги. Об этом сообщает пресс-служба УПЛ. 
                            Дончане в Харькове разгромили ФК "Мариуполь" со счетом 3:0.
                            Киевский ФК "Динамо" в игре с "Ворсклой" также выиграл матч с уверенной победой. Игра в НСК Олимпийский закончилась счетом 4:0 в пользу столичной команды.',
                'filename' => 'c3c49ddd642c32e1723ce98c05213ec9.jpg',
            ]);
        }
    }
}
