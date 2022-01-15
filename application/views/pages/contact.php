<!-- -------------------
Name: Hope Watson
Coding 08
Purpose: Asks user for contact information using form.
------------------- -->
<div id="msg">

</div>
<div class = "form-container">
    <h1>Contact Us</h1>
    <form id="email-form" name="email-form">

        <label for="name-input">Name</label>
        <input name="name" id="name-input" type="text" maxlength="64" placeholder="Name">

        <label for="email">Email</label>
        <input name="email" id="email-input" type="text" maxlength="64" placeholder="Email">

        <label for="from">Reenter Email</label>
        <input name="from" id="reenter-email-input" type="text" maxlength="64" placeholder="Re-enter Email">

        <label for="subject">Subject</label>
        <input name="subject" id="subject-input" type="text" maxlength="64" placeholder="Subject">

        <label for="message">Message</label>
        <textarea name="message" id="message-input" maxlength="1000" placeholder="Your message here..."></textarea>

        <button id="contact-submit" type="button">Submit</button> 
        <button id="contact-clear" type="button">Clear</button>  

    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/email.js"></script>
