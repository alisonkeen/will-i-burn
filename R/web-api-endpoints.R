library(lubridate)
library(caret)
library(nnet)

df <- read.csv("Unleashed_Data_Framework.csv")

df$Date <- dmy(df$Date)
df$Region <- as.factor(df$Region)
df$Year <- as.factor(df$Year)
df$Month <- as.factor(df$Month)
df$Above.35 <- as.numeric(df$Above.35)
df$Burnoff <- as.numeric(df$Burnoff)
df$Hectares.burned <- as.numeric(df$Hectares.burned)
df$Region.Hectares <- as.numeric(df$Region.Hectares)
df$Bushfire <- as.factor(df$Bushfire)
df$Severe.Bushfire <- as.factor(df$Severe.Bushfire)

model.perc <- train(Hectare.Percent.Burnt~Month+Region+Temp+Above.35, data = df, method = "nnet")

#* @get /perc
perc <- function(month, region, temp, above.35){
  
  Month <- as.factor(month)
  Region <- as.factor(region)
  Temp <- as.numeric(temp)
  Above.35 <- as.numeric(above.35)
  
  newdata <- data.frame(Month, Region, Temp, Above.35)
  predict(model.perc, newdata = newdata)
}


bf <- read.csv("Bushfire_database.csv")

bf$FIREDATE <- mdy(bf$FIREDATE)

#* @get /bushfire_count
bushfire_count <- function(region){
  date <- (Sys.Date()-(365)*2)
  date <- ymd(date)
  nrow(subset(bf, FIREDATE > date & region_code == region & INCIDENTTY == "Bushfire"))
}

#* @get /prescribed_count
prescribed_count <- function(region){
  date <- (Sys.Date()-(365)*2)
  date <- ymd(date)
  nrow(subset(bf, FIREDATE > date & region_code == region & INCIDENTTY == "Prescribed Burn"))
}
