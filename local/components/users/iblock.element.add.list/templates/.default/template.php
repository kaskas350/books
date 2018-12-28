<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(false);

$colspan = 2;
if ($arResult["CAN_EDIT"] == "Y") $colspan++;
if ($arResult["CAN_DELETE"] == "Y") $colspan++;
?>
<?if (strlen($arResult["MESSAGE"]) > 0):?>
	<?ShowNote($arResult["MESSAGE"])?>
<?endif?>
<table class="data-table">
<?if($arResult["NO_USER"] == "N"):?>
	<thead>
		<tr>
			<td<?=$colspan > 1 ? " colspan=\"".$colspan."\"" : ""?>><?=GetMessage("IBLOCK_ADD_LIST_TITLE")?></td>
		</tr>
	</thead>
	<tbody>
	<?if (count($arResult["ELEMENTS"]) > 0):?>
		<?foreach ($arResult["ELEMENTS"] as $arElement):?>
		<tr>
			<td><!--a href="detail.php?CODE=<?=$arElement["ID"]?>"--><?=$arElement["NAME"]?><!--/a--></td>




            <?if ($arResult["CAN_EDIT"] == "Y"):?>

			<?endif?>
			<?if ($arResult["CAN_DELETE"] == "Y"):?>





			<td><?if ($arElement["CAN_DELETE"] == "Y"):?>

                    <a href="?delete=Y&amp;CODE=<?=$arElement["ID"]?>&amp;<?=bitrix_sessid_get()?>"  style="margin-left: 400px"   onClick="return confirm('<?echo CUtil::JSEscape(str_replace("#ELEMENT_NAME#", $arElement["NAME"], GetMessage("IBLOCK_ADD_LIST_DELETE_CONFIRM")))?>')">

                        <?=GetMessage("IBLOCK_ADD_LIST_DELETE")?>
                    </a>
                <div>






                </div>

                <?else:?>
                    &nbsp;
                <?endif?>
            </td>





            <?endif?>
		</tr>
		<?endforeach?>
	<?else:?>
		<tr>
			<td<?=$colspan > 1 ? " colspan=\"".$colspan."\"" : ""?>><?=GetMessage("IBLOCK_ADD_LIST_EMPTY")?></td>
		</tr>
	<?endif?>
	</tbody>
<?endif?>

</table>
<?if (strlen($arResult["NAV_STRING"]) > 0):?><?=$arResult["NAV_STRING"]?><?endif?>