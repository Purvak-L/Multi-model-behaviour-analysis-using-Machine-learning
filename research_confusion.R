
library (betareg)  # initialize data
inputData <- read.csv('train_confusion.csv')  # plug-in your data here
trainingIndex <- c(1:(nrow(inputData)-1))  # create row indices of training data
trainingData <- inputData[trainingIndex, ] # training data
testData <- inputData[-trainingIndex, ] # test data
betaMod <- betareg( Confused ~ Time_diff + Hints + Weigths, data = trainingData) # train model. Tune var names.
summary (betaMod) # model summary
predict (betaMod, testData) # predict on test data (0.19 vs actual 0.18)
