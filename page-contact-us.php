<?php get_header(); ?>

<div class="page-title"><?php the_title( '<h2>', '</h2>' ); ?></div>
<div class="container">
<p>Compila il modulo per metterti in contatto con noi.</p>

<form method="post" action="https://formspree.io/f/xvgoozrp">
    <div class="row form">
        <div class="col mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="Name" autocomplete="given-name" class="form-control" placeholder="Name" required>
        </div>
        <div class="col mb-3">
            <label for="mail" class="form-label">E-mail</label>
            <input type="mail" id="mail" name="Email" class="form-control" placeholder="e.g. janedoe@gmail.com" required>
        </div>
    </div>
    <div class="row form">
        <div class="col mb-3">
            <label for="subject" class="form-label">Subject:</label>
            <input type="text" id="subject" name="Subject" class="form-control" placeholder="e.g. reservation request" required>
        </div>
    </div>
    <div class="row form">
            <div class="col mb-3">
            <label for="message" class="form-label">Message:</label>
            <textarea class="form-control" id="message" name="Message" rows="4" required></textarea>
            </div>
    </div>
    <div class="row form">
        <div class="col mb-3">
            <button type="reset" class="btn btn-secondary">Clear</button>
            <button type="submit" id="submit" class="btn btn-primary">Send</button>
        </div>
    </div>
</form>

</div>

<?php get_footer(); ?>