import pandas as pd
import numpy as np
from flask import Flask, request, jsonify
import pickle

app = Flask(__name__)

# Function to preprocess new data
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

# Function to make predictions with optional features
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

@app.route('/predict', methods=['POST'])
def predict():
    try:
        # Load new data from request
        data = request.json

        # Convert the JSON data to a DataFrame
        new_data = pd.DataFrame([data])

        # Make predictions
        predictions = predict_with_optional_features(new_data)

        # Return the single prediction directly as {'prediction': 1}
        response = {'prediction': int(predictions[0])}

        return jsonify(response)
    except Exception as e:
        return jsonify({'error': str(e)})

if __name__ == '__main__':
    app.run(debug=True, port=5151)
