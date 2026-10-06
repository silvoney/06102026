from flask import Flask, render_template

app = Flask(__name__)


@app.route("/")
def agenda():

    return render_template("agenda.html")


if __name__ == "__main__":

    app.run(
        host="127.0.0.1",
        port=5000,
        debug=True
    )