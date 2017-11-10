<html>
<head>
    <title>Zipcode Query</title>
</head>
<body>
    <h1>Zipcode Information</h1>
    <form method="post">
        <table border="1">
            <tr>
                <td>Enter a zipcode: <input type="text" size="10" name="input"/></td>
                <td><input type="submit"></td>
            </tr>
         </table>
    </form>
    <?php
        if (array_key_exists('input', $_POST)) {
            $input = $_POST['input'];
            try {
                $dbh = new PDO('pgsql:dbname=zipcodes');
                $res = $dbh->query("SELECT primary_city, population, areacode FROM zip INNER JOIN zip_area ON (zip.zipcode=zip_area.zipcode) WHERE zip.zipcode='$input'", PDO::FETCH_ASSOC);
                echo '<pre>';
                echo '<table border="1">';
                foreach ($res as $row) {
                    echo '<tr>';
                    foreach ($row as $col_name=>$row_value) {
                        echo '<td>'.$col_name.'</td>';
                    } // end foreach
                    echo '</tr>';
                    echo '<tr>';
                    foreach ($row as $col_name=>$row_value) {
                        echo '<td>'.$row_value.'</td>';
                    } // end foreach
                    echo '</tr>';
                } // end foreach
                echo '</table>';
                echo '</pre>';
                $dbh = null;
            } // end try
            catch (PDOException $e) {
                echo '<pre>';
                print "Error: ".$e->getMessage();
                echo '</pre>';
                die();
            } // end catch
        } // end if
    ?>
</body>
</html>
