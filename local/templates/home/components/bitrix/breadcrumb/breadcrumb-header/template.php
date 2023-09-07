<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
    return "";

$strReturn = '';


$strReturn .= '<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row align-items-center justify-content-center text-center">
<div class="col-md-10">
<h1 class="mb-2">' . $APPLICATION->GetTitle(false) . '</h1>
';

$itemSize = count($arResult);

for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $arrow = ($index > 0 ? '&bullet;' : '');

    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= '
                <div id="bx_breadcrumb_' . $index . '"> <a href="' . $arResult[$index]["LINK"] . '">' . $title . '</a> 
                <meta itemprop="position" content="' . ($index + 1) . '" />
                ';
    } else {
        $strReturn .= '

				<span class="mx-2 text-white">&bullet;</span> 
				<strong class="text-white">' . $title . '</strong></div>';
    }
}

$strReturn .= '<div style="clear:both"></div></div></div></div></div>';

return $strReturn; ?>


