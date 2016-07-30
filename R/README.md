### Pre-Requisites

Install the required packages. (This was done as root on the production server)
Within R:
```
install.packages("caret")
install.packages("rpart")
install.packages("plumber")
```

### Running
Running from the command line:
```r -f web-api-server.R```

The endpoint that calculates likelihood as a percentage is:
[http://localhost:8123/perc?month=1]
A number of other paramters must be provided - the service will give an error if a required parameter is missing.

There is an example endpoint you can test with. It accepts up to 3 parameters (param1, param2, param3) and will echo them back to you.
```
http://localhost:8123/example?param1=hello&param2=world&param3=!
```
