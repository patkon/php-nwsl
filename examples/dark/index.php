<?php
error_reporting(0);
include '_variables.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--[if !mso]><!-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $main_title; ?></title>

    <style type="text/css">
        <?php echo $main_styles; ?>
    </style>

    <!-- mobile style -->
    <style type="text/css">
        @media only screen and (max-width: 479px) {

            table, tr, td {
                max-width: 100%;
            }

            img {
                max-width: 100% !important;
                height: auto;
            }

            table#email-body {
                width: 100% !important;
            }

            .header-text {
                font-size: 13px !important;
            }

            .mobile-full {
                width: 100% !important;
            }
            .mobile-hide {
                display: none !important;
            }
            .mobile-only {
                display: block !important;
                width: 100% !important;
                max-height: auto !important;
                overflow: visible !important;
                mso-hide: none !important;
                height: auto !important;
                font-size: inherit;
                line-height: 1;
                margin:0 auto;
            }

            .btn-mobile, .btn-mobile:hover, .btn-mobile:visited {
                width: 80%;
                margin-left: auto;
                margin-right: auto;
                margin-top: 15px;
                margin-bottom: 25px;
                text-align: center;
                padding-left: 20px;
                padding-right: 20px;
                padding-top: 10px;
                padding-bottom: 10px;
                line-height: 1;
            }
        }
    </style>
    <!--[if mso]>
    <style type="text/css">
        .mso-table-padding {
            padding: 15px !important;
            color: <?php echo $text_color; ?>;
        }
        .mobile-only {
            mso-hide:all;
            display:none;
            width:0px;
            overflow:hidden;
        }
    </style>
    <![endif]-->

    <!--[if gte mso 9]><xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml><![endif]-->
</head>
<body style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" background: <?php echo $body_bg; ?>>

<span id="preheader" class="preheader" style="display:none!important;"><?php echo $preheader; ?></span>

<table width="100%" cellspacing="0" cellpadding="0" id="page-wrap" align="center" bgcolor="<?php echo $body_bg; ?>">
    <tbody><tr>
        <td>
            <!-- content start -->

            <?php

            $tpl_devider = file_get_contents('templates/_tpl_devider.html');
            $tpl_devider = str_replace('{body_bg}',$body_bg,$tpl_devider);

            foreach($blocks as $block) {

                $template = file_get_contents('templates/'.$block['template']);

                $template = str_replace('{nwsl_root}',$newsletter_root,$template);
                $template = str_replace('{text_webview}',$text_webview,$template);
                $template = str_replace('{href_webview}',$newsletter_web_view,$template);
                $template = str_replace('{css_inline_btn}',$css_inline_btn,$template);
                $template = str_replace('{body_bg}',$body_bg,$template);
                $template = str_replace('{topics_bg}',$topics_bg,$template);

                $template = str_replace('{headline}',$block['heading'],$template);
                $template = str_replace('{headline_left}',$block['heading_left'],$template);
                $template = str_replace('{headline_right}',$block['heading_right'],$template);

                $template = str_replace('{text}',$block['text'],$template);
                $template = str_replace('{text_left}',$block['text_left'],$template);
                $template = str_replace('{text_right}',$block['text_right'],$template);

                $template = str_replace('{image}',$block['image'],$template);
                $template = str_replace('{image_alt}',$block['image_alt'],$template);
                $template = str_replace('{image_left}',$block['image_left'],$template);
                $template = str_replace('{image_right}',$block['image_right'],$template);

                $template = str_replace('{link}',$block['link'],$template);
                $template = str_replace('{link_text}',$block['link_text'],$template);
                $template = str_replace('{link_left}',$block['link_left'],$template);
                $template = str_replace('{link_text_left}',$block['link_text_left'],$template);
                $template = str_replace('{link_right}',$block['link_right'],$template);
                $template = str_replace('{link_text_right}',$block['link_text_right'],$template);

                echo $template;
                echo $tpl_devider;

            }

            ?>

            <!-- content end -->
        </td>
    </tr>
    </tbody>
</table>
</body></html>