Tip Amount vs. Delivery Time: Regression Analysis

Project Overview

This project involves a regression analysis aimed at exploring the relationship between delivery time and tip amount. The primary goal is to quantify how much variation in tip amounts can be explained by delivery time, providing insights into customer behavior in relation to service efficiency.

Objectives
      Understand the effect of delivery time on tip amounts.
      Build a linear regression model to predict tip amounts based on delivery times.
      Quantify the proportion of variation in tips that can be attributed to delivery times.
      Validate the model using statistical metrics like R-squared, ESS (Explained Sum of Squares), and TSS (Total Sum of Squares).
      
Key Findings
      R-squared Value: The model produced an R-squared value of 0.2315, indicating that 23.15% of the variation in tip amounts can be explained by delivery time. This suggests a moderate relationship between the two variables.
                      Model Verification: The R-squared statistic was verified as the ratio of ESS/TSS, confirming the accuracy of the model in capturing the variation in the dataset.
                      Standard Error of Regression (SER): The SER was 3.85, representing the average error or deviation between predicted and actual tip amounts. This value gives a sense of the prediction accuracy and reliability of the model.

Methodology
      Data Collection: The dataset consists of three key variables: the number of deliveries, tip amount (Y), and delivery time in minutes (X).
      Data Preprocessing: The dataset was cleaned and prepared for analysis, including checking for missing values or inconsistencies.
      Linear Regression: A linear regression model was built using delivery time (X) as the independent variable and tip amount (Y) as the dependent variable.
      Statistical Validation: The model's R-squared value was checked against the ESS/TSS ratio, and the Standard Error of Regression was calculated to assess the model's accuracy.

  Files in This Repository
      tip_data.csv: Contains the dataset used for the analysis.
      regression_analysis.py: Python script that includes the linear regression model, data processing, and statistical validation.
README.md: This documentation explaining the project’s purpose, methodology, and results.
