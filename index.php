<?php
    /* 
        SNACK 1
        Utilizzare questo array: https://pastebin.com/CkX3680A.
        Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
    */

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    /* ----------------------------------------------------------------------- */

    /* 
        Snack 2
        Creare un array contenente qualche alunno di un’ipotetica classe.
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
        Stampare Nome, Cognome e la media dei voti di ogni alunno.
    */

    $class14 = [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni',
            'votes' => [27, 30, 28, 29, 27]
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri',
            'votes' => [23, 27, 24]
        ],
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini',
            'votes' => [26, 19, 30, 28]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Snack</title>
    </head>
    <body>

        <header>
            <h1>
                PHP Snack
            </h1>
        </header>

        <main>
            <section>
                <h2>
                    Snack 1
                </h2>

                <div style="background-color: #777;">
                    <h3>
                        Teachers
                    </h3>
                    <ul>
                        <?php
                            foreach ($db['teachers'] as $index => $singleTeacher) {
                                echo '<li>'.$singleTeacher['name'].' '.$singleTeacher['lastname'].'</li>';
                            }
                        ?>
                    </ul>
                </div>

                <div style="background-color: green;">
                    <h3>
                        PM
                    </h3>
                    <ul>
                        <?php
                            foreach ($db['pm'] as $index => $singleTeacher) {
                                echo '<li>'.$singleTeacher['name'].' '.$singleTeacher['lastname'].'</li>';
                            }
                        ?>
                    </ul>
                </div>
            </section>

            <!-- --------------------------------------------------------------------------------------------------------- -->

            <section>
                <h2>
                    Snack 2
                </h2>

                <div>
                    <h3>
                        Alunni
                    </h3>
                    <ul>
                        <?php
                            foreach ($class14 as $index => $singleStudent) {
                                echo '<li>';
                                echo $singleStudent['name'];
                                echo ' ';
                                echo $singleStudent['lastname'];
                                echo ' ';

                                $sum = 0;
                                for ($i = 0; $i < count($singleStudent['votes']); $i++) { 
                                    $sum += $singleStudent['votes'][$i];
                                }

                                $average = round($sum / count($singleStudent['votes']), 1);
                                echo $avg;

                                echo '</li>';
                            }
                        ?>
                    </ul>
                </div>
            </section>
        </main>
        
    </body>
</html>