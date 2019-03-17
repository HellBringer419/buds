# -*- coding: utf-8 -*-
"""
Created on Sun Mar 17 00:59:07 2019

@author: KAUSHIK OJHA
"""
# Import dependencies
import pandas as pd
import numpy as np

# Load the dataset in a dataframe object and include only four features as mentioned
df = pd.read_csv(r"C:\Users\KAUSHIK OJHA\Desktop\nebula\python\dataset.csv", delimiter=' *, *',engine='python')
include = ['E','N','T','J','T1','Class'] # Only four features
df_ = df[include]

# Logistic Regression classifier
from sklearn.tree import DecisionTreeClassifier
dependent_variable = 'Class'
x = df_.drop(['Class'],axis=1)
y = df_['Class']
lr = DecisionTreeClassifier()
lr.fit(x, y)

# Save your model
from sklearn.externals import joblib
joblib.dump(lr, 'model.pkl')
print("Model dumped!")

# Load the model that you just saved
lr = joblib.load('model.pkl')

# Saving the data columns from training
model_columns = list(x.columns)
joblib.dump(model_columns, 'model_columns.pkl')
print("Models columns dumped!")
