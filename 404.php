<?php get_header() ?>
<?php if (have_posts()):
    // Do we have any posts in the databse that match our query?
    // In the case of the home page, this will call for the most recent posts 
    ?>

<?php else: // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>

    <article class="post error">
        <h1 class="404">Nothing has been posted like that yet</h1>
    </article>

<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>
<?php get_footer() ?>