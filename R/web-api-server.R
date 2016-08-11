library(plumber)

r <- plumb("web-api-endpoints.R")
r$run(port=8123)
