# Development

## Local development

You can setup your own *development* environment of **Moodle**, by using a [Docker containers](https://www.docker.com/resources/what-container/) and a [Docker compose](https://docs.docker.com/compose/) manifest.

### Requirements

- Docker Desktop

### Setup

We use the manifest provided by **Bitnami**, a known vendor and maintainer of open-source software images; if you want the original file, fetch it from [here](https://raw.githubusercontent.com/bitnami/containers/main/bitnami/moodle/docker-compose.yml).

Start the Docker engine manually (open Docker Desktop). Then move into the Docker folder and start the scenario;:

```bash
cd docker
docker-compose up
```

Then access **Moodle** in your browser, with URL `http://localhost:8080/`.
