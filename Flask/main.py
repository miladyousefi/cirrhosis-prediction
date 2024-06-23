import numpy as np
import pandas as pd
from flask import Flask, request, jsonify
from sklearn.ensemble import AdaBoostClassifier, RandomForestClassifier
from sklearn.feature_selection import SelectFromModel
from sklearn.model_selection import train_test_split

# Initialize the Flask application
app = Flask(__name__)

# Load the dataset
dataset = pd.read_csv("48.csv")

# Split dataset into features and target variable
x = dataset.iloc[:, 1:43]
y = dataset['Class']

# Split data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(x, y, train_size=0.8, shuffle=True, random_state=0)

# Train the RandomForestClassifier for feature selection
clf = RandomForestClassifier(n_estimators=100, max_depth=12, random_state=0)
clf.fit(x, y)

# Select important features
model = SelectFromModel(clf, prefit=True)
x_selected = model.transform(x)
print(x_selected.shape)

# Train the AdaBoostClassifier
clf_ada = AdaBoostClassifier(n_estimators=410, algorithm="SAMME", random_state=0)
clf_ada.fit(X_train, y_train)

@app.route('/predict', methods=['POST'])
def predict():
    try:
        # Get data from POST request
        data = request.json

        # Extract features from the received JSON data
        feature_list = [
            'Age', 'Sex', 'BMI', 'Grade 1 fatty', 'Grade 2 fatty', 'Grade 3 fatty', 'Uniforms',
            'non-uniform', 'RUQ pain', 'Vague discomfort RUQ', 'Hepatomegaly', 'Splenomegaly',
            'Cirrhosis peripheral symptoms', 'IMT – R', 'IMT – L', 'AST', 'ALT', 'ALP', 'CHOLESTROL',
            'TG', 'FBS', 'Hb', 'Hct', 'plt', 'HDL', 'Urea', 'Cr', 'URIC_ACID', 'Diabetes',
            'Hyperlipidemia', 'Hypertension', 'Smoker', 'Alcoholic', 'Methotrexate', 'Aspirin',
            'Glucocorticoids', 'Calcium channel blockers', 'Estrogen', 'Tetracycline',
            'Nucleolysis analogs', 'Chemotherapy drugs', 'Tamoxifen'
        ]

        new_data = [data.get(feature) for feature in feature_list]

        # Convert the new data to numpy array and reshape for prediction
        new_data = np.array(new_data, dtype=float).reshape(1, -1)

        # Make prediction using the trained AdaBoost model
        prediction = clf_ada.predict(new_data)

        # Return the prediction result as JSON
        return jsonify({'prediction': int(prediction[0])})

    except Exception as e:
        return jsonify({'error': str(e)})

# Run the Flask app
if __name__ == '__main__':
    app.run(debug=True)
