import pandas as pd
import numpy as np
from sklearn.ensemble import AdaBoostClassifier, RandomForestClassifier
from sklearn.model_selection import train_test_split
from sklearn.feature_selection import SelectFromModel
import pickle

# Load dataset
dataset = pd.read_csv("48.csv")

# Define your features and target
features = [
    'Grade 1 fatty', 'Grade 2 fatty', 'Grade 3 fatty', 'Hepatomegaly', 'Splenomegaly',
    'Cirrhosis peripheral symptoms', 'IMT - R', 'IMT - L', 'AST', 'ALT', 'ALP', 'CHOLESTROL',
    'TG', 'FBS', 'Hb', 'Hct', 'Plt', 'HDL', 'Urea', 'Cr', 'URIC_ACID', 'Diabetes',
    'Hyperlipidemia', 'Hypertension', 'Alcoholic', 'sex', 'age', 'BMI','Uniforms','non-uniform','RUQ pain','Vague discomfort RUQ','Smoker','Methotrexate','Aspirin','Glucocorticoids','Calcium channel blockers','Estrogen','Tetracycline','Nucleolysis analogs','Chemotherapy drugs','Tamoxifen'
]

X = dataset[features]
y = dataset['Class']

# Ensure X and y have the same number of samples
assert len(X) == len(y), "Number of samples in X and y must be equal"

# Split data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, train_size=0.8, shuffle=True, random_state=0)

# Remove feature names from X_train and X_test
X_train = X_train.values
X_test = X_test.values

# Feature selection strategy
clf = RandomForestClassifier(n_estimators=100, max_depth=12, random_state=0)
clf.fit(X_train, y_train)

# Select features based on importance
selector = SelectFromModel(clf, prefit=True)

# Transform data
X_train_transformed = selector.transform(X_train)
X_test_transformed = selector.transform(X_test)

# Train AdaBoost classifier
clf_ada = AdaBoostClassifier(n_estimators=410, algorithm="SAMME", random_state=0)
clf_ada.fit(X_train_transformed, y_train)

# Save the trained model and the selector
with open('adaboost_model.pkl', 'wb') as model_file:
    pickle.dump((clf_ada, selector, features), model_file)

print("Model and selector trained and saved as adaboost_model.pkl")
def preprocess_new_data(new_data, training_features, dataset):
    for feature in training_features:
        if feature not in new_data.columns:
            new_data[feature] = np.nan

    # Fill missing values with the mean of the training data
    means = dataset[training_features].mean()
    new_data.fillna(means, inplace=True)

    # Ensure the order of features matches the training data
    new_data = new_data[training_features]
    return new_data

def predict_with_optional_features(new_data, model_path='adaboost_model.pkl'):
    # Load the model and selector
    with open(model_path, 'rb') as model_file:
        clf_ada, selector, training_features = pickle.load(model_file)

    # Load the dataset for imputation
    dataset = pd.read_csv("48.csv")

    # Preprocess new data to handle missing features
    new_data_preprocessed = preprocess_new_data(new_data, training_features, dataset)

    # Transform input data
    new_data_values = new_data_preprocessed.values
    new_data_transformed = selector.transform(new_data_values)

    # Make predictions
    predictions = clf_ada.predict(new_data_transformed)
    return predictions
# Example usage:
try:
    # Load new data
    new_data = pd.read_csv("new_data.csv")
    # Make predictions
    predictions = predict_with_optional_features(new_data)
    print(predictions)
except pd.errors.EmptyDataError:
    print("Error: The new_data.csv file is empty or not formatted correctly.")
except Exception as e:
    print(f"An error occurred: {e}")
