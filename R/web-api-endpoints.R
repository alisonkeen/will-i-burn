library(caret)
library(rpart)

df <- read.csv("FAKE_Unleashed_Data_Framework.csv")

model.perc <- train(HectarePerc ~ Month+Region+Temp+Above.35, data = df, method = "lm")

#* @get /perc
perc <- function(month, region, temp, above.35){
  
  Month <- as.numeric(month)
  Region <- as.numeric(region)
  Temp <- as.numeric(temp)
  Above.35 <- as.numeric(above.35)

  newdata <- data.frame(Month, Region, Temp, Above.35)
  predict(model.perc, newdata = newdata)
}


#* @get /example
example <- function(param1="", param2="", param3=""){
  paste("You sent: param1=", param1, "; param2=", param2, "; param3=", param3, sep="")
}
