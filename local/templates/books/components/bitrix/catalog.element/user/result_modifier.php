<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();





if ($_REQUEST["rec"]=="Y")
{


  /*  if (empty($arResult["IN_TURN"])&&empty($arResult["IN_STOCK"])     ) // если эта книга забронирована, то
    {

        LocalRedirect($APPLICATION->GetCurPage(false));  // ошибка
        echo "1";
    } else*/ {

        // в противоположном случае
        CIBlockElement::SetPropertyValueCode($_REQUEST["CODE"], "IN_STOCK", CUser::GetId());
        CIBlockElement::SetPropertyValueCode($_REQUEST["CODE"], "DATE_OF_RECEIPT", FormatDateFromDB());
        CIBlockElement::SetPropertyValueCode($_REQUEST["CODE"], "RETURN_DATE", "");
      //  LocalRedirect($APPLICATION->GetCurPage(false));
        echo "2";
    }




}





/*
if ($_REQUEST["turn"])
{
    // запись на очередь только в том случае, если книга уже кому-то пренадлежит, но не мне
    if (empty($arResult["IN_STOCK"]) && $arResult["IN_STOCK"]!==CUser::GetId()) {
        CIBlockElement::SetPropertyValueCode($_REQUEST["CODE"], "IN_TURN", CUser::GetId());
    } else {
        LocalRedirect($APPLICATION->GetCurPage(false));
    }

}*/








$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();