<?php

/* -----------------------
--  ADAPTING THIS FILE  --
--------------------------
If you want to adapt this language file, use cust_lang.php instead.
Further information is available in the manual at
http://www.oxid-esales.com/en/resources/help-faq/eshop-manual/editing-language-files
*/

$sLangName  = "Deutsch";

// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
'charset' => 'UTF-8',
'HEADER_BACK'                                                 => "zurück",
'ACCOUNT_PASSWORD_CONFIRMPASSWORD'                            => "Passwort wiederholen:",
'ACCOUNT_PASSWORD_ERRINCORRECTCURRENTPASSW'                   => "Fehler: Ihr aktuelles Passwort ist falsch.",
'ACCOUNT_PASSWORD_PASSWORDMINLENGTH'                          => "Die Mindestlänge des Passwortes beträgt 6 Zeichen.",
'ACCOUNT_RECOMM_LISTTITLE'                                    => "Überschrift",
'ACCOUNT_USER_BILLINGADDRESS'                                 => "Rechnungsadresse",
'ACCOUNT_USER_COMPLETEMARKEDFIELDS'                           => '(Felder mit einem <span class="fontred">*</span>müssen ausgefüllt werden)',
'ACCOUNT_USER_ERRCOMLETEBILLINGADDRESS'                       => "Fehler: Bitte füllen Sie auch Ihre Rechnungsadresse aus!",
'ACCOUNT_USER_ERRCOMPLETEMARKEDFIELDS'                        => "0",
'ACCOUNT_USER_ERREMAILALREADYTAKEN'                           => "Fehler: Diese E-Mail-Adresse ist bereits vergeben!",
'ACCOUNT_USER_ERRINVALIDEMAIL'                                => "Fehler: Keine gültige E-Mail-Adresse!",
'ACCOUNT_USER_ERRPASSWORDSDONTMATCH'                          => "Fehler: Passwörter stimmen nicht überein!",
'ACCOUNT_USER_ERRWRONGUSERNAMEPASSW'                          => "Fehler: Falscher Benutzer/Passwort!",
'ACCOUNT_WISHLIST_BUYFORME1'                                  => "Hallo, ich habe mir hier bei",
'ACCOUNT_WISHLIST_BUYFORME2'                                  => "einen Wunschzettel angelegt. Es wäre toll, wenn du mir davon etwas kaufen könntest.",
'ACCOUNT_WISHLIST_CLICKHERETOSENDWISHLIST'                    => "Klicken Sie hier, um Ihren Wunschzettel an Ihre Freunde zu versenden:",
'ACCOUNT_WISHLIST_ERRWRONGEMAIL'                              => "Fehler beim Versenden - bitte E-Mail-Adresse überprüfen.",
'ACCOUNT_WISHLIST_SEARCH'                                     => "Jetzt suchen",
'ACCOUNT_WISHLIST_SEND'                                       => "Versenden",
'ACCOUNT_WISHLIST_SENDSUCCESSFULLY1'                          => "Ihr Wunschzettel wurde erfolgreich an",
'ACCOUNT_WISHLIST_SENDSUCCESSFULLY2'                          => "verschickt!",
'ADD_RECOMM_ADDRECOMMLINK1'                                   => "Es liegen zur Zeit keine Lieblingslisten vor. Um eine neue Lieblingsliste anzulegen, klicken Sie",
'ADD_RECOMM_ADDRECOMMLINK2'                                   => "hier",
'BASKET_ARTNOMBER'                                            => "ArtNr.:",
'BASKET_COUPONNOTACCEPTED1'                                   => "Ihr Gutschein",
'BASKET_COUPONNOTACCEPTED2'                                   => "wurde abgewiesen.",
'BASKET_PAYMENTTAX1'                                          => "Aufsch. Zahl. MwSt.",
'BASKET_PLUSTAX1'                                             => "zzgl. MwSt.",
'BASKET_POPUP_ADDEDARTICLETOBASKET'                           => "Sie haben soeben einen Artikel in den Warenkorb gelegt.",
'BASKET_POPUP_FULL_ADDEDARTICLETOBASKET'                      => "Sie haben soeben einen Artikel in den Warenkorb gelegt.",
'BASKET_SHIPPINGNET'                                          => "Versandkosten (netto):",
'BASKET_TAX1'                                                 => "zzgl. MwSt.",
'BASKET_TSPROTECTIONCHARGETAX1'                               => "zzgl. Mwst..",
'BASKET_WRONGAMOUNT1'                                         => "Tragen Sie eine gültige Menge für Artikel ",
'BASKET_WRONGAMOUNT2'                                         => " ein.",
'CONTACT_COMPLETEMARKEDFIELDS'                                => "Bitte alle Felder mit * ausfüllen !",
'CONTACT_SEND'                                                => "Nachricht abschicken",
'CONTACT_THANKYOU1'                                           => "Vielen Dank für Ihre Nachricht an",
'CONTACT_THANKYOU2'                                           => ".",
'DETAILS_ARTNOMBER'                                           => "ArtNr.:",
'DETAILS_LABEL'                                               => "Beschriftung:",
'DETAILS_PLUSSHIPPING2'                                       => "Versandkosten.",
'DETAILS_PLUSSHIPPING_PLUS'                                   => "zzgl. ",
'DETAILS_PRICEALARM'                                          => "<b>[!]</b> Preisalarm!",
'DETAILS_PRICEALARM2'                                         => "<b>[!]</b> Preisalarm!",
'DETAILS_SEND'                                                => "abschicken",
'DETAILS_VPE_MESSAGE_1'                                       => "Dieser Artikel kann nur in Verpackungseinheiten zu je ",
'DETAILS_VPE_MESSAGE_2'                                       => " erworben werden.",
'DETAILS_ZOOM'                                                => "[+] zoom",
'EMAIL_INVITE_HTML_INVITETOSHOP'                              => "Eine Einladung von",
'EMAIL_INVITE_HTML_INVITETOSHOP2'                             => "",
'EMAIL_INVITE_HTML_INVITETOSHOP3'                             => "zu besuchen.",
'EMAIL_ORDER_CUST_HTML_ARTNOMBER'                             => "Artnr.:",
'EMAIL_ORDER_CUST_HTML_NONE'                                  => "KEINE",
'EMAIL_ORDER_CUST_HTML_PAYMENTCHARGEVAT1'                     => "Aufsch. Zahl. MwSt.",
'EMAIL_ORDER_CUST_HTML_PAYMENTMETHOD'                         => "Die Bezahlung erfolgt mit:",
'EMAIL_ORDER_CUST_HTML_PLUSTAX1'                              => "zzgl. MwSt.",
'EMAIL_ORDER_CUST_HTML_PLUSTAX21'                             => "zzgl. Mwst.",
'EMAIL_ORDER_CUST_HTML_SHIPPINGCARRIER'                       => "Der Versand erfolgt mit",
'EMAIL_ORDER_CUST_HTML_SHIPPINGNET'                           => "Versandkosten (netto):",
'EMAIL_ORDER_CUST_HTML_TAX1'                                  => "zzgl. MwSt.",
'EMAIL_ORDER_CUST_HTML_TSPROTECTIONCHARGETAX1'                => "zzgl. Mwst.",
'EMAIL_ORDER_OWNER_HTML_MESSAGE'                              => "Mitteilung:",
'EMAIL_ORDER_OWNER_HTML_PAYMENTINFOOFF'                       => "<b>BEZAHLINFORMATIONEN AUSGESCHALTET</b> - um diese einzuschalten bitte email_order_owner_html.tpl aendern.",
'EMAIL_SUGGEST_HTML_MENYGREETINGS'                            => "Viele Grüsse,",
'EXCEPTION_INPUT_NOTALLFIELDS'                                => "(Felder mit einem <span class='fontred'>*</span>müssen ausgefüllt werden)",
'FACEBOOK_COMMENTS'                                           => "Facebook comments",
'FACEBOOK_POPUP_CANCELBTN'                                    => "Abbrechen",
'FACEBOOK_POPUP_HEADER'                                       => "Kundenkonto aktualisieren",
'FACEBOOK_POPUP_UPDATEBTN'                                    => "Kundenkonto verknüpfen",
'FACEBOOK_POPUP_UPDATEDONETEXT'                               => "Ihr Kundenkonto wurde erfolgreich aktualisiert. Zukünftig können Sie sich ganz einfach per Facebook Connect einloggen.",
'FACEBOOK_POPUP_UPDATETEXT'                                   => "Sie haben sich im Shop über Facebook Connect angemeldet. Falls Sie früher bereits ein Kundenkonto bei uns im Shop eröffnet hatten, melden Sie sich bitte nochmals mit Ihren Logindaten an und verknüpfen dadurch Ihr Facebook Profil mit Ihrem Kundenkonto. So wird die Anmeldung hier im Shop zukünftig noch einfacher.",
'FORGOTPWD_UPDATEPASSWORD'                                    => "Neues Passwort speichern",
'FORM_WISHLIST_SUGGEST_ERRWRONGEMAIL'                         => "Fehler beim Versenden - bitte E-Mail-Adresse überprüfen.",
'GUESTBOOKENTRY_TITLE'                                        => "Gästebuch",
'GUESTBOOK_TITLE'                                             => "Gästebuch",
'INC_ACCOUNT_HEADER_ADDRESS'                                  => "Meine Adressen",
'INC_ACCOUNT_HEADER_LOGOUT'                                   => "LOGOUT",
'INC_ACCOUNT_HEADER_LOGOUTFROMSHOP'                           => "Vom Shop abmelden",
'INC_ACCOUNT_HEADER_PASSWORD'                                 => "Mein Passwort",
'INC_ACCOUNT_HEADER_TOBASKET'                                 => "Zum Warenkorb",
'INC_CMP_BASKET_QTY'                                          => "Stk",
'INC_CMP_BASKET_QUANTITY'                                     => "Anzahl:",
'INC_CMP_FBCONNECT_LOGINBTNTEXT'                              => "Login",
'INC_CMP_FBCONNECT_YOUARELOGGEDINAS'                          => "Sie sind eingeloggt als",
'INC_CMP_LOGIN_ERRINVALIDEMAILORPWD'                          => "<b>Fehler:</b> <br>Falsche E-Mail oder Passwort!",
'INC_CMP_LOGIN_FORGOTPWD'                                     => "Passwort vergessen",
'INC_CMP_LOGIN_KEEPLOGGEDIN'                                  => "Eingeloggt bleiben",
'INC_CMP_LOGIN_RIGHT_DETAILS'                                 => "Details",
'INC_CMP_LOGIN_RIGHT_DETAILS2'                                => "Details",
'INC_CMP_LOGIN_RIGHT_DETAILS3'                                => "Details",
'INC_CMP_LOGIN_RIGHT_ERRINVALIDEMAILORPWD'                    => "<b>Fehler:</b> <br>Falsche E-Mail oder Passwort!",
'INC_CMP_LOGIN_RIGHT_FORGOTPWD'                               => "Passwort vergessen",
'INC_CMP_LOGIN_RIGHT_KEEPLOGGEDIN'                            => "Eingeloggt bleiben",
'INC_CMP_LOGIN_RIGHT_LOGGEDINAS'                              => "Sie sind angemeldet als:",
'INC_CMP_LOGIN_RIGHT_LOGOUT'                                  => "Abmelden",
'INC_CMP_MINI_BASKET_QUANTITY'                                => "Anzahl:",
'INC_COMPARE_LOCATOR_DISPLAYPOPUP'                            => "Druckansicht öffnen",
'INC_FOOTER_GUESTBOOK'                                        => "Gästebuch",
'INC_FOOTER_HOME'                                             => "Home",
'INC_FOOTER_PUBLICWISHLIST'                                   => "Öffentliche Wunschzettel",
'INC_FOOTER_SOFTWAREANDSYSTEMBYOXID'                          => "Shopsoftware und Shopsysteme von OXID eSales",
'INC_FOOTER_SOFTWAREFROMOXIDESALES'                           => "Shop Software der OXID eSales AG",
'INC_GUESTBOOK_LOCATOR_ENTRIESPERPAGE'                        => "Einträge pro Seite:",
'INC_GUESTBOOK_LOCATOR_PAGE'                                  => "Page",
'INC_HEADER_GUESTBOOK'                                        => "Gästebuch",
'INC_HEADER_HOME'                                             => "Home",
'INC_HEADER_INCLTAXPLUSSHIPPING'                              => "Alle Preise inkl. MwSt., zzgl. Versandkosten.",
'INC_HEADER_PRIVATWISHLIST'                                   => "'s Wunschzettel",
'INC_HEADER_SERVICE'                                          => "Service",
'INC_LEFTITEM_CURRENCY'                                       => "Währung",
'INC_LEFTITEM_DISPLAYBASKET'                                  => "Warenkorb anzeigen",
'INC_LEFTITEM_PARTNERANDSEAL'                                 => "Partner und Siegel",
'INC_LEFTITEM_PRODUCTSEARCH'                                  => "Artikelsuche",
'INC_LIST_LOCATOR_ORDERSPERPAGE'                              => "Bestellungen pro Seite:",
'INC_LIST_LOCATOR_RECOMLISTSPERPAGE'                          => "Listen pro Seite:",
'INC_NEWBASKETITEM_ADDEDTOBASKET2'                            => "wurde in den",
'INC_NEWBASKETITEM_ADDEDTOBASKET4'                            => " gelegt.",
'INC_PRODUCT_VARIANTS_BACKTOMAINPRODUCT'                      => "zurück zur Hauptansicht von",
'INC_PRODUCT_VARIANTS_OTHERVARIANTSOF'                        => "Weitere Varianten Von:",
'INC_PRODUCT_VARIANTS_VARIANTSELECTIONOF'                     => "Variantenauswahl zu",
'INC_RECOMM_LISTS_MORE'                                       => "Mehr...",
'INC_RIGHTITEM_CURRENCY'                                      => "Währung",
'INC_RIGHTITEM_DISPLAYBASKET'                                 => "Warenkorb anzeigen",
'INC_RIGHTITEM_FBCONNECT'                                     => "Facebook Connect",
'INC_RIGHTITEM_HAVEPOUSEEN'                                   => "Kennen Sie schon... ?",
'INC_RIGHTITEM_SIMILARPRODUCTS'                               => "Ähnliche Artikel",
'INC_RIGHTITEM_TOPOFTHESHOP'                                  => "TOP of the Shop",
'INC_RIGHTITEM_TS_RATINGS_BOX'                                => "Kundenbewertungen",
'INC_RIGHTLIST_ORDERNOW'                                      => "Jetzt bestellen!",
'INC_SEARCHLEFTITEM_ALLCATEGORIES'                            => "- alle Kategorien -",
'INC_SEARCHLEFTITEM_ALLDISTRIBUTORS'                          => "- alle Lieferanten -",
'INC_SEARCHLEFTITEM_ALLMANUFACTURERS'                         => "- alle Hersteller -",
'INC_SORT_GUESTBOOK_SORTBY'                                   => "Sortieren nach:",
'INC_SORT_SORTBY'                                             => "Sortieren nach:",
'INC_SORT_TITLE'                                              => "Titel",
'INC_STEPS_ITEM_CHANGEITEMS'                                  => "Bestellmenge<br>ändern, ausgewählte<br>Artikel entfernen",
'INC_STEPS_ITEM_LASTSTEP1'                                    => "Fertig",
'INC_STEPS_ITEM_LASTSTEP2'                                    => "Bestellung ausgeführt",
'INC_STEPS_ITEM_LOGINSELECTBILLINGINFO'                       => "Login, Rechnungs-<br>und Lieferadresse<br>wählen",
'INC_STEPS_ITEM_ORDER'                                        => "Bestellen",
'INC_STEPS_ITEM_SELECTSHIPPINGANDPAYMENT'                     => "Versandart und<br>Zahlungsart aus-<br>wählen",
'INC_STEPS_ITEM_SEND'                                         => "Versenden",
'INC_STEPS_ITEM_SUBMITORDER'                                  => "Bestellung ausführen",
'INC_TRUSTEDSHOPS_ITEM_ALTTEXT'                               => "Mehr Informationen",
'INC_VENDORLEFTITEM_BYMARK'                                   => "Nach Marke/Hersteller",
'INVITE_FROM'                                                 => "From:",
'INVITE_MESSAGE1'                                             => "Hallo! Heute habe ich den interessanten Shop",
'INVITE_MESSAGE2'                                             => "für dich gefunden. Einfach auf den Link unten klicken, und du gelangst direkt zum Shop.",
'INVITE_SEND'                                                 => "Einladung abschicken",
'INVITE_SENDEREMAIL'                                          => "E_Mail des Absenders:",
'LIST_APPLYFILTER'                                            => "Filter anwenden",
'LIST_SELECTOTHERCATS1'                                       => "Weitere Kategorien auswählen - ",
'LIST_SELECTOTHERCATS2'                                       => "und:",
'MALLSTART_LOCATION'                                          => "Sie sind hier: / Shopauswahl",
'MALLSTART_TITLE'                                             => "Shopauswahl",
'MEDIA'                                                       => "Zusatzinformationen",
'MOREDETAILS_POPUP_TITLE'                                     => "Zoombilder",
'NEWSLETTER_COMPLETEALLFIELEDS'                               => "Bitte alle Felder mit * ausfüllen!",
'NEWSLETTER_EMAIL_NOT_EXIST'                                  => "Die eingegebene E-Mail-Adresse ist kein Abonnent des Newsletters.",
'NEWSLETTER_FIRSTNAME'                                        => "Vorname",
'NEWS_LATESTNEWSBY'                                           => "Neuigkeiten bei",
'ORDER_BILLINGADDRESS'                                        => "Rechnungsadresse",
'ORDER_COUPONNOTACCEPTED1'                                    => "Ihr Gutschein",
'ORDER_COUPONNOTACCEPTED2'                                    => "wurde abgewiesen.",
'ORDER_IAGREETORIGHTOFWITHDRAWAL1'                            => "Ich wurde über mein",
'ORDER_IAGREETORIGHTOFWITHDRAWAL3'                            => "informiert.",
'ORDER_IAGREETOTERMS1'                                        => "Ich habe die",
'ORDER_IAGREETOTERMS3'                                        => "gelesen und erkläre mich mit ihnen einverstanden.",
'ORDER_INFO_TITLE'                                            => "Wie Bestellen?",
'ORDER_MODIFYADDRESS'                                         => "Diese Adresse ändern",
'ORDER_MODIFYADDRESS2'                                        => "Diese Adresse ändern",
'ORDER_MODIFYQUANTITY1'                                       => "Leider ist soeben einer der von Ihnen gewünschten Artikel ",
'ORDER_MODIFYQUANTITY2'                                       => " verkauft worden. Bitte ändern Sie die Menge im",
'ORDER_NOMBER'                                                => "(Nr.",
'ORDER_NONE'                                                  => "KEINE",
'ORDER_NOTE'                                                  => "Abschließende Informationen",
'ORDER_OTHERINTRESTINGARTICLES'                               => "Weitere interessante Artikel für Sie:",
'ORDER_PAYMENTCHARGETAX1'                                     => "Aufsch. Zahl. MwSt.",
'ORDER_PLUSSHIPPINGTAX1'                                      => "zzgl. MwSt.",
'ORDER_PLUSTAX1'                                              => "zzgl. MwSt.",
'ORDER_RIGHTOFWITHDRAWAL'                                     => "Widerrufsrecht",
'ORDER_RIGHTOFWITHDRAWAL_MOREINFO1'                           => "Hier finden Sie die Einzelheiten zu Ihrem ",
'ORDER_RIGHTOFWITHDRAWAL_TEXT'                                => "Verbraucher können ihre Vertragserklärung innerhalb von zwei Wochen ohne Angabe von Gründen in Textform (z. B. Brief, Fax, E-Mail) oder durch Rücksendung der Sache widerrufen. Die Frist beginnt frühestens mit Erhalt der Ware und einer ausführlichen Belehrung in Textform. Zur Wahrung der Widerrufsfrist genügt die rechtzeitige Absendung des Widerrufs oder der Sache. Der Widerruf ist zu richten an: ",
'ORDER_SEND'                                                  => "Versenden",
'ORDER_SHIPPINGADDRESS'                                       => "Lieferadresse",
'ORDER_SHIPPINGANDPAYMENT'                                    => "Versandart und Zahlungsart",
'ORDER_SHIPPINGNET'                                           => "Versandkosten (netto):",
'ORDER_TAX'                                                   => "MwSt.",
'ORDER_TSPROTECTIONCHARGETAX1'                                => "zzgl. Mwst..",
'ORDER_UNITPRICE'                                             => "Einz.Preis",
'ORDER_VERIFYYOURINPUT'                                       => "Bitte überprüfen Sie Ihre Eingaben!",
'ORDER_WRAPPINGTAX1'                                          => "zzgl. Mwst.",
'ORDER_YOURMESSAGE'                                           => "Ihr Text:",
'PAYMENT_ACCOUNTNUMBER'                                       => "Kontonummer:",
'PAYMENT_COMLETEALLFIELDS'                                    => "Bitte alle Felder richtig ausfüllen!",
'PAYMENT_EMPTY_TEXT'                                          => '<p>Derzeit ist keine Versandart für dieses Land definiert.</p> <p>Wir werden versuchen, Liefermöglichkeiten zu finden und Sie über die Versandkosten informieren.</p> <p>Falls Sie hiermit einverstanden sind, wählen Sie "Weiter zum nächsten Schritt".</p>',
'PAYMENT_INCLUDEVAT'                                          => "inkl. MwSt.",
'PAYMENT_PLUSCODCHARGE1'                                      => "zuzüglich",
'PAYMENT_PLUSCODCHARGE2'                                      => "Nachnahmegebühr",
'PAYMENT_TSPROTECTIONTEXT'                                    => "Der Trusted Shops Käuferschutz sichert Ihren Online-Kauf ab. Mit der Übermittlung und",
'PAYMENT_TSPROTECTIONTEXT2'                                   => "Speicherung",
'PAYMENT_TSPROTECTIONTEXT3'                                   => "meiner E-Mail-Adresse zur Abwicklung des Käuferschutzes durch Trusted Shops bin ich einverstanden.",
'PAYMENT_TSPROTECTIONTEXT4'                                   => "Bedingungen",
'PAYMENT_TSPROTECTIONTEXT5'                                   => "für den Käuferschutz.",
'PRICEALARM_BACKTOPRODUCT'                                    => "Hier gehts zurück zum Artikel.",
'PRICEALARM_THANKYOUMESSAGE1'                                 => "Vielen Dank für Ihre Nachricht an",
'PRICEALARM_THANKYOUMESSAGE2'                                 => ".",
'PRICEALARM_THANKYOUMESSAGE3'                                 => "Sie bekommen eine Nachricht von uns sobald der Preis vom Artikel",
'PRICEALARM_THANKYOUMESSAGE4'                                 => "unter",
'PRICEALARM_THANKYOUMESSAGE5'                                 => "fällt.",
'PROMO_DAYS'                                                  => "Tagen",
'PROMO_ONEDAY'                                                => "einem Tag",
'PROMO_SOLDOUT'                                               => "ausverkauft",
'PROMO_UPCOMING'                                              => "demnächst",
'PROMO_WILLENDIN_PREFIX'                                      => "Endet in ",
'PROMO_WILLENDIN_SUFFIX'                                      => "!",
'PROMO_WILLSTARTIN_PREFIX'                                    => "Startet in ",
'PROMO_WILLSTARTIN_SUFFIX'                                    => "",
'RECOMMLIST_LISTREVIEW'                                       => "Kommentare",
'RECOMMLIST_LOGGINTOWRITEREVIEW'                              => "Melden Sie sich hier an, um einen Kommentar zu schreiben.",
'RECOMMLIST_RATETHISLIST'                                     => "Bewerten Sie diese Lieblingsliste!",
'RECOMMLIST_REVIEWNOTAVAILABLE'                               => "Bis jetzt noch keine Kommentare",
'RECOMMLIST_SEARCH'                                           => "Suche nach",
'RECOMMLIST_SELECTLIST'                                       => "Bitte wählen Sie die Lieblingsliste!",
'RECOMMLIST_WRITEREVIEW'                                      => "Kommentar schreiben",
'REGISTER_BILLINGADDRESS'                                     => "Rechnungsadresse",
'REGISTER_CLICKHERE'                                          => "KLICKEN SIE HIER!",
'REGISTER_COMPLETEMARKEDFIELDS'                               => '(Felder mit einem <span class="req">*</span> müssen ausgefüllt werden)',
'REGISTER_COMPLETEMARKEDFIELDS2'                              => '(Felder mit einem <span class="req">*</span> müssen ausgefüllt werden)',
'REGISTER_CONFIRMPWD'                                         => "Passwort wiederholen:",
'REGISTER_DIFFERENTDELIVERYADDRESS'                           => "Folgende Felder bitte nur ausfüllen, falls die gewünschte Lieferadresse von der Rechnungsadresse abweicht.",
'REGISTER_DIFFERENTSHIPPINGADDRESS'                           => "Hier klicken, um an eine andere Adresse zu liefern",
'REGISTER_ERRADDRESSUNKNOWN'                                  => "Fehler: Adresse unbekannt!",
'REGISTER_ERRALREADYREGISTERED'                               => "Fehler: Sie sind bereits registriert!",
'REGISTER_ERRCOMPLETEBILLINGADDRESS'                          => "Fehler: Bitte tragen Sie auch Ihre Rechnungsadresse ein!",
'REGISTER_ERRCOMPLETEMARKEDFIELDS'                            => "0",
'REGISTER_ERRINVALIDEMAIL'                                    => "Fehler: Keine gültige E-Mail-Adresse!",
'REGISTER_ERRLINKEXPIRED'                                     => "Der Bestätigungslink ist abgelaufen.",
'REGISTER_ERRMINLENGTH'                                       => "Fehler: Passwort zu kurz! (Mind. 6 Zeichen)",
'REGISTER_ERRPWDDONTMATCH'                                    => "Fehler: Passwörter stimmen nicht überein!",
'REGISTER_ERRWRONGUSERORPWD'                                  => "Fehler: Falscher Benutzer/Passwort!",
'REGISTER_OPENACCOUNT'                                        => "Neues Konto eröffnen",
'REGISTER_SHIPPINGADDRESS'                                    => "Lieferadresse",
'REVIEW_PASTREVIEW'                                           => "Bisherige Kommentare",
'REVIEW_REVIEW'                                               => "Ihre Bewertung",
'REVIEW_THANKYOUFORREVIEW'                                    => "Vielen Dank für Ihre Bewertung",
'REVIEW_TOSAVEREVIEW'                                         => "Kommentar speichern",
'REVIEW_YOURREVIEW'                                           => "Ihre Bewertung",
'SECURITY_INFO_TITLE'                                         => "Datenschutz",
'START_LONGRUNNINGHITS'                                       => "Die Dauerbrenner",
'START_OURBARGAIN'                                            => "UNSER SCHNÄPPCHEN!",
'START_TITLE'                                                 => "Home",
'SUGGEST_COMLETECORRECTLYFIELDS'                              => "Bitte alle Felder ausfüllen, sonst kann die Karte nicht zugestellt werden.",
'SUGGEST_MESSAGE1'                                            => "Hallo, Heute habe ich den interessanten Shop",
'SUGGEST_MESSAGE2'                                            => "für dich gefunden. Einfach auf den Link unten klicken, und du gelangst direkt zum Shop.",
'TAGS'                                                        => "Stichworte",
'TAGS_ADD'                                                    => "Stichwort hinzufügen",
'TAGS_EDIT'                                                   => "Stichwort ändern",
'TAGS_HIGHLIHGT_INSTRUCTIONS'                                 => "Stichworte anklicken oder Neues eintragen:",
'TAGS_SEPARATEBY'                                             => "Tags mit folgenden Zeichen trennen",
'THANKYOU_BACKTOSHOP'                                         => "Weiter zum",
'THANKYOU_ORDERHISTORY'                                       => "Zu Ihrer Bestellhistorie",
'THANKYOU_REGISTEREDYOUORDERNO1'                              => "Ihre Bestellung ist unter der Nummer",
'THANKYOU_REGISTEREDYOUORDERNO2'                              => "bei uns registriert.",
'THANKYOU_THANKYOU1'                                          => "Vielen Dank für Ihre Bestellung",
'THANKYOU_THANKYOU2'                                          => "im",
'USER_BILLINDADDRESS'                                         => "Rechnungsadresse",
'USER_BIRTHDAYMESSAGE'                                        => "Verraten Sie uns Ihren Geburtstag<br>damit wir Sie überraschen können.",
'USER_BLOCHED_TITLE'                                          => "Zugang verweigert",
'USER_COMPLETEALLMARKEDFIELDS'                                => '(Felder mit einem <span class="req">*</span> müssen ausgefüllt werden)',
'USER_CONFIRMPWD'                                             => "Passwort wiederholen:",
'USER_DIFFERENTDELIVERYADDRESS'                               => "Folgende Felder bitte nur ausfüllen, falls die gewünschte Lieferadresse von der Rechnungsadresse abweicht.",
'USER_DIFFERENTSHIPPINGADDRESS'                               => "Hier klicken, um an eine andere Adresse zu liefern",
'USER_ENTEREMAILANDPWD'                                       => "Bitte geben Sie Ihre E-Mail-Adresse und ein Passwort ein.",
'USER_ERRALREADYREGISTERED'                                   => "<b>Fehler:</b> Sie sind bereits registriert! Bitte geben Sie das korrekte Passwort ein.",
'USER_ERRALREADYREGISTERED2'                                  => "Fehler: Sie sind bereits registriert! Bitte geben Sie das korrekte Passwort ein.",
'USER_ERRCOMLETEMARKEDFIELDS'                                 => "0",
'USER_ERRCOMPLETEBILLINGADDRESS'                              => "Fehler: Bitte tragen Sie auch Ihre Rechnungs Adresse ein!",
'USER_ERRCOMPLETEFIELDS'                                      => "<b>Fehler:</b> Bitte tragen Sie auch Ihre Rechnungs Adresse ein!",
'USER_ERRINVALIDEMAIL'                                        => "<b>Fehler:</b> Keine gültige E-Mail-Adresse!",
'USER_ERRINVALIDEMAIL2'                                       => "Fehler: Keine gültige E-Mail-Adresse!",
'USER_ERRMINPWDLENGTH'                                        => "Fehler: Passwort zu kurz! (Mind. 6 Zeichen)",
'USER_ERROR'                                                  => "Fehler:",
'USER_ERRPASSWORDSDONTMATCH'                                  => "<b>Fehler:</b> Passwörter stimmen nicht überein!",
'USER_ERRPWDDONTMATCH'                                        => "Fehler: Passwörter stimmen nicht überein!",
'USER_ERRUNKNOWNADDRESS'                                      => "<b>Fehler:</b> Adresse unbekannt!",
'USER_ERRUNKNOWNADDRESS2'                                     => "Fehler: Adresse unbekannt!",
'USER_ERRWRONGUSERORPWD'                                      => "<b>Fehler:</b> Falsche E-Mail oder Passwort!",
'USER_ERRWRONGUSERORPWD2'                                     => "Fehler: Falscher Benutzer/Passwort!",
'USER_FB_UPDATEACCOUNTMSG'                                    => "Sie haben sich in diesem Shop früher schon einmal mit Facebook Connect angemeldet. Falls Sie ein Kundenkonto im Shop haben, aktualisieren Sie dieses und verbinden Sie es mit Facebook, damit das Login in diesen Shop zukünftig noch bequemer für Sie wird.",
'USER_FORGOTPWD'                                              => "Passwort vergessen",
'USER_LOGIN2'                                                 => "Zur Anmeldung",
'USER_MOBIL'                                                  => "Mobil:",
'USER_OPENPERSONALACCOUNT1'                                   => "Persönliches Kunden-<br>Konto eröffnen.",
'USER_OPENPERSONALACCOUNT10'                                  => "- Sonder- und Rabattaktionen",
'USER_OPENPERSONALACCOUNT2'                                   => "Mit einem Kundenaccount",
'USER_OPENPERSONALACCOUNT3'                                   => "haben Sie folgende Vorteile:",
'USER_OPENPERSONALACCOUNT4'                                   => "- Verwaltung der Lieferadressen",
'USER_OPENPERSONALACCOUNT5'                                   => "- Prüfung des Bestellstatus",
'USER_OPENPERSONALACCOUNT6'                                   => "- Bestellhistorie",
'USER_OPENPERSONALACCOUNT7'                                   => "- persönlicher Merkzettel",
'USER_OPENPERSONALACCOUNT8'                                   => "- persönliche Wunschliste",
'USER_OPENPERSONALACCOUNT9'                                   => "- Newsletter-Verwaltung",
'USER_OPTION1'                                                => "Option 1",
'USER_OPTION2'                                                => "Option 2",
'USER_OPTION3'                                                => "Option 3",
'USER_ORDERWITHOUTREGISTER1'                                  => "Einkaufen ohne Registrierung",
'USER_ORDERWITHOUTREGISTER2'                                  => "(Ich möchte kein Kundenkonto anlegen.)",
'USER_PLEASELOGIN'                                            => "Bitte melden Sie sich mit Ihrer E-Mail-Adresse oder Kundennummer und Ihrem Passwort hier an.",
'USER_RECEIVECONFIRMATION'                                    => "Sie erhalten eine Anmeldebestätigung mit Ihren Daten, die Sie sorgfältig aufbewahren sollten.",
'USER_SEND'                                                   => "Versenden",
'USER_SHIPPINGADDRESS'                                        => "Lieferadresse",
'USER_UPDATE_ACCOUNT'                                         => "Kontoinformationen aktualisieren",
'USER_USEBILLINGADDR'                                         => "Rechnungsadresse nutzen",
'VAT_MESSAGE_ID_NOT_VALID'                                    => "Fehler: Die angegebene Umsatzsteuer-Identnummer ist ungültig",
'VAT_MESSAGE_ID_VALID'                                        => "Die angegebene Umsatzsteuer-Identnummer ist gültig",
'VAT_MESSAGE_INVALID_INPUT'                                   => "Der angegebene Ländercode ist ungültig oder die Umsatzsteuer-Identnummer ist leer",
'VAT_MESSAGE_MS_UNAVAILABLE'                                  => "Die Prüfung der Umsatzsteuer-Identnummer-Prüfung ist derzeit wegen technischer Probleme der Prüfstelle des Mitgliedslandes nicht möglich",
'VAT_MESSAGE_SERVER_BUSY'                                     => "Die Abfrage der angegebenen Umsatzsteuer-Identnummer aus technischen Gründen derzeit nicht möglich",
'VAT_MESSAGE_SERVICE_UNAVAILABLE'                             => "Die Abfrage der angegebenen Umsatzsteuer-Identnummer aus technischen Gründen derzeit nicht möglich",
'VAT_MESSAGE_TIMEOUT'                                         => "Die Prüfung der Umsatzsteuer-Identnummer-Prüfung ist derzeit wegen technischer Probleme der Prüfstelle des Mitgliedslandes nicht möglich",
'WISHLIST_PRODUCTS1'                                          => "Diese Artikel hat sich",
'WISHLIST_PRODUCTS2'                                          => " gewünscht. Wenn Sie ihr/ihm eine Freude machen wollen, dann kaufen Sie einen oder mehrere von diesen Artikeln.",
'WRAPPING_ADDFORANDFROM'                                      => 'Bitte fügen Sie auch "Für" und "Von" hinzu.',
'WRAPPING_ADDWRAPORCARD'                                      => "Als Geschenk verpacken und/oder mit einer Geschenkkarte versehen",
'WRAPPING_BACKTOORDER'                                        => "Zurück zur Bestellung",
'WRAPPING_NONE'                                               => "KEINE",
'WRAPPING_OPTIONALMESSAGE'                                    => "Falls gewünscht geben Sie, hier Ihre Grußnachricht ein:",
'WRAPPING_PRICEPERPACKAGE'                                    => "Preis pro Verpackung",
'WRAPPING_SELECTCARD'                                         => "Karte wählen",
'byBrand'                                                     => "Nach Marke/Hersteller",
'byManufacturer'                                              => "Nach Marke/Hersteller",
'byVendor'                                                    => "Nach Lieferant",
'charset'                                                     => "UTF-8",
'fullDateFormat'                                              => "d.m.Y H:i:s",
'priceFrom'                                                   => '<span class="pricefrom">ab</span>',
'searchResult'                                                => 'Suchergebnis für "%s"',
'simpleDateFormat'                                            => "d.m.Y",
'usrRegistered'                                               => "Der Benutzer wird nach der Eingabe seines Passwortes registriert",

);
