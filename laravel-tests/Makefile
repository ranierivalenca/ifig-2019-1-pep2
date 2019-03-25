conf:
# 	sudo apt-get install php7.2 php7.2-mbstring php7.2-mysql php7.2-intl php7.2-xml composer
# 	sudo apt-get install mysql-server-5.7
	composer install --no-scripts
	cp .env.example .env
	php artisan key:generate
	$(MAKE) bd-conf

conf-git-ranieri:
	git config user.email "ranierivalenca@gmail.com"
	git config user.name "Ranieri"

bd-conf:
	mysql -u root -p --execute="drop database if exists laraveltest; create database laraveltest; drop user if exists 'laratest'; create user 'laratest' identified by 'larasecret'; grant all privileges on laraveltest.* to 'laratest';"
	sed -i 's/DB_DATABASE.*/DB_DATABASE=laraveltest/' .env
	sed -i 's/DB_USERNAME.*/DB_USERNAME=laratest/' .env
	sed -i 's/DB_PASSWORD.*/DB_PASSWORD=larasecret/' .env
	php artisan migrate:refresh --seed

