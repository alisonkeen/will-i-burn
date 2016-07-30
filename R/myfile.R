#* @get /example
example <- function(param1="", param2="", param3=""){
  paste("param1=", param1, "; param2=", param2, "; param3=", param3, sep="")
}