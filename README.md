# Multi model behaviour analysis using Machine learning

A Research project under Prof. Kavita Kelkar which aims at guaging the understanding of Student in context of Learning. 
The code base is divided into two parts -
  - UI for conducting Exam
  - Analysis of Data to classify emotion/behaviour.

## Introduction

The components:
- UI - The UI is able to capture parameters of student while interacting with interface or while giving exams like 
         average movement of mouse, Number of times Student Change an option, hints taken, time taken per question,
         difficulty of questions, normalised weights of each question and many more.
         
         Note: Only the Javascript and PHP code is committed on github. 

- Analysis - The aim was to classify behaviour of student while appearing for exam into confused and not confused and later represent it on
              on a fuzzy scale. Preprocessing included, data transformation, calculating other parameters like normalised weights based on 
              parameters captured. The data was then classified using SVM, Random Forest with Boosting, Decision Trees, Beta Regression.
              Since the size of data is small, SVM worked well as compared to other models. 
              To avoid overfitting L1 Regularisation is used.
              
              Note: At end of every 5 questions, students were asked to report the state of mind while 
              answering those questions, hence leading to Supervised learning.


### Implementation 

- The UI is designed using HTML/CSS and Javascript. Php is used fot backend. The parameters are captured using JS and PHP.
- Sckit-Learn, Pandas, Numpy, Matplotlib Libraries in Python is used for Preprocessing, hyperparameter optimization and 
  classifying parameters into emotion.
- Beta Regression is implemented using betareg library and offers better accuracy.

### Results

- An intersting correlation was found between moment of mouse and user behaviour. Also, for few students time of day 
  impacted their performance.
- SVM worked better for small data size along with Beta Regression.

## Further Notes

Research is still continued in field of affective computing in context of learning. All the code of project 
is not committed here along with dataset. Consent of student is taken while data collection process.

For any question feel free to reach out
