library(caret)
library(rpart)

df = read.csv("FAKE_Unleashed_Data_Framework.csv")

model.perc <- train(HectarePerc ~ Month+Region+Dry+Temp+Above.35+Burnoff, data = df, method = "rpart")

#* @get /perc
perc <- function(month, region, dry, temp, above.35, burnoff){

  Month <- as.numeric(month)
  Region <- as.numeric(region)
  Dry <- as.numeric(dry)
  Temp <- as.numeric(temp)
  Above.35 <- as.numeric(above.35)
  Burnoff <- as.numeric(burnoff)

  newdata <- data.frame(Month, Region, Dry, Temp, Above.35, Burnoff)
  colnames(newdata) <- c("Month", "Region", "Dry", "Temp", "Above.35", "Burnoff")
  predict(model.perc, newdata = newdata)
}


#* @get /example
example <- function(param1="", param2="", param3=""){
  paste("You sent: param1=", param1, "; param2=", param2, "; param3=", param3, sep="")
}
