<?php get_header(); ?>

<div class="page-title"><?php the_title( '<h2>', '</h2>' ); ?></div>
<div class="contact-container">
<p>Fill out the form to get in touch with us.</p>

<div class="form-container">
    <form action="submit.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="mail" class="form-label">E-mail</label>
        <input type="mail" id="mail" name="email" placeholder="e.g. janedoe@gmail.com" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" placeholder="e.g. reservation request" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="reset">Clear</button>
        <button type="submit">Send</button>
    </form>
</div>
</div>

<?php get_footer(); ?>