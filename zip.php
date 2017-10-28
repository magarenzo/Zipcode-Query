<html>
<head>
    <title>zipcode-query</title>
</head>
<body>
    <h1>Zipcode Information</h1>
    <form>
        <table border="1">
            <tr>
                <td>Enter zipcode: <input type="zip" size="10" name="zip"></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    <?php
        try { // connect to the database
            $dbh = new PDO('pgsql:dbname=zipcodes');
        } // end try
        catch (PDOException $e) { // error catching
            print "Error: ".$e->getMessage()."<br/>";
            die();
        } // end catch
        $i=1;
        echo "<pre>";
        $q = "SELECT primary_city, population, areacode FROM zip INNER JOIN zip_area ON (zip.zipcode=zip_area.zipcode)";
        if (array_key_exists("zip", $_REQUEST)) {
            $q .= " WHERE zip.zipcode='" . $_REQUEST['zip']."';";
        } // end if
        else {
            $q .= " LIMIT 10";
        } // end else
        print "<pre>$q";
    ?>
    <br><br><b>city     pop.     area</b>
    <?php
        print "\n";
        $res = $dbh->query($q, PDO::FETCH_ASSOC);
        foreach ($res as $row) {
            foreach ($row as $key=>$value) {
                print "$value\t";
            } // end foreach
            print "\n";
        } // end foreach
        $dbh = null;
    ?>
    </form>
</body>
</html>
