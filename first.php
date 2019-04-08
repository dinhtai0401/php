<?php include "menu.php" ?>
    <h1>PHP Basics</h1>
    <?php
    $myname="Tai";
    echo "Hello $myname";
    echo '<br>';
    echo 'Hello ' .$myname;
    echo '<br>';
    echo 'Here is the link: <a href="www.oamk.fi">'.$myname.'</a>';
    ?>
    <h2>An array</h2>
    <?php
    $students=array('Jim', 'Lissa', 'Bob');
    echo 'Second student is '. $students[1];
    ?>
    <h3>print_r-function</h3>
    <?php print_r($students); ?>
    <h3>foreach -loop</h3>
    <ul>
    <?php
        foreach ($students as $row)
            {
                echo '<li>'.$row.'</li>';
            }
    ?>
    </ul>
    <h3>Two-dimensional array</h3>
    <?php
        $names=array
        (
            array('Jim','Smith'),
            array('Lisa','Jones'),
            array('Bob','Daniels')
        );
        echo 'with print_r<br>';
        print_r($names);
        echo '<br>';
        echo 'with foreach-loop<br>';
        echo '<ul>';
        foreach ($names as $row)
        {
            echo '<li>'.$row[0].' '.$row[1].'</li>';
        }
        echo '</ul>';
    ?>
<?php include "footer.php"; ?>    
