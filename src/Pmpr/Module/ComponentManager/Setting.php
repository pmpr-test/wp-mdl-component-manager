<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d3642218a3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Frontend\Component\Multistep; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Data\Compare; use Pmpr\Module\ComponentManager\Model\Component; class Setting extends BaseClass { const qwqkccuwkqeoucqu = "\x67\157\x74\157\x5f\141\146\x74\145\162\x5f\x61\x64\144\137\164\x6f\137\x63\141\x72\164"; const okcgiwmueoyocegm = "\x72\145\161\x75\151\x72\x65\x6d\145\x6e\164\163"; const msuwykmiggyawwok = "\143\x6f\156\x74\141\143\x74\x5f\x75\x73\x5f\160\x61\x67\145"; const mamyakyiqcsmiyae = "\143\x6f\155\160\x6f\x6e\145\156\x74\137\x69\x6e\163\x74\141\x6c\154\x61\x74\x69\x6f\x6e\137\x67\165\151\144\x65\163"; const yicqiccsyqwigaqa = "\142\141\143\153\154\x69\x6e\x6b\137"; const oycqkmeykiouqcqo = self::yicqiccsyqwigaqa . Constants::qescuiwgsyuikume; const aaasmysammcocwcu = self::yicqiccsyqwigaqa . Constants::mkousmkiawwousws; const awqewimmscsokykc = self::yicqiccsyqwigaqa . Constants::muocgwgqigscmqow; const aakugisgkoscaeys = self::yicqiccsyqwigaqa . Constants::eqkeooqcsscoggia; const kqykggkcgquswkea = "\160\x6c\x75\x67\x69\x6e\137\x67\165\151\144\145\x5f"; const iwseqweooieakqwk = self::kqykggkcgquswkea . "\x66\151\154\x65"; const aqusgmmakasqamgq = self::kqykggkcgquswkea . Constants::qescuiwgsyuikume; const wumiomcykccwmgei = self::kqykggkcgquswkea . Constants::gqmuoaykeqeuoukm; const ggswmwomsiccuqwg = self::kqykggkcgquswkea . Constants::eqkeooqcsscoggia; const eyiukesukwwsmyya = "\x70\x6c\165\x67\151\x6e\x5f\164\x61\142\137"; const agskamgmowaiywus = self::eyiukesukwwsmyya . Constants::qescuiwgsyuikume; const ywgmisckaekgmagi = self::eyiukesukwwsmyya . "\x63\157\x6d\x70\141\x72\x65\163"; const uckmggyuwgmmskyc = self::eyiukesukwwsmyya . Constants::eqkeooqcsscoggia; const umoycqkiaiqoqaau = "\160\154\x75\147\151\x6e\x5f\x62\141\x63\153\x6c\151\156\153\x5f\155\x6f\x64\141\154"; const ayygmosqcwyeaagw = "\160\155\160\162\x5f\x76\x61\x6c\x75\145"; const eisiyawomcsouiwe = "\x77\157\162\144\160\162\x65\x73\x73\137\x76\x61\x6c\165\x65"; const gmquuqmomuaqueyi = "\143\141\162\164"; const cwswygwykwgsqiwu = "\x73\x69\x6e\147\x6c\x65"; const qseekcawwuumgacy = "\x63\x68\145\143\x6b\x6f\165\x74"; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->hasLicense = false; $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea()); } public function wyyuauosmqoeucmg() { $this->title = __("\103\x6f\155\160\157\156\x65\156\x74\x20\115\141\x6e\141\x67\145\162\x20\x53\x65\164\164\x69\156\147", PR__MDL__COMPONENT_MANAGER); $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __("\x53\145\164\x74\x69\156\147", PR__MDL__COMPONENT_MANAGER)); } public function ykwqaukkycogooii() { $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\x63\x6f\x6d\x70\x6f\x6e\145\156\164\163")->saemoowcasogykak(IconInterface::oweoqccsyyusoqei)->gswweykyogmsyawy(__("\103\157\155\x70\x6f\156\x65\156\x74\163", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\x52\x65\x71\x75\x69\162\x65\x6d\145\156\164\163\x2c\x20\125\160\144\141\164\145\163\x2c\x20\x2e\56\x2e", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\107\x65\156\x65\x72\141\x6c", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::mamyakyiqcsmiyae)->gswweykyogmsyawy(__("\x49\x6e\163\164\141\x6c\154\x61\164\151\x6f\x6e\x20\x47\165\x69\x64\x65\x20\x53\x74\145\x70\163", PR__MDL__COMPONENT_MANAGER))->omsoosuoikgueyke()->yoouesigykyekkag()->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\151\164\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\x49\143\x6f\x6e", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->gsomueooycksswcy()->qsecygiycssgacqs(4)->gswweykyogmsyawy(__("\x44\x65\163\x63\162\x69\x70\x74\x69\x6f\156", PR__MDL__COMPONENT_MANAGER))->uokyeqicycwwikwi(Constants::ocwsuwyiiasigqaa, __("\103\x6f\155\x70\157\156\x65\x6e\164\40\116\x61\x6d\145", PR__MDL__COMPONENT_MANAGER))))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::msuwykmiggyawwok)->gswweykyogmsyawy(__("\x43\x6f\156\x74\141\x63\164\40\x55\x53\40\x50\141\147\145", PR__MDL__COMPONENT_MANAGER))->ukqywcsoogkyoaoa(Constants::imywcsggckkcywgk))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::ucoiewcoucauqwko)->gsomueooycksswcy()->gswweykyogmsyawy(__("\124\145\162\155\x73\x20\157\146\40\125\163\x65", PR__MDL__COMPONENT_MANAGER))))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\162\145\x71\x75\151\x72\145\155\x65\156\164\163")->saemoowcasogykak(IconInterface::imoykkmkkkaqgouo)->gswweykyogmsyawy(__("\x52\145\x71\x75\151\x72\x65\x6d\145\156\164\x73", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->qqmgmgasauucoago(Constants::miucsckaeckegceq)->omsoosuoikgueyke()->yoouesigykyekkag()->gswweykyogmsyawy(__("\122\x65\x71\165\x69\x72\145\x6d\x65\x6e\164\40\107\x75\151\144\x65\x73", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\101\x64\x6d\x69\156\40\101\162\x65\x61\x20\124\151\164\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qoawsacmmgmimqaw)->gswweykyogmsyawy(__("\106\x72\157\x6e\164\x20\x41\x72\145\x61\40\124\x69\x74\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x44\145\x73\x63\162\151\x70\x74\x69\157\x6e", PR__MDL__COMPONENT_MANAGER))))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::okcgiwmueoyocegm)->omsoosuoikgueyke()->yoouesigykyekkag()->gswweykyogmsyawy(__("\x52\x65\161\165\x69\162\145\x6d\145\x6e\164\x20\111\164\x65\x6d\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::NAME)->gswweykyogmsyawy(__("\x4e\141\x6d\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\x49\143\x6f\156", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::wikgqsqysyuoykse)->gswweykyogmsyawy(__("\104\145\x66\141\165\x6c\164\40\x56\141\x6c\x75\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(Constants::miucsckaeckegceq)->oikgogcweiiaocka()->gswweykyogmsyawy(__("\107\x75\x69\x64\145\163", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($this->giiuwsmyumqwwiyq(Constants::miucsckaeckegceq, [], [Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]))))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\160\155\x70\x72\137\160\154\165\147\151\x6e")->saemoowcasogykak(IconInterface::csoyqymugwqiggki)->gswweykyogmsyawy(__("\x50\115\120\x52\40\x50\154\x75\x67\x69\x6e", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\x50\154\165\147\151\156\x20\103\157\156\x66\151\x67\x75\x72\x61\164\151\x6f\x6e", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x70\154\165\147\x69\x6e" . Constants::iusoecsswgekecks)->gswweykyogmsyawy(__("\x47\x65\156\x65\162\x61\154", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::umoycqkiaiqoqaau)->omsoosuoikgueyke()->gswweykyogmsyawy(__("\x42\141\143\x6b\x6c\x69\156\153\x20\x4d\x6f\x64\x61\154", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x54\151\x74\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::TEXT)->gswweykyogmsyawy(__("\x54\145\170\x74", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(3)->gsomueooycksswcy())))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x70\154\x75\x67\x69\156\x5f\164\x61\x62\x5f\x6d\141\x69\156")->gswweykyogmsyawy(__("\124\141\x62\47\x73\40\x4d\141\151\x6e\40\x43\x6f\x6e\x74\145\156\164", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::moyqoqmkkkaoeses)->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::agskamgmowaiywus)->gswweykyogmsyawy(__("\124\x61\142\x20\124\x69\164\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::uckmggyuwgmmskyc)->gswweykyogmsyawy(__("\x4d\x61\x69\x6e\40\104\145\163\x63\162\x69\160\x74\x69\157\x6e", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(4)->gsomueooycksswcy())->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::ywgmisckaekgmagi)->omsoosuoikgueyke()->gswweykyogmsyawy(__("\x43\x6f\155\x70\x61\x72\x65\x73", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\151\164\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->eumecwmqmukqgyea()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x54\x79\160\x65", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(Constants::aqikuweekkucgqoy, __("\115\157\x64\165\154\x65", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(Constants::ykywsqyeckcgqyik, __("\103\x6f\166\145\162", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::eisiyawomcsouiwe)->gswweykyogmsyawy(__("\x57\x6f\162\x64\x70\x72\x65\x73\x73", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::ayygmosqcwyeaagw)->gswweykyogmsyawy(__("\120\x4d\x50\122", PR__MDL__COMPONENT_MANAGER))))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\x6d\165\154\164\x69\x73\164\145\x70")->saemoowcasogykak(IconInterface::miecumwmuocmymoa)->gswweykyogmsyawy(__("\x4d\x75\154\164\x69\x73\164\145\x70", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\x4d\165\x6c\x74\x69\x73\164\145\160\x20\103\157\x6e\x66\151\x67\x75\162\x61\x74\151\x6f\x6e", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\107\145\x6e\x65\x72\x61\154", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::qwqkccuwkqeoucqu)->gswweykyogmsyawy(__("\107\157\x20\x74\157\x20\x41\146\164\x65\162\x20\101\x64\x64\40\164\x6f\x20\103\x61\162\x74", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::cwswygwykwgsqiwu, __("\120\x72\x6f\x64\165\x63\164\40\x53\x69\x6e\x67\x6c\145", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::gmquuqmomuaqueyi, __("\103\141\162\164", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::qseekcawwuumgacy, __("\x43\150\x65\143\153\x6f\x75\164", PR__MDL__COMPONENT_MANAGER))->eumecwmqmukqgyea()->eyygsasuqmommkua(self::cwswygwykwgsqiwu)))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\163\164\145\x70\163")->saemoowcasogykak(IconInterface::gwuqaauiiiqquecg)->gswweykyogmsyawy(__("\123\x74\x65\x70\163\x20\x64\141\164\x61", PR__MDL__COMPONENT_MANAGER))->aucimgwswmgaocae($this->doeuiogekyiwgsgw("\157\162\x64\x65\162\x5f\x74\x79\160\145")->saemoowcasogykak(IconInterface::qkqucweqeuyemamq)->gswweykyogmsyawy(sprintf(__("\45\x73\40\123\x74\145\x70", PR__MDL__COMPONENT_MANAGER), __("\117\x72\144\145\162\40\124\171\x70\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::aqusgmmakasqamgq)->gswweykyogmsyawy(__("\x50\154\x75\x67\x69\x6e\40\107\x75\x69\x64\145\40\x54\151\164\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->quaegkgkucwyeiqg(self::iwseqweooieakqwk)->gswweykyogmsyawy(__("\x50\154\x75\x67\151\156\40\107\165\x69\144\145\x20\x46\151\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::wumiomcykccwmgei)->gswweykyogmsyawy(__("\x50\154\x75\147\151\156\x20\107\165\151\x64\145\x20\x42\x75\164\164\x6f\156\40\124\x65\x78\x74", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::ggswmwomsiccuqwg)->gswweykyogmsyawy(__("\120\154\x75\x67\151\x6e\40\x47\165\151\144\x65\40\x44\145\x73\x63\162\x69\160\x74\x69\157\156", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3)))->aucimgwswmgaocae($this->doeuiogekyiwgsgw("\142\x61\x63\x6b\x6c\x69\x6e\153")->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->gswweykyogmsyawy(__("\x42\x61\143\x6b\154\x69\156\x6b", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::oycqkmeykiouqcqo)->gswweykyogmsyawy(__("\102\141\x63\153\154\x69\x6e\x6b\x20\124\151\164\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::aakugisgkoscaeys)->gsomueooycksswcy()->gswweykyogmsyawy(__("\102\x61\143\153\154\x69\156\x6b\40\x44\x65\x73\x63\162\x69\x70\x74\x69\157\x6e", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->quaegkgkucwyeiqg(self::aaasmysammcocwcu)->gswweykyogmsyawy(__("\102\141\143\153\154\x69\x6e\153\x20\111\x6d\141\x67\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::awqewimmscsokykc)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x42\141\x63\x6b\154\151\156\x6b\40\x41\x6c\x65\162\x74", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3)->eyygsasuqmommkua(__("\151\x66\x20\x72\145\x6d\157\x76\145\x20\x69\164\x20\x66\162\157\x6d\x20\171\x6f\165\162\40\x70\141\x67\x65\54\x20\171\157\x75\162\x20\x61\x63\143\157\x75\156\164\40\151\x73\40\x62\141\156\156\x65\x64\x2e", PR__MDL__COMPONENT_MANAGER)))))); parent::ykwqaukkycogooii(); } public function gkiyamgwqciqwqwo() : ?string { return $this->giiuwsmyumqwwiyq(self::aaasmysammcocwcu, 0); } public function icioieqkoswsyouk(array $ywmkwiwkosakssii = []) : array { return $this->giiuwsmyumqwwiyq(self::umoycqkiaiqoqaau, [], $ywmkwiwkosakssii); } public function ksgygymiyeiukqoy() : array { $egsqwmeeeowomomi = (new Compare(Constants::ykywsqyeckcgqyik))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\127\x6f\162\144\x70\162\145\x73\163\40\124\150\145\155\x65", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\x57\x6f\162\144\x70\x72\x65\163\x73\x20\x43\x6f\166\145\x72", PR__MDL__COMPONENT_MANAGER)); $smqkocasociqsgai = (new Compare(Constants::aqikuweekkucgqoy))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\x57\x6f\x72\x64\x70\162\x65\x73\163\40\120\154\165\x67\x69\x6e", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\127\x6f\x72\x64\160\x72\145\x73\x73\x20\115\157\144\x75\154\145", PR__MDL__COMPONENT_MANAGER)); $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq(self::ywgmisckaekgmagi, []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, [Constants::qescuiwgsyuikume, Constants::squoamkioomemiyi])) { $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::squoamkioomemiyi); $ccamueccusigaaio = $smqkocasociqsgai; if ($sqeykgyoooqysmca === Constants::ykywsqyeckcgqyik) { $ccamueccusigaaio = $egsqwmeeeowomomi; } $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::qescuiwgsyuikume); $ccamueccusigaaio->kywqieosgkokaiue($meqocwsecsywiiqs, [self::ayygmosqcwyeaagw => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::ayygmosqcwyeaagw, true), self::eisiyawomcsouiwe => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::eisiyawomcsouiwe, false)]); } } return [Constants::ykywsqyeckcgqyik => $egsqwmeeeowomomi->sacmkccceuywoqsq(), Constants::aqikuweekkucgqoy => $smqkocasociqsgai->sacmkccceuywoqsq()]; } public function iwgmiyoaskssmosa() : string { $cokwmmimiaeayiwi = $this->giiuwsmyumqwwiyq(self::msuwykmiggyawwok, 0); return $cokwmmimiaeayiwi > 0 ? sprintf(__("\x49\146\40\156\x65\x65\x64\x65\144\x2c\40\x79\157\x75\x20\143\141\x6e\40\x63\x6f\x6e\164\x61\x63\x74\x20\165\163\40\164\x68\162\x6f\165\147\150\40\164\150\145\x20\x25\x73\x2e", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(sprintf(__("\x50\x61\x67\x65\40\45\x73", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($cokwmmimiaeayiwi)), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($cokwmmimiaeayiwi), ["\x63\154\141\163\x73" => "\x61\x6c\x65\162\x74\x2d\x6c\151\x6e\153"])) : ''; } public function wkcqmkyoskmemqek($syqougokmmgaoaee) : string { $haigguwksscaksqc = $this->giiuwsmyumqwwiyq(self::mamyakyiqcsmiyae, [], [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::wkweqssoakmmmguq => [Constants::qgqyauaqwqmqseim, Constants::qescuiwgsyuikume, Constants::eqkeooqcsscoggia]]); $nsmgceoqaqogqmuw = ''; if (is_array($haigguwksscaksqc)) { $aokagokqyuysuksm = "{$syqougokmmgaoaee}\137\x69\156\x73\x74\x61\x6c\x6c\141\x74\151\157\156\137\x67\x75\151\x64\x65"; $ycsgmysgoaqikiui = new Multistep($aokagokqyuysuksm); $ycsgmysgoaqikiui->qigsyyqgewgskemg("\151\156\163\164\x61\154\154\x61\164\x69\x6f\156\x2d\147\x75\x69\144\145\55\155\165\x6c\x74\151\163\164\x65\160"); $okguqgiiewywyoaq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $gaeqamemwmwsyukm = count($haigguwksscaksqc); $momcykaoccoymeig = 0; foreach ($haigguwksscaksqc as $uusmaiomayssaecw => $wysowamoceeqmiae) { $momcykaoccoymeig++; $wyeyeaaekyoyimqu = $ycsgmysgoaqikiui->yieymusoukkkmsww("{$aokagokqyuysuksm}\137\163\x74\x65\x70\137{$uusmaiomayssaecw}")->saemoowcasogykak($wysowamoceeqmiae[Constants::qgqyauaqwqmqseim])->gswweykyogmsyawy($wysowamoceeqmiae[Constants::qescuiwgsyuikume])->oguessuismosauuu($okguqgiiewywyoaq->aqiqkkuauegomyoi($wysowamoceeqmiae[Constants::eqkeooqcsscoggia])); if ($momcykaoccoymeig === $gaeqamemwmwsyukm) { $wyeyeaaekyoyimqu->gwwmcykumqueaosa(__("\x43\x6c\157\x73\x65", PR__MDL__COMPONENT_MANAGER)); } $ycsgmysgoaqikiui->mgqggiyywoageqmo($wyeyeaaekyoyimqu); } $nsmgceoqaqogqmuw = $ycsgmysgoaqikiui->render(false, []); } return $nsmgceoqaqogqmuw; } public function aqsugsmskceikaee($wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $syqougokmmgaoaee = $gcswwqwyaccgyoee->mwyqswsaeeewsosm($wksoawcgagcgoask); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return $this->caokeucsksukesyo()->kugiyqykwaskawsc()->icqkogwskuwscskk([Constants::gouqcwikiiygyasc => "\x69\x6e\163\164\x61\154\x6c\141\164\x69\157\x6e\x5f\147\x75\x69\144\145\x5f{$syqougokmmgaoaee}", Constants::waguuiqqgsysuukq => Constants::esgegasyoiyogwqc, Constants::qescuiwgsyuikume => sprintf(__("\x25\163\40\x49\156\163\x74\141\x6c\154\x61\x74\x69\157\156\x20\107\x75\x69\144\145", PR__MDL__COMPONENT_MANAGER), $quisksguegkuygus), Constants::ssmskyqgcmeiayco => $this->wkcqmkyoskmemqek($syqougokmmgaoaee), Constants::qaioykeumkssukis => true, Constants::uqgcmmosieyimiku => [Constants::TEXT => __("\107\165\151\x64\x65", PR__MDL__COMPONENT_MANAGER), Constants::ysskgssgwuwmqwym => ["\143\x6c\141\163\163" => "\141\x6c\x65\x72\164\x2d\x6c\x69\156\x6b\40\x69\x6e\x73\x74\x61\154\154\x61\x74\151\x6f\x6e\55\x67\165\x69\144\145\55\x74\157\147\147\x6c\145"], Constants::gqmuoaykeqeuoukm => false, Constants::ELEMENT => "\141"]]); } }
