<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Contact Form</title>
    </head>
<body>
    <form action="./data/contact.php" method="post">
        <h1>Contact Form</h1>
        <p>This is a contact form</p>

        <label  for="name-field">Name</label>
        <input type="text" id="name-field" name="user-name" placeholder="Name" require>

        <label for="email">Email</label>
        <input type="email" id="email"name="user-email" placeholder="Email" require>

        <label for="message">Message</label>
        <textarea id="message" placeholder="Please type your meaasge"></textarea>

        <button type="submit">Submit</button>
        
    </form>
</body>
</html>