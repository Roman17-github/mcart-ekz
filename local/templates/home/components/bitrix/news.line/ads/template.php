<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);
?>

<div class="row mb-5">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <? if ($arItem["PROPERTY_PRIORITY_VALUE"] === null) { ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="col-md-6 col-lg-4 mb-4" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure><img alt="Image" src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" class="img-fluid"></figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded"><?= $arItem["PROPERTY_PRICE_VALUE"] ?></span>
                            <h3 class="title"><?= $arItem["NAME"] ?></h3>
                            <p class="location">
                                <?= $arItem["PROPERTY_ADDRESS_VALUE"] ?>
                            </p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    Area: <strong><?= $arItem["PROPERTY_AREA_VALUE"] ?><sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    Beds: <strong><?= $arItem["PROPERTY_BEDS_VALUE"] ?></strong>
                                </div>
                                <div class="col">
                                    Baths: <strong><?= $arItem["PROPERTY_BATHROOMS_VALUE"] ?></strong>
                                </div>
                                <div class="col">
                                    Garages: <strong><?= $arItem["PROPERTY_GARAGE_COUNT_VALUE"] ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <? } ?>
    <? endforeach; ?>


