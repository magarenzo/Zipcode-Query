# zipcode-query
Query for data relating to a user-inputted zipcode

---

After [*zip.php*](https://github.com/magarenzo/zipcode-query/blob/master/zip.php) successfully connects to the PSQL database, it uses the user-inputted zipcode to finish the included query written. If the query is succesful, the webpage hosting the script will display the pulled data. PHP-based front-end formatted with HTML. 

---

<h3>Output:</h3>

![](https://magarenzo.com/hosting/query.png)

---

<h3>Necessary Installations:</h3>

* [`psql`](https://help.ubuntu.com/lts/serverguide/postgresql.html)
* [`Free Zipcode Database`](http://federalgovernmentzipcodes.us/)

---

<h3>To Do:</h3>

* Add sanitation checks to prevent cross-site scripting

---

This was originally created as an assignment in CSC443 (Database Management Systems). It has undergone changes since then.
