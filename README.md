# Docker image for gravcms with admin plugin

This repo contains the source for create a docker image, named `octavifornescat/gravadmin` with:

* nginx
* php8
* grav-cms

This image is based on `alpine:3.17`.

Use the `Makefile` to build, tag and push the image, only need to change the variables:

* `DOCKER_USERNAME`: the username of hub.docker repository
* `APPLICATION_NAME`: the image name
* `TAG`: the version tag for the build image

The grav-cms installed are ready to use, with the first step for create admin user.

## Volumes

The significant volumes are:

1. `/var/www/html/user/accounts`
2. `/var/www/html/user/config`
3. `/var/www/html/user/data`
4. `/var/www/html/user/plugins`
5. `/var/www/html/user/pages`
6. `/var/www/html/user/images`
7. `/var/www/html/user/themes/`

Read the [grav-cms documentation](https://learn.getgrav.org/) in order to know how to use them.

## Use directly

Direct use can be made, but no persistence is done. The example show the use for 8080 port on localhost:

`docker run -d --name gravcms -p 8080:80 octavifornescat/resume:latest`

## Use with docker compose

In order to use the image with docker-compose, first of all show to use a volume with the original contents of _grav-cms_ directory `user`:

```bash
curl -s -o localgrav.zip -L https://getgrav.org/download/core/grav-admin/latest
unzip localgrav.zip
cp -R grav/user volumes/user
```

Then assign the volumes you need to docker compose volumes. For persistence:

```yaml
volumes:
   - ./volumes/user:/var/www/html/user
```

