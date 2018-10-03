# livecounterjquery

Demo http://facundoq.site/livecounterjquery/

this script counts the number of records in a mysql database in real time and plays a sound when you enter a new record.

1. import the createdb.sql file into phpmyadmin. in this file we create a new database, the users table and the counter secondary table that we will use to store the value for comparison. 

2. in the configdb.php file we must modify the details of our database.

3. the back.php file compares the values and updates the counter table and return true/false to activate the sound

3. file display.php returns the counter of users table.

4. in the index.php file are called the two files (back.php and display.php) every 2 seconds using jQuery.

