#  Dockernize Symfony4 Stack : Nginx, MariaDB, ES 


An environment based on docker and docker-compose to run Symfony4


## Setup

First, clone the repo

```bash
$ git clone repo
$ cd symfony4
```

## Setup

Start containers with docker-compose :

```bash
$ docker-compose up -d --build
```

Add www.app.dev to the hosts file :

```bash
$ sudo vi /etc/hosts  # add 127.0.0.1 www.app.dev
```
To preview the demo :

```bash
http://www.app.dev/ # or http://www.app.dev:[YOUR_PORT]/ 
```

SSH on aya_app container :

```bash
$ docker ps
$ docker exec -it [CONTANER_ID|CONTANER_NAME] /bin/bash  #aya_app
$ composer install
```

To stop all Docker containers:

```bash
$ docker stop $(docker ps -a -q)
```