build:
	docker build -t php-parallel .

run: build
	docker run php-parallel