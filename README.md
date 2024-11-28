# Simulation SQL Injection

## Required

- [Docker](https://www.docker.com/)

## Clone Repo

```sh
git clone --branch main --single-branch https://github.com/naufal-yafi/sql-inject.simulate.git
```

## Setup ENV

```sh
cp php/web/app/config/.env.example php/web/app/config/.env 
```

## Run Server

```sh
sh run
```

or

```sh
docker-compose up --build
```

## Server Host

```
http://localhost:8080
```