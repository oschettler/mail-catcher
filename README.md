# mail-catcher
A simple PHP script to catch mail and open in the Mac OSX application 

## Installation

Put this in your /etc/sudoers file

````
%www    ALL=(ALL)   NOPASSWD: /path/to/mail-catcher/catcher.php
````

In /etc/php.ini, set the sendmail path as

````
sendmail_path="sudo -u olav /path/to/mail-catcher/catcher.php"
````
