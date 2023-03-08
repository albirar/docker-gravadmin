DOCKER_USERNAME ?= octavifornescat
APPLICATION_NAME ?= gravadmin
TAG ?= 1.0

content:
	rm -Rf assets/grav-admin
	tar xzf assets/grav-admin.tgz -C assets

build: content
	docker build --tag ${DOCKER_USERNAME}/${APPLICATION_NAME}:${TAG} .


publish: build
	docker tag ${DOCKER_USERNAME}/${APPLICATION_NAME}:${TAG} ${DOCKER_USERNAME}/${APPLICATION_NAME}:latest
	docker push ${DOCKER_USERNAME}/${APPLICATION_NAME}:${TAG}
	docker push ${DOCKER_USERNAME}/${APPLICATION_NAME}:latest
