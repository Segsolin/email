__REQUIREMENTS__
1. Apache server
2. Mysql database

__STEPS TO INSTALL__
start apache server (either xampp or wamp or any other).
start Mysql server
migrate the database by executing the database_init.sql and database_init2.sql file in the sql folder found in root directory
import the database tables from the knowledge_base.sql file.
login as admin with username = admin and password = password.
create a new admin account by navigating to email/resources/register-admin.php from a browser.
make sure to delete previous admin with username = admin and password = password from the database.
train the system by navigating to email/php/controller/training-controller.php from a browser.