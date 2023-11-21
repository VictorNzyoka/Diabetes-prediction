import joblib
from flask import Flask, render_template, request, jsonify
import numpy as np
from flask_cors import CORS

app = Flask(__name__)
CORS(app) 

# Load the trained RandomForestClassifier
diabetes_rf_classifier = joblib.load('diabetes_rf_classifier.joblib')

@app.route('/')
def index():
    return render_template('Mainhomepage.html')

@app.route('/predict', methods=['POST'])
def predict():
    try:
        # Retrieve the data from the request
        data = request.json

        # Extract feature values from the received data
        pregnancies = float(data.get('pregnancies', 0))
        glucose = float(data.get('glucose', 0))
        bloodPressure = float(data.get('bloodPressure', 0))
        skinThickness = float(data.get('skinThickness', 0))
        insulin = float(data.get('insulin', 0))
        bmi = float(data.get('bmi', 0))
        diabetesPedigree = float(data.get('diabetesPedigree', 0))
        age = float(data.get('age', 0))

        # Make a prediction
        input_data = [pregnancies, glucose, bloodPressure, skinThickness, insulin, bmi, diabetesPedigree, age]
        reshaping = np.asarray(input_data).reshape(1, -1)
        prediction = diabetes_rf_classifier.predict(reshaping)

        # Return the prediction result as JSON
        result = "has diabetes" if prediction[0] == 1 else "does not have diabetes"
        return jsonify({'prediction': result})

    except Exception as e:
        return jsonify({'error': str(e)})

if __name__ == '__main__':
    app.run(debug=True)

