ALTER USER root@localhost IDENTIFIED VIA mysql_native_password;
SET PASSWORD FOR 'root'@'localhost' = PASSWORD('${MARIADB_ROOT_PWD}');
CREATE DATABASE ${WP_DB};
CREATE USER '${MARIADB_USER}'@'%' IDENTIFIED by '${MARIADB_USER_PWD}';
GRANT ALL PRIVILEGES ON ${WP_DB}.* TO ${MARIADB_USER}@'%';
FLUSH PRIVILEGES;
