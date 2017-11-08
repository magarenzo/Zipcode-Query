# zipcode-query
Uses PHP to connect to a PostgreSQL database and query data

---

After *zip.php* successfully connects to the database, it uses the user-inputted zipcode to finish the included query written in PSQL. If the query is succesful, the webpage hosting the script will display the pulled data. Front-end formatted with HTML. 

---

<h3>Output:</h3>

<h1>Zipcode Information</h1>

![](https://magarenzo.com/hosting/zipcode.png)

SELECT primary_city, population, areacode FROM zip INNER JOIN zip_area ON (zip.zipcode=zip_area.zipcode) WHERE zip.zipcode='11530';

<b>city&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pop.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;areacode</b>

4213&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;28710&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;516<br>4213&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;28710&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;631<br>4213&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;28710&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;718

---

<h3>Necessary Installations:</h3>

* [`psql`](https://help.ubuntu.com/lts/serverguide/postgresql.html)

---

*zip.php* was originally created as an assignment in CSC443 (Database Management Systems). It has undergone changes since then.
