<?php
class Model_Artworks extends Model {


    // метод выборки данных
    function getArtworks($type) {

        $large = scandir('images/artworks/'.$type.'/large');
        $small = scandir('images/artworks/'.$type.'/small');

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

            $artworks['name'][$key] = $this->getArtworkName($type, $key);
            $artworks['property'][$key] = $this->getArtworkProperty($type, $key);

        }


        return $artworks;

    }

    function getArtworkName($type, $key) {

        if ($type == 'landscapes') {

            $artwork_name = array(

                0 => 'Square in Colmar, France',
                1 => 'Baptism',
                2 => 'Snow in Paris',
                3 => 'Barges on the Seine',
                4 => 'Barges on the Seine',
                5 => 'Restaurant on the Pont St. Martin. Strasbourg',
                6 => 'Strasbourg Pont St. Martin',
                7 => 'Shady Street. Eze',
                8 => 'Flower Market in Paris',
                9 => 'Bordeaux. Pont de Pietter',
                10 => 'An Austrian Wood',
                11 => 'Venice. Far from Busy Streets',
                12 => 'Parisian Roofscape',
                13 => 'In Love on Bridge',
                14 => 'Rain in Venice',
                15 => 'Dusk on the Seine',
                16 => 'Place des Six Montagnes Noires in Colmar',
                17 => 'Winter Garden in Luxembourg',
                18 => 'Frosty Morning',
                19 => 'Alone in Norway',
                20 => 'Midday in Eguisheim',
                21 => 'Midday in Eze',
                22 => 'Strolling in Vienna',
                23 => 'Riquewihr',
                24 => 'TEST_NAME',

            );

            $artwork_name_rus = array(

                0 => 'Кольмар площадь.',
                1 => 'Крещение.',
                2 => 'Снег в Париже.',
                3 => 'Баржи на Cене',
                4 => 'Баржи на Cене',
                5 => 'Страсбург. Restaurant Au Pont St. Martin.',
                6 => 'Страсбург.La Petite France.',
                7 => 'Тенистые улочки Эза.',
                8 => 'Цветочный базар в Париже.',
                9 => 'Бордо. Pont de Pierre.',
                10 => 'В Австрийском лесу.',
                11 => 'Венеция. Вдали от шумных улиц.',
                12 => 'Крыши Парижа.',
                13 => 'Влюбленные на мосту.',
                14 => 'Дождь в Венеции.',
                15 => 'Закат на Cене.',
                16 => 'Кольмар Place des Six Montagnes Noires.',
                17 => 'Люксембургский сад зимой.',
                18 => 'Морозное утро.',
                19 => 'Норвегия. Уединение.',
                20 => 'Полдень в Эгишем.',
                21 => 'Полдень в Эзе.',
                22 => 'Прогулка по Вене.',
                23 => 'Риквир.',
                24 => 'TEST_NAME',
            );

        }
        if ($type == 'composition') {

            $artwork_name = array(

                0 => 'Square in Colmar, France',
                1 => 'Baptism',
                2 => 'Snow in Paris',
                3 => 'Barges on the Seine',
                4 => 'Barges on the Seine',
                5 => 'Restaurant on the Pont St. Martin. Strasbourg',
                6 => 'Strasbourg Pont St. Martin',
                7 => 'Shady Street. Eze',
                8 => 'Flower Market in Paris',
                9 => 'Bordeaux. Pont de Pietter',
                10 => 'An Austrian Wood',
                11 => 'Venice. Far from Busy Streets',
                12 => 'Parisian Roofscape',
                13 => 'In Love on Bridge',
                14 => 'Rain in Venice',
                15 => 'Dusk on the Seine',
                16 => 'Place des Six Montagnes Noires in Colmar',
                17 => 'Winter Garden in Luxembourg',
                18 => 'Frosty Morning',
                19 => 'Alone in Norway',
                20 => 'Midday in Eguisheim',
                21 => 'Midday in Eze',
                22 => 'Strolling in Vienna',
                23 => 'Riquewihr',
                24 => 'TEST_NAME',

            );

            $artwork_name_rus = array(

                0 => 'Кольмар площадь.',
                1 => 'Крещение.',
                2 => 'Снег в Париже.',
                3 => 'Баржи на Cене',
                4 => 'Баржи на Cене',
                5 => 'Страсбург. Restaurant Au Pont St. Martin.',
                6 => 'Страсбург.La Petite France.',
                7 => 'Тенистые улочки Эза.',
                8 => 'Цветочный базар в Париже.',
                9 => 'Бордо. Pont de Pierre.',
                10 => 'В Австрийском лесу.',
                11 => 'Венеция. Вдали от шумных улиц.',
                12 => 'Крыши Парижа.',
                13 => 'Влюбленные на мосту.',
                14 => 'Дождь в Венеции.',
                15 => 'Закат на Cене.',
                16 => 'Кольмар Place des Six Montagnes Noires.',
                17 => 'Люксембургский сад зимой.',
                18 => 'Морозное утро.',
                19 => 'Норвегия. Уединение.',
                20 => 'Полдень в Эгишем.',
                21 => 'Полдень в Эзе.',
                22 => 'Прогулка по Вене.',
                23 => 'Риквир.',
                24 => 'TEST_NAME',
            );

        }


        return $artwork_name[$key];

    }

    function getArtworkProperty($type, $key) {

        if ($type == 'landscapes') {

            $artwork_name = array(

                0 => '2013,бумага,акварель,41 х 31',
                1 => '2013,бумага,акварель,66 х 42,5',
                2 => '2014,бумага,смешанная техника,77 x 61',
                3 => '2014,бумага,акварель,59,5 х 42',
                4 => '2014,бумага,акварель,59,5 х 42',
                5 => '2013,сангина,41 х 31',
                6 => '2013,cангина,40 х 30',
                7 => '2013,бумага,акварель,41,5 х 60,5',
                8 => '2013,бумага,акварель,56 х56',
                9 => '2015,бумага,акварель,37 x 55',
                10 => '2015,бумага,акварель,41 х 31',
                11 => '2015,бумага,акварель,76 x 56',
                12 => '2014,бумага,акварель,60х 42',
                13 => '2013,бумага,смешанная техника,60х 42',
                14 => '2014,бумага,акварель,76 x 56',
                15 => '2013,бумага,акварель,67 х 42,5',
                16 => '2013,бумага,акварель,31 х 41',
                17 => '2013,бумага,акварель,62,5 х 47,5',
                18 => '2013,бумага,акварель,60,5 х 44',
                19 => '2015,бумага,акварель',
                20 => '2013,бумага,акварель,42,5 х 60',
                21 => '2013,бумага,акварель,41,5 х 60,5',
                22 => '2012,бумага,акварель,41 х 31',
                23 => '2013',
                24 => 'TEST_NAME',

            );

            $artwork_name_rus = array(

                0 => '2013,бумага,акварель,41 х 31',
                1 => '2013,бумага,акварель,66 х 42,5',
                2 => '2014,бумага,смешанная техника,77 x 61',
                3 => '2014,бумага,акварель,59,5 х 42',
                4 => '2014,бумага,акварель,59,5 х 42',
                5 => '2013,сангина,41 х 31',
                6 => '2013,сангина,40 х 30',
                7 => '2013,бумага,акварель,41,5 х 60,5',
                8 => '2013,бумага,акварель,56 х56',
                9 => '2015,бумага,акварель,37 x 55',
                10 => '2015,бумага,акварель,41 х 31',
                11 => '2015,бумага,акварель,76 x 56',
                12 => '2014,бумага,акварель,60х 42',
                13 => '2013,бумага,смешанная техника,60х 42',
                14 => '2014,бумага,акварель,76 x 56',
                15 => '2013,бумага,акварель,67 х 42,5',
                16 => '2013,бумага,акварель,31 х 41',
                17 => '2013,бумага,акварель,62,5 х 47,5',
                18 => '2013,бумага,акварель,60,5 х 44',
                19 => '2015,бумага,акварель',
                20 => '2013,бумага,акварель,42,5 х 60',
                21 => '2013,бумага,акварель,41,5 х 60,5',
                22 => '2012,бумага,акварель,41 х 31',
                23 => '2013',
                24 => 'TEST_NAME',

            );

        }
        if ($type == 'composition') {

            $artwork_name = array(

                0 => 'Square in Colmar, France',
                1 => 'Baptism',
                2 => 'Snow in Paris',
                3 => 'Barges on the Seine',
                4 => 'Barges on the Seine',
                5 => 'Restaurant on the Pont St. Martin. Strasbourg',
                6 => 'Strasbourg Pont St. Martin',
                7 => 'Shady Street. Eze',
                8 => 'Flower Market in Paris',
                9 => 'Bordeaux. Pont de Pietter',
                10 => 'An Austrian Wood',
                11 => 'Venice. Far from Busy Streets',
                12 => 'Parisian Roofscape',
                13 => 'In Love on Bridge',
                14 => 'Rain in Venice',
                15 => 'Dusk on the Seine',
                16 => 'Place des Six Montagnes Noires in Colmar',
                17 => 'Winter Garden in Luxembourg',
                18 => 'Frosty Morning',
                19 => 'Alone in Norway',
                20 => 'Midday in Eguisheim',
                21 => 'Midday in Eze',
                22 => 'Strolling in Vienna',
                23 => 'Riquewihr',
                24 => 'TEST_NAME',

            );

            $artwork_name_rus = array(

                0 => 'Кольмар площадь.',
                1 => 'Крещение.',
                2 => 'Снег в Париже.',
                3 => 'Баржи на Cене',
                4 => 'Баржи на Cене',
                5 => 'Страсбург. Restaurant Au Pont St. Martin.',
                6 => 'Страсбург.La Petite France.',
                7 => 'Тенистые улочки Эза.',
                8 => 'Цветочный базар в Париже.',
                9 => 'Бордо. Pont de Pierre.',
                10 => 'В Австрийском лесу.',
                11 => 'Венеция. Вдали от шумных улиц.',
                12 => 'Крыши Парижа.',
                13 => 'Влюбленные на мосту.',
                14 => 'Дождь в Венеции.',
                15 => 'Закат на Cене.',
                16 => 'Кольмар Place des Six Montagnes Noires.',
                17 => 'Люксембургский сад зимой.',
                18 => 'Морозное утро.',
                19 => 'Норвегия. Уединение.',
                20 => 'Полдень в Эгишем.',
                21 => 'Полдень в Эзе.',
                22 => 'Прогулка по Вене.',
                23 => 'Риквир.',
                24 => 'TEST_NAME',

            );

        }

        return $artwork_name[$key];

    }

}