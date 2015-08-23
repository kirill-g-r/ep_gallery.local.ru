<?php
class Model_Artworks extends Model {


    // метод выборки данных
    function getArtworks() {

        $large = scandir('images/artworks/large');
        $small = scandir('images/artworks/small');

        foreach ($large as $img) {

            if (strlen($img) < 5) {

                continue;

            }

            $artworks['large'][] = $img;

        }

        foreach ($small as $img) {

            if (strlen($img) < 5) {

                continue;

            }

            $artworks['small'][] = $img;

        }

        foreach ( $artworks['large'] as $key => $artwork) {

            $artworks['name'][$key] = $this->getArtworkName($key);

        }


        return $artworks;

    }

    function getArtworkName($key) {

        $artwork_name = array(

            0 => 'Кольмар. Тенисный дворик.',
            1 => 'Крещение.',
            2 => 'Снег в Париже.',
            3 => 'Баржи на сене',
            4 => 'Баржи на сене',
            5 => 'Страсбург. Ресторан Au Pont St. Martin.',
            6 => 'Страсбург.La Petite France.',
            7 => 'Тенистые улочки Эза.',
            8 => 'Цветочный базар.',
            9 => 'Бордо. Pont de Pierre.',
            10 => 'В Австрийском лесу.',
            11 => 'Венеция. В дали от шумных улиц.',
            12 => 'Крыши Парижа.',
            13 => 'Влюбленные на мосту.',
            14 => 'Дождь в Венеции.',
            15 => 'Закат на сене.',
            16 => 'Кольмар Place des Six Montagnes Noires.',
            17 => 'Люксембургский сад.',
            18 => 'Морозное утро.',
            19 => 'Норвегия. Уединение.',
            20 => 'Полдень в Эгишем.',
            21 => 'Полдень в Эзе.',
            22 => 'Прогулка по Вене.',
            23 => 'Риквир.',
            24 => 'TEST_NAME',

        );



        return $artwork_name[$key];

    }

}