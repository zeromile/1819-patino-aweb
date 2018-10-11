<?php 

$allContent = array(
    "home"=>array(
        "title"=>"Home",
        "content"=>"This is the content content"
        ),
    "about"=>array(
        "title"=>"About",
        "content"=>"This is About content."
        ),
    "buy"=>array(
        "title"=>"Buy Now!",
        "content"=>"Buy now content"
        ),
    "contact"=>array(
        "title"=>"Contact",
        "content"=>"Contact content"
        )
    )

$myNav = array(
    array(
        "title"=>"Home",
        "page"=>"index.php"
        ),
    array(
        "title"=>"Contact",
        "page"=>"contact.php"
        ),
    array(
        "title"=>"About",
        "page"=>"about.php"
        ),
    array(
        "title"=>"Bob",
        "page"=>"bob.php"
        )
    );

$myNavCount = count($myNav);

?>