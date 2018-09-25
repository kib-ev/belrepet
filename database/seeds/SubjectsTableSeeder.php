<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$subjects = [
    		"Математика",
    		"Физика",
    		"Химия",
    		"Биология",
    		"Английский язык",
    		"Русский язык",
    		"Белорусский язык",
    		"Информатика/Программирование",
    		"Обществознание",
    		"Всемирная история",
    		"История Беларуси",
    		"Начальная школа",
    		"Подготовка к школе",
    		"Логопед",
    		"Музыка"

    	];

    	foreach ($subjects as $subject) {
    		DB::table('subjects')->insert(
    			[
    				'name' => $subject
    			]
    		);
    	}
    }
}
