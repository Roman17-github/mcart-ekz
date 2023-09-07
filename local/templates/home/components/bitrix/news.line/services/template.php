<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);
?>
<div class="row">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>" class="col-md-6 col-lg-4 mb-4">
            <a href="<?=$arItem["DETAIL_PAGE_URL"] ?>" class="service text-center border rounded"> <span class="icon flaticon-<?=$arItem['PROPERTY_ICON_VALUE']?>"></span>
                <h2 class="service-heading"><?=$arItem['NAME']?></h2>
                <p>
                    <span class="read-more">Learn More</span>
                </p>
            </a>
        </div>
    <? endforeach; ?>
</div>

