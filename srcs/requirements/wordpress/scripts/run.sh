#!/bin/sh

if [ -e .install_done ]
	then
		echo "Wordpress already configured."
	else
		sleep 5;
		if ! mysqladmin --host=$MARIADB_HOST \
				--user=$MARIADB_USER \
				--password=$MARIADB_USER_PWD \
				--wait=30 ping > /dev/null ; then
			echo "ERROR : SQL not running."
			exit 1;
		else
			wp core install --path=${WP_DIR}/html \
			--url=${WP_URL} \
			--title=Inception \
			--admin_user=${WP_ADMIN} \
			--admin_password=${WP_ADMIN_PWD} \
			--admin_email=${WP_ADMIN_EMAIL} \
			--skip-email
			wp user create --path=${WP_DIR}/html ${WP_USER} ${WP_USER_EMAIL} --role=author --user_pass=${WP_USER_PWD}
			touch .install_done
		fi
fi

php-fpm7 # start php-fpm7
