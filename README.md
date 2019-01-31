# CyptianCTF
A simple PHP-based CTF created for a presentation on cybersecurity for the RCMP, OPP &amp; Toronto Cyber Crime. This CTF utilizes knowledge of MySQL queries, upload bypass vulnerabilities, and extensive directory fuzzing. 

## Instructions
1) Edit the connection credentials found under /web/login/authenticate.php
2) Copy contents of the /web/ folder to your httpd file serving directory (typically /var/www/html)
3) Execute the MySQL Script 
4) Execute the bash script
5) Head to <YOUR_SERVER_IP>/cyptianCTF

## Solution
1) Fuzz until you find backup.zip
2) Identify MySQL credentials and connect to the remote MySQL server
3) View permissions (UPDATE/INSERT) and either modify existing admin user or insert a new user (must utilize bcrypt generated password)
4) Visit the login portal (/login/) and sign in with newly created credentials 
5) Use Burpsuite to modify the request by changing the content type, extension, and by adding some image data to the script
6) visit /login/administration/uploads to access uploaded payload
7) SUCC355
