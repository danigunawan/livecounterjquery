# livecounterjquery

this script counts the number of records in a mysql database in real time and plays a sound when you enter a new record.

1. the createtable.sql file creates a table that we will use to compare with the current number of users. in which we have to insert a single record with a value less than the actual quantity.

2. the back.php file compares the actual quantity with the inserted quantity and returns true/false

3. file 2.php returns the actual amount from the "real table".

4. in the index.php file are called the two files (back and 2) every 3 seconds using jQuery.

