
library(plumber)
r <- plumb("myfile.R")
r$run(port=8123)