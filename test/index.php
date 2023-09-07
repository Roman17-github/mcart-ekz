<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("test");
Bitrix\Main\Loader::includeModule('iblock');

use \Bitrix\Iblock\ElementTable;

$res = $res = CIBlockElement::GetList(
    [],
    ['IBLOCK_CODE' => 'ads', 'PROPERTY_GARAGE' => 7],
    false,
    false,
    ['ID', 'IBLOCK_ID', 'NAME', 'PROPERTY_PRICE', 'PROPERTY_PRIORITY']
);
while ($a = $res->fetch()) {
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}

?><br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>