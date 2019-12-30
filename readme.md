# Lab 13 demonstration

This project demonstrates configuring Monolog (in Laravel) to push logs to Logstash.

Logstash can push the logs on to a third-party central service which will help you to make your logs immutable (as well as improve their searchability).

## Running this project

You can run the project with these commands:

    cd docker
    CURRENT_ID=$(id -u):$(id -g) docker-compose up -d
    
Use the following command to check on the status of the Logstash service

    docker logs logstash
    
 Wait until the Logstash logs indicate that it is ready to listen for incoming connections.  This line will include a message like this:
 
    Successfully started Logstash API endpoint {:port=>9600}