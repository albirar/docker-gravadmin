DOCKER_USERNAME ?= octavifornescat
APPLICATION_NAME ?= resume

build:
	docker build --tag ${DOCKER_USERNAME}/${APPLICATION_NAME} .


publish:
	docker push ${DOCKER_USERNAME}/${APPLICATION_NAME}