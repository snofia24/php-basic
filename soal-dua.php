<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $kids; // Lengkapi di sini
    $adults; 
    $kids = array("Mike", "Dustin", "Will", "lucas", "max", "eleven") ;
    print_r($kids); 
    echo "<br>";
    $Adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];
    print_r($Adults);
    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: 6"; // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    echo  "<li> $kids[1] </li>" ;
    echo  "<li> $kids[2] </li>" ;
    echo  "<li> $kids[3] </li>" ;
    echo  "<li> $kids[4] </li>" ;
    echo  "<li> $kids[5] </li>" ;
    // Lanjutkan

    echo "</ol>";

    echo "Total Adults: 5"; // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    echo "<li> $Adults[0] </li>" ;
    echo "<li> $Adults[1] </li>" ;
    echo "<li> $Adults[2] </li>" ;
    echo "<li> $Adults[3] </li>" ;
    echo "<li> $Adults[4] </li>" ;
    // Lanjutkan

    echo "</ol>";

    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"


            Output:
            Array
                (
                    [0] => Array
                        (
                            [Name] => Will Byers
                            [Age] => 12
                            [Aliases] => Will the Wise
                            [Status] => Alive
                        )

                    [1] => Array
                        (
                            [Name] => Mike Wheeler
                            [Age] => 12
                            [Aliases] => Dugeon Master
                            [Status] => Alive
                        )

                    [2] => Array
                        (
                            [Name] => Jim Hooper
                            [Age] => 43
                            [Aliases] => Chief Hopper
                            [Status] => Deceased
                        )

                    [3] => Array
                        (
                            [Name] => Eleven
                            [Age] => 12
                            [Aliases] => El
                            [Status] => Alive
                        )

                )
            
        */
        echo "<h3> Soal 3 </h3>";

        $enditas = [
        [
            "nama" => "Will Byers",
            "Age" => "12",
            "Aliases" => "Will the Wise",
            "Status" => "Alive", 
        ], 
        [
            "nama" => "Mike Wheeler",
            "Age" => "12",
            "Aliases" => "Dugeon Master",
            "Status" => "Alive", 
        ],
        [
            "nama" => "Jim Hooper",
            "Age" => "43",
            "Aliases" => "Chief Hopper",
            "Status" => "Deceased", 
        ],
        [
            "nama" => "Eleven",
            "Age" => "12",
            "Aliases" => "El",
            "Status" => "Alive", 
        ]
        ];
          
    echo "<pre>";
    print_r($enditas);
    echo "</pre>";
        
    ?>
</body>
</html>