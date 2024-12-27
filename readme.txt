Installation Manual - Windows Deployment
XAMPP Installation
XAMPP is a software suite that includes Apache, MySQL, PHP, and Perl. It's a popular solution for developing web applications locally.

Steps to install XAMPP:

Download XAMPP: Visit the official XAMPP website (https://www.apachefriends.org/index.html) and download the Windows version.
Install XAMPP: Run the downloaded installer. During installation, you can select the desired components. It's recommended to keep the default options, which include Apache, MySQL, and PHP.
Configure ports: If necessary, configure the ports for Apache and MySQL during installation. The default values are usually suitable.
Complete the installation: Follow the on-screen instructions to finish the installation.
Run the XAMPP Control Panel: After installation, open the XAMPP Control Panel. From there, you can start and stop the Apache and MySQL modules as needed.
Composer Installation
Composer is a dependency management tool for PHP. It's used to install and update libraries and dependencies in PHP projects, such as Laravel.

Steps to install Composer:

Download Composer: Visit the official Composer website (https://getcomposer.org/) and download the Windows installer.
Install Composer: Run the downloaded installer. During installation, ensure you select the option to use Composer from the command line.
Verify installation: Open a command prompt (CMD) and type composer. If the installation was successful, you should see the Composer version and available command options.
Installing Packages
To download and install the packages configured in a project's composer.json file, use the composer install command.
Before using this command, navigate to the directory containing the Flashy project, as it's required to execute the application.

This command performs the following steps:

Reads the composer.lock file or, if it doesn't exist, the composer.json file.
Searches for the specified packages on Packagist.
Resolves the version to install for each package based on the indicated versions and stability configuration.
Resolves all dependencies for those versions.
Installs all packages and their dependencies.
Once the packages are installed, if composer.lock doesn't exist, it's created to capture a snapshot of the application's execution environment. It also creates the application's class autoloader files.

Creating a MySQL Database
Steps to Import a share.sql File into MySQL Using phpMyAdmin

Access phpMyAdmin:

Start XAMPP and ensure the MySQL module is running.
Open your web browser and visit http://localhost/phpmyadmin or access it through the XAMPP control panel.
Import the SQL File:

With the desired database selected, click the "Import" tab.
In the "File to import" section, click "Browse" and select the share.sql file.
Click "Go" to start the import process.
Execute and Verify the Import:

phpMyAdmin will process the file and execute the SQL instructions.
Upon completion, you should receive a success message.
Verify that the tables and data were imported correctly by navigating the database in phpMyAdmin.