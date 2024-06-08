# Laravel Vue Nginx Render Template

## Local Development

1. Open a terminal and change current directory to app

    ````cmd
    cd app

2. Build the docker image

    ````sh
    docker build --tag 'template' . --no-cache --force-rm --build-arg ENVIRONMENT="local"

3. Run the docker image

    ````sh
    docker run -p 3000:80 'template'
