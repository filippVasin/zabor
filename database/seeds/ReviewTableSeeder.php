<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'name' => 'Владислав Козик',
            'social_icon' => 'vk_icon.svg',
            'position' => 'СНТ «Нептун»',
            'text' => 'Обратился в компанию в июне 2016 года по рекомендации и не пожалел. На следующий день
                                после звонка приехал замерщик, снял необходимые размеры, буквально через час-полтора
                                назвали конечную цену, которая меня уcтроила. В назначенную дату приехали на монтаж
                                забора, сделали все в срок и качественно. Были особые требования к воротам, т.к.
                                предыдущие приходилось постоянно поправлять, ребята сделали все как и просили, за это
                                отдельное спасибо Александру и Ярославу. От работы с компанией остались только
                                положительные…',
            'avatar' => 'foto%201.png'
        ]);
        DB::table('reviews')->insert([
            'name' => 'Юлия Васильченко',
            'social_icon' => 'vk_icon.svg',
            'position' => 'СНТ «Кораблестроитель» пос.Рыбачий',
            'text' => 'Заказываю Забор уже второй раз! В первый раз делали лицевую сторону, и остались
                                довольны! Ворота пережили зиму, калитка открывается без проблем.
                                Заметно что работают профессионалы, во время работ не раз отключали электроэнергию, что
                                мешало ходу работ, однако спустя 2 дня ребятами привезли Электрогенератор причем
                                бесплатно! Очень приятно что есть такие внимательные к своей работе люди!',
            'avatar' => 'foto%202.png'
        ]);
        DB::table('reviews')->insert([
            'name' => 'Надежда Николаева',
            'social_icon' => 'instagram_icon.svg',
            'position' => 'СНТ «Иней 2»',
            'text' => 'Весной 2016 года заказали забор у АртЗабора. По цене оказалось даже дешевле чем у
                                некоторых частных мастеров. Очень удобно что ребята сами занимаются приобретением
                                материала и его доставкой. Очень быстро убрали старый забор, поставили новый забор между
                                соседями и лицевую часть. Общая длинна забора практически 70 метров, ребята справились
                                за 2 дня! Работали Олег и Андрей, ребята мастера своего дела, большое им спасибо!',
            'avatar' => 'foto%203.png'
        ]);

    }
}
