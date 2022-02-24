# docker_laravel_login_system
docker nginx mysql phpmyadmin laravel with bootstrap

#RUN MIGRATION

docker-compose exec app php artisan migrate

# laravel app is inside login_system folder

![Web capture_23-2-2022_10258_localhost](https://user-images.githubusercontent.com/4477125/155252054-8820af1d-0109-483e-9a32-fdb8b74921bf.jpeg)

![Web capture_23-2-2022_102429_localhost](https://user-images.githubusercontent.com/4477125/155252059-1d115b6e-99f0-497a-8857-01905fe21928.jpeg)

![Web capture_23-2-2022_10243_localhost](https://user-images.githubusercontent.com/4477125/155252063-a52e7cfc-f0d2-4b49-9abc-4526d128855d.jpeg)

# sample API
http://localhost:8000/api/User/show

http://localhost:8000/api/User/detail/1

http://localhost:8000/api/User/update

{
	"user_id": 1,
	"name": "user name here",
	"email" : "testemail@testcom",
	"password": "test"
}
