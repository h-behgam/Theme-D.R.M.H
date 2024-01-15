<?php

the_post();

the_content();

if (comments_open() || get_comments_number()) {
    comments_template();
}