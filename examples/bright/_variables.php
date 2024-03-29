<?php

/**
 * php{nwsl} config
 */

$primary_color = '#71014E';
$secondary_color = '#3E013D';
$text_color = '#252525';
$link_color = '#3366cc';
$body_bg = '#ebebeb'; /* should be the same color as background-body.jpg */
$topics_bg = '#ffffff';
$btn_bg = '#71014E';
$btn_color = '#ffffff';

$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http://' : 'https://';
$server_name = $protocol.''.$_SERVER['HTTP_HOST'];
$newsletter_root = $server_name.$_SERVER['REQUEST_URI'];
$newsletter_root = str_replace('index.php','',$newsletter_root);
$newsletter_root = str_replace('web.php','',$newsletter_root);
$newsletter_root = str_replace('code.php','',$newsletter_root);
$newsletter_root = rtrim($newsletter_root,"/");
$newsletter_web_view = $newsletter_root.'/web.php';

$preheader = file_get_contents('contents/preheader.txt');
$text_webview = file_get_contents('contents/text_webview.txt');


$main_styles = file_get_contents('styles.tpl');
$main_styles = str_replace('{primary_color}',$primary_color,$main_styles);
$main_styles = str_replace('{secondary_color}',$secondary_color,$main_styles);
$main_styles = str_replace('{body_bg}',$body_bg,$main_styles);
$main_styles = str_replace('{topics_bg}',$topics_bg,$main_styles);
$main_styles = str_replace('{text_color}',$text_color,$main_styles);
$main_styles = str_replace('{link_color}',$link_color,$main_styles);
$main_styles = str_replace('{btn_bg}',$btn_bg,$main_styles);
$main_title = 'Newsletter '.date("Y-m-d",time());

/* start here with the contents */

// header
$blocks[] = array(
    "template" => '_header.html',
    "image" => $newsletter_root.'/images/header.jpg',
    "image_alt" => 'This is the ALT text'
);

$blocks[] = array(
    "template" => '1_topic_txt_only.html',
    "heading" => 'A simple text block',
    "text" => 'This is the Text for the simple text block.'
);

$blocks[] = array(
    "template" => '1_topic_txt_cta.html',
    "heading" => 'A simple text block with Call to action',
    "text" => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor ...',
    "link" => 'https://example.com',
    "link_text" => 'Read more ...'
);

$blocks[] = array(
    "template" => '1_topic_2_img_cta.html',
    "heading" => 'One Topic and two Call to action',
    "text" => file_get_contents('contents/text1.txt'),
    "image_left" => $newsletter_root.'/images/example-image.jpg',
    "image_right" => $newsletter_root.'/images/example-image.jpg',
    "link_left" => 'https://example.com',
    "link_right" => 'https://example.com',
    "link_text_left" => 'Left CTA ...',
    "link_text_right" => 'Right CTA ...'
);

$blocks[] = array(
    "template" => '_tpl_divider_img.html',
    "image" => $newsletter_root.'/images/divider.jpg',
);

$blocks[] = array(
    "template" => '1_topic_img_left.html',
    "heading" => 'One image on the left',
    "image" => $newsletter_root.'/images/example-image.jpg',
    "text" => 'Template: 1_topic_img_left.html - This is the Text. No Call to action button.'
);

$blocks[] = array(
    "template" => '1_topic_img_right.html',
    "heading" => 'One image on the right',
    "image" => $newsletter_root.'/images/example-image.jpg',
    "text" => 'Template: 1_topic_img_right.html - This is the Text. No Call to action button.'
);

$blocks[] = array(
    "template" => '1_topic_img_left_cta.html',
    "heading" => 'Heading Block One',
    "image" => $newsletter_root.'/images/example-image.jpg',
    "text" => file_get_contents('contents/text1.txt'),
    "link" => 'https://example.com',
    "link_text" => 'Read more ...'
);

$blocks[] = array(
    "template" => '2_topics_img_txt_cta.html',
    "heading_left" => 'The left Headline',
    "heading_right" => 'The right Headline',
    "image_left" => $newsletter_root.'/images/example-image.jpg',
    "image_right" => $newsletter_root.'/images/example-image.jpg',
    "text_left" => file_get_contents('contents/text1.txt'),
    "text_right" => file_get_contents('contents/text1.txt'),
    "link_left" => 'https://example.com',
    "link_right" => 'https://example.com',
    "link_text_left" => 'Read more ...',
    "link_text_right" => 'Read more ...'
);

$blocks[] = array(
    "template" => '2_topics_img_cta.html',
    "heading_left" => 'The left Headline',
    "heading_right" => 'The right Headline',
    "image_left" => $newsletter_root.'/images/example-image.jpg',
    "image_right" => $newsletter_root.'/images/example-image.jpg',
    "link_left" => 'https://example.com',
    "link_right" => 'https://example.com',
    "link_text_left" => 'More Information ...',
    "link_text_right" => 'More Information ...'
);

$blocks[] = [
    "template" => '1_topic_img_right_cta.html',
    "heading" => 'Heading Block Three',
    "image" => $newsletter_root.'/images/example-image.jpg',
    "text" => file_get_contents('contents/text1.txt'),
    "link" => 'https://example.com',
    "link_text" => 'Read more'
];

$blocks[] = [
    "template" => '1_topic_img_full_cta.html',
    "heading" => 'Heading Block four',
    "image" => $newsletter_root.'/images/example-image.jpg',
    "text" => file_get_contents('contents/text1.txt'),
    "link" => 'https://example.com',
    "link_text" => 'Read more ...'
];

// footer
$blocks[] = array(
    "template" => '_footer.html',
    "text" => file_get_contents('contents/footer.txt')
);






/* css */

$css_inline_btn = '
font-size:18px;
color:'.$btn_color.';
text-decoration: none;
background-color: '.$btn_bg.';
padding-left: 20px;
padding-right:20px;
padding-top:10px;
padding-bottom:10px;
border-style: solid;
border-width: 1px;
border-color: '.$btn_color.';
border-radius: 5px;
';