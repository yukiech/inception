#!/bin/sh

if [ -f ".init_done" ]; then
    echo "init done"
    /usr/bin/mysqld
else
    echo "Init starting."
    echo "Starting mariadb + setup."
    envsubst < init_var.sql > init.sql
	/usr/bin/mysqld_safe &
	sleep 5
    mariadb -u root < init.sql
    echo "Init setup OK."
    touch .init_done
    echo "Removing init.sql."
	rm init.sql
    echo "Mariadb starting ..."
    /usr/bin/mysqld
fi
