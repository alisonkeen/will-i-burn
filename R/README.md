### Pre-Requisites

Install the `plumber` package for R.
Within R:
```
install.packages("plumber")
```

### Running
Running from the command line:
```r -f web-api.R```

There is an example endpoint you can test with. It accepts up to 3 parameters (param1, param2, param3) and will echo them back to you.
```
http://localhost:8123/example?param1=hello&param2=world&param3=!
```
