It is an Ubuntu server with apache 2 with php 7.2 , Opcache and Xdebug on port 9000
For more information read the docker-compose.yml file.

1. Run the application
```
    docker-compose up -d
```
2. Access to the the aplication page. Put localhost in url browser bar. The port for accessing is 80
```
    localhost
```

3. The port to access to mysql database is 6666.

4. We can change the ports of access in the docker-compose.yml file.

5. The php.ini configuration is in the folder conf-apache/custom_php.ini


Obs: 
I don't know why the containers didn't start, but with the fixes in the file Dockerfile-percona, this problem was fixed.
I guess the problem was that the user root was duplicated.
