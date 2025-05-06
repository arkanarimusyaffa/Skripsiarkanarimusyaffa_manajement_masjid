from flask import Flask, request, jsonify
from transformers import pipeline

app = Flask(__name__)
chatbot = pipeline("conversational", model="microsoft/DialoGPT-medium")

@app.route('/chat', methods=['POST'])
def chat():
    question = request.json['question']
    response = chatbot(question)
    return jsonify({'answer': response[0]['generated_responses'][0]})

if __name__ == '__main__':
    app.run(debug=True)
