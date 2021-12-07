

<html>
  <head>
    <style>
    h1 {
      text-align: center;
    }
    form {
      margin: 0 auto;
      width: 400px;
      padding: 1em;
      border: 1px solid #CCC;
      border-radius: 1em;
    }

    form div + div {
      margin-top: 1em;
    }

    label {
      display: inline-block;
      width: 90px;
      text-align: right;
    }

    input, textarea {
      font: 1em sans-serif;
      width: 300px;
      box-sizing: border-box;
      border: 1px solid #999;
    }

    input:focus, textarea:focus {
      border-color: #000;
    }

    textarea {
      vertical-align: top;
      height: 5em;
    }

    .button {
      margin-left: 180px;
      margin-top:10px;/* même taille que les étiquettes */
    }

    </style>
  </head>
  <body>
    <h1> Contact Form</h1>
    <form action="thanks.php" method="post">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_nom">
        </div>
        <div>
            <label for="prenom">Prenom :</label>
            <input type="text" id="name" name="user_prenom">
        </div>
        <div>
            <label for="mail">E-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="phone">Phone :</label>
            <input type="tel" id="phone" name="user_phone">
        </div>
        <div>
            <label for="subject">Subject :</label>
            <select id="subject" name="user_subject">
              <option value="Current Account">Current Account</option>
              <option value="Saving Account">Saving Account</option>
              <option value="New Debit card">New Debit card</option>
              <option value="New Credit Card">New Credit Card</option>
            </select>
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
          <button type="submit"> Submit</button>
      </div>
      </form>
    </body>
</html>
