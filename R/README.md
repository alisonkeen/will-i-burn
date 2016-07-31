### Pre-Requisites

Install the required packages. (This was done as root on the production server)
Within R:
```
install.packages("lubridate")
install.packages("caret")
install.packages("nnet")
install.packages("plumber")
```

### Running on ghost Server
The API has been setup as a service, which will startup automatically. If you change the code (e.g. git pull to the server), you should restart the service:
```
sudo systemctl restart R 
```

You can check status of the service with:
```
sudo systemctl status R
```
And tail logs with
```
sudo journalctl -u R -f
```

### Running Locally
Running from the command line:
```r -f web-api-server.R```

The endpoint that calculates likelihood as a percentage is:
```
http://localhost:8123/perc?month=12&region=4
```
A number of other paramters must be provided - the service will give an error if a required parameter is missing.
