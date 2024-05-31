<?php
header("Content-type: text/css; charset: UTF-8");

echo '
body {
    width: 80%;
    margin: auto;
}

header,
nav,
section,
aside,
footer {
    border: 1px solid black;
    float: left;
}

header {
    width: 100%;
    text-align: center;
}

header img {
    float: left;
}

nav {
    width: 100%;
    margin: 20px auto 20px auto;
}

section {
    width: 70%;
    min-height: 320px;
    display: inline-block;
    text-align: center;
    float: right;
}

iframe {
    border: 0;
}

aside {
    width: 29.2%;
    min-height: 320px;
}

footer {
    width: 100%;
    margin: 20px auto 20px;
    text-align: center;
}
';
?>