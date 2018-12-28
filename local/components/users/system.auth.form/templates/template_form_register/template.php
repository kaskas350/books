
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <ul class="login__register__menu" role="tablist">
            <li role="presentation" class="login active"><a href="#login" role="tab" data-toggle="tab">Вход</a></li>

        </ul>
    </div>
</div>

                <div class="htc__login__register__wrap">



                   <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active"> <!-- заменяет формы для регистрации и авторизациии -->
                       <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

                       CJSCore::Init();
                       ?>
                       <?
                       if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
                           ShowMessage($arResult['ERROR_MESSAGE']);

                       ?>
                       <?if($arResult["FORM_TYPE"] == "login"):?>

                       <form class="login" name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">

                           <?if($arResult["BACKURL"] <> ''):?>
                               <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                           <?endif?>
                           <?foreach ($arResult["POST"] as $key => $value):?>
                               <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
                           <?endforeach?>
                           <input type="hidden" name="AUTH_FORM" value="Y" />
                           <input type="hidden" name="TYPE" value="AUTH" />

                           <table width="95%">
                               <tr>

                                   <td colspan="2">

                                       <input type="text" name="USER_LOGIN" maxlength="50" value="" size="17" placeholder="<?=GetMessage("AUTH_LOGIN")?>:" />


                                       <script>
                                           BX.ready(function() {
                                               var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
                                               if (loginCookie)
                                               {
                                                   var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
                                                   var loginInput = form.elements["USER_LOGIN"];
                                                   loginInput.value = loginCookie;
                                               }
                                           });
                                       </script>
                                   </td>
                               </tr>









                               <tr>
                                   <td colspan="2">



                                       <input type="password" name="USER_PASSWORD" maxlength="50" size="17" autocomplete="off" placeholder="<?=GetMessage("AUTH_PASSWORD")?>*" />


                                       <?if($arResult["SECURE_AUTH"]):?>
                                           <span class="bx-auth-secure" id="bx_auth_secure<?=$arResult["RND"]?>" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
                                           <noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
                                           </noscript>
                                           <script type="text/javascript">
                                               document.getElementById('bx_auth_secure<?=$arResult["RND"]?>').style.display = 'inline-block';
                                           </script>
                                       <?endif?>
                                   </td>
                               </tr>
                               <?if ($arResult["STORE_PASSWORD"] == "Y"):?>

                                   <div class="tabs__checkbox">
                                       <tr>



                                           <td valign="top"><input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" /></td>








                                           <span><td width="100%"> <label for="USER_REMEMBER_frm" title="<?=GetMessage("AUTH_REMEMBER_ME")?>"><?echo GetMessage("AUTH_REMEMBER_SHORT")?> </label></td></span>










                                       </tr>
                                       <tr>

                                           <td colspan="2"><noindex><span class="forget"><a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a></span></noindex></td>
                                       </tr>
                                   </div>

                               <?endif?>



                               <?if ($arResult["CAPTCHA_CODE"]):?>
                                   <tr>
                                       <td colspan="2">
                                           <?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
                                           <input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
                                           <img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
                                           <input type="text" name="captcha_word" maxlength="50" value="" /></td>
                                   </tr>
                               <?endif?>

                               <tr>
                                   <td colspan="2">
                                       <input type="submit" name="Login" id="sub" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" />
                                   </td>
                               </tr>






                               <?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
                               <tr>
                                   <td colspan="2"><noindex><a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a></noindex><br /></td>
                               </tr>
                   </div>
                    <?endif?>










                    <?if($arResult["AUTH_SERVICES"]):?>
                        <tr>
                            <td colspan="2">
                                <div class="bx-auth-lbl"><?=GetMessage("socserv_as_user_form")?></div>
                                <?
                                $APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "icons",
                                    array(
                                        "AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
                                        "SUFFIX"=>"form",
                                    ),
                                    $component,
                                    array("HIDE_ICONS"=>"Y")
                                );
                                ?>
                            </td>
                        </tr>
                    <?endif?>

                    </table>
                    </form>

                    <?if($arResult["AUTH_SERVICES"]):?>
                        <?
                        $APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "",
                            array(
                                "AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
                                "AUTH_URL"=>$arResult["AUTH_URL"],
                                "POST"=>$arResult["POST"],
                                "POPUP"=>"Y",
                                "SUFFIX"=>"form",
                            ),
                            $component,
                            array("HIDE_ICONS"=>"Y")
                        );
                        ?>
                    <?endif?>

                    <?
                    elseif($arResult["FORM_TYPE"] == "otp"):
                        ?>

                        <form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
                            <?if($arResult["BACKURL"] <> ''):?>
                                <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                            <?endif?>
                            <input type="hidden" name="AUTH_FORM" value="Y" />
                            <input type="hidden" name="TYPE" value="OTP" />
                            <table width="95%">
                                <tr>
                                    <td colspan="2">
                                        <?echo GetMessage("auth_form_comp_otp")?><br />
                                        <input type="text" name="USER_OTP" maxlength="50" value="" size="17" autocomplete="off" /></td>
                                </tr>
                                <?if ($arResult["CAPTCHA_CODE"]):?>
                                    <tr>
                                        <td colspan="2">
                                            <?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
                                            <input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
                                            <img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
                                            <input type="text" name="captcha_word" maxlength="50" value="" /></td>
                                    </tr>
                                <?endif?>
                                <?if ($arResult["REMEMBER_OTP"] == "Y"):?>
                                    <tr>
                                        <td valign="top"><input type="checkbox" id="OTP_REMEMBER_frm" name="OTP_REMEMBER" value="Y" /></td>
                                        <td width="100%"><label for="OTP_REMEMBER_frm" title="<?echo GetMessage("auth_form_comp_otp_remember_title")?>"><?echo GetMessage("auth_form_comp_otp_remember")?></label></td>
                                    </tr>
                                <?endif?>
                                <tr>
                                    <td colspan="2"><input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><noindex><a href="<?=$arResult["AUTH_LOGIN_URL"]?>" rel="nofollow"><?echo GetMessage("auth_form_comp_auth")?></a></noindex><br /></td>
                                </tr>
                            </table>
                        </form>

                    <?
                    else:
                        ?>

                        <form action="<?=$arResult["AUTH_URL"]?>">
                            <table width="95%">
                                <tr>
                                    <td align="center">
                                        <?=$arResult["USER_NAME"]?><br />
                                        [<?=$arResult["USER_LOGIN"]?>]<br />
                                        <a href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=GetMessage("AUTH_PROFILE")?></a><br />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <?foreach ($arResult["GET"] as $key => $value):?>
                                            <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
                                        <?endforeach?>
                                        <input type="hidden" name="logout" value="yes" />
                                        <input type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    <?endif?>

                </div>


<script src="/local/templates/books/js/vendor/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap framework js -->
        <script src="/local/templates/books/js/bootstrap.min.js"></script>
        <!-- All js plugins included in this file. -->
        <script src="/local/templates/books/js/plugins.js"></script>
        <script src="/local/templates/books/js/slick.min.js"></script>
        <script src="/local/templates/books/js/owl.carousel.min.js"></script>
        <!-- Waypoints.min.js. -->
        <script src="/local/templates/books/js/waypoints.min.js"></script>
        <!-- Main js file that contents all jQuery plugins activation. -->
        <script src="/local/templates/books/js/main.js"></script>























