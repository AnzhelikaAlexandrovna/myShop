<?php
require_once(__DIR__ . '/components/path.php');
header("Content-type: text/css");
$img1 = "img/bg_img.svg";
$img2 = "img/index-background.jpg";
$img3 = "img/brands-ehm-grey.svg";
$img4 = "img/brands-cubic-grey.svg";
$img5 = "img/brands-tehnodom-grey.svg";
$img6 = "img/brands-dg-grey.svg";
$img7 = "img/brands-ehm.svg";
$img8 = "img/brands-cubic.svg";
$img9 = "img/brands-tehnodom.svg";
$img10 = "img/brands-dg.svg";
$img11 = "img/icon-twitter.svg";
$img12 = "img/icon-instagram.svg";
$img13 = "img/icon-facebook.svg";
$img14 = "img/icon-hot.svg";
?>

.banner {
    background-image: url(<?= path($img1) ?>);
}

.intro .container {
    background-image: url(<?= path($img2) ?>);
}

.brands-ehm::before {
    background-image: url(<?= path($img3) ?>);
}

.brands-cubic::before {
    background-image: url(<?= path($img4) ?>);
}

.brands-tehnodom::before {
    background-image: url(<?= path($img5) ?>);
}

.brands-dg::before {
    background-image: url(<?= path($img6) ?>);
}

.brands-ehm:hover::before {
    background-image: url(<?= path($img7) ?>);
}

.brands-cubic:hover::before {
    background-image: url(<?= path($img8) ?>);
}

.brands-tehnodom:hover::before {
    background-image: url(<?= path($img9) ?>);
}

.brands-dg:hover::before {
    background-image: url(<?= path($img10) ?>);
}

.social-link-twitter {
    background-image: url(<?= path($img11) ?>);
}

.social-link-instagram {
    background-image: url(<?= path($img12) ?>);
}

.social-link-facebook {
    background-image: url(<?= path($img13) ?>);
}

.item-hot .item-img::before {
    background-image: url(<?= path($img14) ?>);
}