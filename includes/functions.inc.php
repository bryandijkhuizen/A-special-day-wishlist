<?php

function isAuthenticated()
{
    if (!isset($_SESSION['secret_key'])) { } else {
        header("Location: index.php?not-auth");
    }
}

function trim_content($content)
{
    $content =  str_replace("'", "\'", $content);
}
