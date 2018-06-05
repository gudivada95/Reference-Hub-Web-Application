# Reference-Hub-Web-Application
Web application designed for DBMS course. All information can be found in the PDF file. 

Since an external host service was used, if you wish to run the application on localhost, you will need to follow the instructions of how to set up a web application on that specific service.
X10hosting.com was used for this project and can be run on there if reuploaded in a directory.
Please note the files will need to be named exactly what they are in the file, as they are referenced within the html pages.



File List

Action_select.html -  Main page of the application with internal links to the three sub pages      
connection.php - ensures connection of DB1, requirement for several php scripts
connectionRef.php- ensures connection of DB2, requirement for several php scripts
delete_reference.html - page to delete a reference, linked to delete.php
delete.php -contains php script to delete data with a SQL query embedded within
display_all.php - php script to display all user stored information (contains the loop to print references as discussed in the report)
error_log - cumulative log of any errors in the system
login_attempt.php - php script which ensures the user entered valid log-in credentials to use the application
login.php - log-in page which user_selection.html links to
search_reference.html- page to search all existing references
sign_up.html - sign up page which user_selection.html links to
store_data.php - takes user input information and places in the correct database
thankyou1.php - takes user entered information to the login database
user_selection.html - the second page which prompts the user to sign-in or create a new account
welcome_page1.html - the main welcome page with an introduction


The rest of the files are corresponding images which need to be included in the same directory in order to be displayed on their respective html pages.
