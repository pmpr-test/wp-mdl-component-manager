<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b58d5f663             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Frontend\Component\Multistep; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Data\Compare; use Pmpr\Module\ComponentManager\Model\Component; class Setting extends BaseClass { const qwqkccuwkqeoucqu = "\x67\x6f\x74\157\x5f\141\x66\164\x65\x72\137\141\x64\144\x5f\164\x6f\x5f\143\141\x72\x74"; const okcgiwmueoyocegm = "\x72\145\161\165\x69\x72\145\x6d\x65\x6e\x74\163"; const msuwykmiggyawwok = "\143\x6f\156\164\141\143\164\x5f\x75\x73\x5f\160\141\x67\x65"; const mamyakyiqcsmiyae = "\143\x6f\155\x70\x6f\x6e\x65\x6e\164\137\151\x6e\163\164\141\x6c\x6c\x61\164\x69\157\156\x5f\147\x75\x69\x64\x65\163"; const yicqiccsyqwigaqa = "\142\141\x63\x6b\154\151\x6e\x6b\137"; const oycqkmeykiouqcqo = self::yicqiccsyqwigaqa . Constants::qescuiwgsyuikume; const aaasmysammcocwcu = self::yicqiccsyqwigaqa . Constants::mkousmkiawwousws; const awqewimmscsokykc = self::yicqiccsyqwigaqa . Constants::muocgwgqigscmqow; const aakugisgkoscaeys = self::yicqiccsyqwigaqa . Constants::eqkeooqcsscoggia; const kqykggkcgquswkea = "\160\x6c\165\x67\x69\x6e\137\x67\x75\151\144\145\x5f"; const iwseqweooieakqwk = self::kqykggkcgquswkea . "\x66\x69\x6c\x65"; const aqusgmmakasqamgq = self::kqykggkcgquswkea . Constants::qescuiwgsyuikume; const wumiomcykccwmgei = self::kqykggkcgquswkea . Constants::gqmuoaykeqeuoukm; const ggswmwomsiccuqwg = self::kqykggkcgquswkea . Constants::eqkeooqcsscoggia; const eyiukesukwwsmyya = "\160\154\x75\147\151\156\137\x74\141\142\137"; const agskamgmowaiywus = self::eyiukesukwwsmyya . Constants::qescuiwgsyuikume; const ywgmisckaekgmagi = self::eyiukesukwwsmyya . "\143\157\155\x70\141\162\x65\x73"; const uckmggyuwgmmskyc = self::eyiukesukwwsmyya . Constants::eqkeooqcsscoggia; const umoycqkiaiqoqaau = "\160\154\x75\147\x69\x6e\x5f\x62\141\143\x6b\x6c\151\x6e\153\x5f\x6d\157\144\x61\154"; const ayygmosqcwyeaagw = "\160\x6d\x70\x72\x5f\166\x61\154\x75\145"; const eisiyawomcsouiwe = "\167\157\x72\x64\x70\162\x65\x73\163\137\x76\x61\154\165\145"; const gmquuqmomuaqueyi = "\x63\x61\162\x74"; const cwswygwykwgsqiwu = "\x73\x69\156\147\154\x65"; const qseekcawwuumgacy = "\143\x68\x65\143\x6b\x6f\165\164"; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->hasLicense = false; $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea()); } public function wyyuauosmqoeucmg() { $this->title = __("\x43\157\x6d\x70\157\x6e\145\x6e\x74\x20\115\141\156\x61\x67\145\162\40\x53\145\x74\164\x69\x6e\x67", PR__MDL__COMPONENT_MANAGER); $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __("\x53\145\x74\164\151\x6e\x67", PR__MDL__COMPONENT_MANAGER)); } public function ykwqaukkycogooii() { $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\143\x6f\155\x70\x6f\156\x65\x6e\164\163")->saemoowcasogykak(IconInterface::oweoqccsyyusoqei)->gswweykyogmsyawy(__("\103\157\x6d\x70\x6f\156\x65\x6e\x74\x73", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\122\145\x71\165\151\162\x65\155\x65\156\164\163\54\x20\x55\x70\x64\x61\164\x65\x73\54\40\56\x2e\x2e", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\x47\145\156\x65\162\141\154", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::mamyakyiqcsmiyae)->gswweykyogmsyawy(__("\111\x6e\163\x74\141\154\x6c\141\x74\151\x6f\x6e\40\x47\x75\151\x64\x65\40\123\164\145\160\163", PR__MDL__COMPONENT_MANAGER))->omsoosuoikgueyke()->yoouesigykyekkag()->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x54\151\164\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\x49\143\157\156", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->gsomueooycksswcy()->qsecygiycssgacqs(4)->gswweykyogmsyawy(__("\104\x65\x73\143\162\151\160\164\x69\157\x6e", PR__MDL__COMPONENT_MANAGER))->uokyeqicycwwikwi(Constants::ocwsuwyiiasigqaa, __("\x43\x6f\155\160\157\156\145\x6e\164\x20\x4e\141\x6d\145", PR__MDL__COMPONENT_MANAGER))))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::msuwykmiggyawwok)->gswweykyogmsyawy(__("\103\x6f\156\x74\x61\143\164\40\125\123\40\120\141\147\x65", PR__MDL__COMPONENT_MANAGER))->ukqywcsoogkyoaoa(Constants::imywcsggckkcywgk))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::ucoiewcoucauqwko)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x54\145\162\155\x73\x20\x6f\x66\x20\125\x73\x65", PR__MDL__COMPONENT_MANAGER))))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x72\145\161\x75\x69\x72\x65\x6d\x65\156\x74\163")->saemoowcasogykak(IconInterface::imoykkmkkkaqgouo)->gswweykyogmsyawy(__("\122\145\161\165\x69\162\x65\155\x65\x6e\x74\x73", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->qqmgmgasauucoago(Constants::miucsckaeckegceq)->omsoosuoikgueyke()->yoouesigykyekkag()->gswweykyogmsyawy(__("\122\x65\161\x75\151\x72\145\155\x65\x6e\164\40\x47\x75\151\144\145\x73", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\101\144\x6d\x69\x6e\40\x41\162\145\x61\40\124\151\x74\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qoawsacmmgmimqaw)->gswweykyogmsyawy(__("\106\x72\x6f\x6e\x74\x20\x41\x72\x65\x61\40\x54\151\164\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x44\x65\163\143\x72\x69\x70\164\151\157\x6e", PR__MDL__COMPONENT_MANAGER))))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::okcgiwmueoyocegm)->omsoosuoikgueyke()->yoouesigykyekkag()->gswweykyogmsyawy(__("\122\x65\161\165\151\x72\145\x6d\x65\x6e\164\x20\111\x74\x65\155\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::NAME)->gswweykyogmsyawy(__("\116\141\155\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\x49\143\157\156", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::wikgqsqysyuoykse)->gswweykyogmsyawy(__("\x44\x65\x66\x61\x75\x6c\164\40\x56\x61\154\x75\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(Constants::miucsckaeckegceq)->oikgogcweiiaocka()->gswweykyogmsyawy(__("\107\x75\151\x64\x65\163", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($this->giiuwsmyumqwwiyq(Constants::miucsckaeckegceq, [], [Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]))))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\160\155\160\x72\x5f\x70\x6c\x75\x67\x69\x6e")->saemoowcasogykak(IconInterface::csoyqymugwqiggki)->gswweykyogmsyawy(__("\120\115\x50\122\x20\120\154\x75\x67\151\156", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\x50\x6c\165\147\151\x6e\40\x43\x6f\x6e\x66\151\x67\165\162\141\164\151\x6f\156", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x70\154\x75\x67\x69\x6e" . Constants::iusoecsswgekecks)->gswweykyogmsyawy(__("\x47\x65\156\145\162\x61\154", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::umoycqkiaiqoqaau)->omsoosuoikgueyke()->gswweykyogmsyawy(__("\102\x61\143\x6b\154\151\156\153\40\115\157\144\x61\x6c", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x54\151\x74\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::TEXT)->gswweykyogmsyawy(__("\x54\x65\x78\164", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(3)->gsomueooycksswcy())))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x70\x6c\x75\147\151\x6e\137\164\x61\142\137\155\141\x69\156")->gswweykyogmsyawy(__("\x54\x61\x62\x27\x73\x20\115\x61\x69\156\40\x43\x6f\156\164\x65\156\x74", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::moyqoqmkkkaoeses)->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::agskamgmowaiywus)->gswweykyogmsyawy(__("\x54\x61\142\x20\x54\151\164\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::uckmggyuwgmmskyc)->gswweykyogmsyawy(__("\115\141\151\x6e\40\104\145\x73\x63\x72\151\160\x74\151\x6f\x6e", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(4)->gsomueooycksswcy())->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::ywgmisckaekgmagi)->omsoosuoikgueyke()->gswweykyogmsyawy(__("\103\157\x6d\160\141\162\x65\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\x69\164\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->eumecwmqmukqgyea()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x54\171\160\x65", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(Constants::aqikuweekkucgqoy, __("\x4d\157\144\165\x6c\x65", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(Constants::ykywsqyeckcgqyik, __("\x43\x6f\x76\145\162", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::eisiyawomcsouiwe)->gswweykyogmsyawy(__("\x57\x6f\x72\x64\x70\162\145\163\163", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::ayygmosqcwyeaagw)->gswweykyogmsyawy(__("\120\115\x50\122", PR__MDL__COMPONENT_MANAGER))))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\155\165\x6c\x74\151\x73\164\145\160")->saemoowcasogykak(IconInterface::miecumwmuocmymoa)->gswweykyogmsyawy(__("\x4d\x75\154\x74\x69\163\x74\x65\160", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\x4d\x75\x6c\164\151\x73\x74\x65\x70\x20\x43\x6f\x6e\x66\x69\x67\x75\x72\x61\x74\151\157\x6e", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\107\145\x6e\x65\x72\x61\154", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::qwqkccuwkqeoucqu)->gswweykyogmsyawy(__("\x47\x6f\40\x74\157\40\x41\146\x74\x65\x72\x20\x41\144\144\x20\x74\157\40\x43\141\x72\x74", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::cwswygwykwgsqiwu, __("\120\162\157\144\x75\143\164\x20\x53\x69\156\147\x6c\145", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::gmquuqmomuaqueyi, __("\103\x61\162\164", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::qseekcawwuumgacy, __("\103\x68\145\143\x6b\x6f\x75\x74", PR__MDL__COMPONENT_MANAGER))->eumecwmqmukqgyea()->eyygsasuqmommkua(self::cwswygwykwgsqiwu)))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\163\164\145\160\163")->saemoowcasogykak(IconInterface::gwuqaauiiiqquecg)->gswweykyogmsyawy(__("\x53\164\x65\160\x73\40\144\x61\x74\x61", PR__MDL__COMPONENT_MANAGER))->aucimgwswmgaocae($this->doeuiogekyiwgsgw("\157\162\x64\145\x72\137\x74\171\160\145")->saemoowcasogykak(IconInterface::qkqucweqeuyemamq)->gswweykyogmsyawy(sprintf(__("\x25\x73\40\x53\164\x65\x70", PR__MDL__COMPONENT_MANAGER), __("\117\x72\144\x65\162\40\124\x79\160\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::aqusgmmakasqamgq)->gswweykyogmsyawy(__("\x50\x6c\165\x67\151\x6e\x20\107\165\x69\x64\145\40\124\151\x74\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->quaegkgkucwyeiqg(self::iwseqweooieakqwk)->gswweykyogmsyawy(__("\120\154\x75\147\151\156\x20\107\x75\151\144\x65\40\106\x69\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::wumiomcykccwmgei)->gswweykyogmsyawy(__("\x50\x6c\x75\x67\151\156\x20\107\165\151\144\x65\40\x42\x75\164\x74\157\156\x20\124\145\170\x74", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::ggswmwomsiccuqwg)->gswweykyogmsyawy(__("\x50\154\165\x67\x69\156\x20\107\x75\151\144\145\x20\x44\145\163\143\x72\x69\160\164\151\157\156", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3)))->aucimgwswmgaocae($this->doeuiogekyiwgsgw("\x62\x61\143\x6b\154\151\156\153")->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->gswweykyogmsyawy(__("\x42\x61\x63\x6b\154\x69\156\x6b", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::oycqkmeykiouqcqo)->gswweykyogmsyawy(__("\102\x61\143\153\x6c\x69\156\x6b\40\124\151\164\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::aakugisgkoscaeys)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x42\141\x63\x6b\x6c\x69\156\153\40\x44\x65\x73\143\162\151\x70\x74\x69\157\x6e", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->quaegkgkucwyeiqg(self::aaasmysammcocwcu)->gswweykyogmsyawy(__("\x42\x61\x63\153\x6c\x69\x6e\x6b\x20\111\155\x61\x67\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::awqewimmscsokykc)->gsomueooycksswcy()->gswweykyogmsyawy(__("\102\141\x63\x6b\x6c\151\156\x6b\40\101\154\145\x72\164", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3)->eyygsasuqmommkua(__("\x69\x66\x20\162\145\155\x6f\166\x65\40\x69\x74\x20\x66\162\157\155\x20\x79\x6f\165\162\40\160\141\x67\145\x2c\x20\x79\157\x75\x72\40\141\x63\143\x6f\x75\x6e\164\40\151\x73\x20\x62\x61\156\156\x65\x64\x2e", PR__MDL__COMPONENT_MANAGER)))))); parent::ykwqaukkycogooii(); } public function gkiyamgwqciqwqwo() : ?string { return $this->giiuwsmyumqwwiyq(self::aaasmysammcocwcu, 0); } public function icioieqkoswsyouk(array $ywmkwiwkosakssii = []) : array { return $this->giiuwsmyumqwwiyq(self::umoycqkiaiqoqaau, [], $ywmkwiwkosakssii); } public function ksgygymiyeiukqoy() : array { $egsqwmeeeowomomi = (new Compare(Constants::ykywsqyeckcgqyik))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\x57\157\162\x64\160\162\145\x73\x73\x20\x54\150\145\155\145", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\x57\157\162\144\160\162\x65\163\163\40\103\x6f\x76\x65\x72", PR__MDL__COMPONENT_MANAGER)); $smqkocasociqsgai = (new Compare(Constants::aqikuweekkucgqoy))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\x57\x6f\162\144\x70\x72\145\x73\x73\x20\120\154\x75\147\x69\156", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\127\x6f\162\144\x70\x72\145\163\163\x20\115\157\144\165\154\145", PR__MDL__COMPONENT_MANAGER)); $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq(self::ywgmisckaekgmagi, []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, [Constants::qescuiwgsyuikume, Constants::squoamkioomemiyi])) { $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::squoamkioomemiyi); $ccamueccusigaaio = $smqkocasociqsgai; if ($sqeykgyoooqysmca === Constants::ykywsqyeckcgqyik) { $ccamueccusigaaio = $egsqwmeeeowomomi; } $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::qescuiwgsyuikume); $ccamueccusigaaio->kywqieosgkokaiue($meqocwsecsywiiqs, [self::ayygmosqcwyeaagw => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::ayygmosqcwyeaagw, true), self::eisiyawomcsouiwe => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::eisiyawomcsouiwe, false)]); } } return [Constants::ykywsqyeckcgqyik => $egsqwmeeeowomomi->sacmkccceuywoqsq(), Constants::aqikuweekkucgqoy => $smqkocasociqsgai->sacmkccceuywoqsq()]; } public function iwgmiyoaskssmosa() : string { $cokwmmimiaeayiwi = $this->giiuwsmyumqwwiyq(self::msuwykmiggyawwok, 0); return $cokwmmimiaeayiwi > 0 ? sprintf(__("\111\146\40\x6e\x65\145\144\x65\144\x2c\x20\x79\x6f\x75\x20\x63\141\156\40\143\x6f\156\x74\x61\x63\x74\x20\165\x73\x20\164\x68\162\157\x75\x67\150\40\x74\150\x65\40\45\x73\56", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(sprintf(__("\x50\141\x67\145\40\x25\163", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($cokwmmimiaeayiwi)), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($cokwmmimiaeayiwi), ["\143\154\x61\163\x73" => "\x61\x6c\145\x72\164\55\154\151\156\x6b"])) : ''; } public function wkcqmkyoskmemqek($syqougokmmgaoaee) : string { $haigguwksscaksqc = $this->giiuwsmyumqwwiyq(self::mamyakyiqcsmiyae, [], [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::wkweqssoakmmmguq => [Constants::qgqyauaqwqmqseim, Constants::qescuiwgsyuikume, Constants::eqkeooqcsscoggia]]); $nsmgceoqaqogqmuw = ''; if (is_array($haigguwksscaksqc)) { $aokagokqyuysuksm = "{$syqougokmmgaoaee}\137\x69\x6e\x73\x74\x61\x6c\x6c\x61\164\x69\157\x6e\137\x67\x75\x69\x64\x65"; $ycsgmysgoaqikiui = new Multistep($aokagokqyuysuksm); $ycsgmysgoaqikiui->qigsyyqgewgskemg("\151\x6e\x73\x74\x61\154\x6c\141\x74\x69\157\156\x2d\147\x75\x69\144\145\55\x6d\x75\154\164\151\163\164\145\x70"); $okguqgiiewywyoaq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $gaeqamemwmwsyukm = count($haigguwksscaksqc); $momcykaoccoymeig = 0; foreach ($haigguwksscaksqc as $uusmaiomayssaecw => $wysowamoceeqmiae) { $momcykaoccoymeig++; $wyeyeaaekyoyimqu = $ycsgmysgoaqikiui->yieymusoukkkmsww("{$aokagokqyuysuksm}\137\x73\x74\x65\160\x5f{$uusmaiomayssaecw}")->saemoowcasogykak($wysowamoceeqmiae[Constants::qgqyauaqwqmqseim])->gswweykyogmsyawy($wysowamoceeqmiae[Constants::qescuiwgsyuikume])->oguessuismosauuu($okguqgiiewywyoaq->aqiqkkuauegomyoi($wysowamoceeqmiae[Constants::eqkeooqcsscoggia])); if ($momcykaoccoymeig === $gaeqamemwmwsyukm) { $wyeyeaaekyoyimqu->gwwmcykumqueaosa(__("\x43\x6c\x6f\x73\145", PR__MDL__COMPONENT_MANAGER)); } $ycsgmysgoaqikiui->mgqggiyywoageqmo($wyeyeaaekyoyimqu); } $nsmgceoqaqogqmuw = $ycsgmysgoaqikiui->render(); } return $nsmgceoqaqogqmuw; } public function aqsugsmskceikaee($wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $syqougokmmgaoaee = $gcswwqwyaccgyoee->mwyqswsaeeewsosm($wksoawcgagcgoask); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return $this->caokeucsksukesyo()->kugiyqykwaskawsc()->icqkogwskuwscskk([Constants::gouqcwikiiygyasc => "\x69\x6e\163\164\141\x6c\154\141\x74\151\x6f\156\137\147\x75\151\x64\x65\x5f{$syqougokmmgaoaee}", Constants::waguuiqqgsysuukq => Constants::esgegasyoiyogwqc, Constants::qescuiwgsyuikume => sprintf(__("\x25\x73\x20\111\156\163\164\x61\x6c\x6c\x61\164\x69\x6f\156\40\107\165\x69\144\x65", PR__MDL__COMPONENT_MANAGER), $quisksguegkuygus), Constants::ssmskyqgcmeiayco => $this->wkcqmkyoskmemqek($syqougokmmgaoaee), Constants::qaioykeumkssukis => true, Constants::uqgcmmosieyimiku => [Constants::TEXT => __("\107\165\151\144\145", PR__MDL__COMPONENT_MANAGER), Constants::ysskgssgwuwmqwym => ["\143\x6c\141\163\163" => "\x61\x6c\145\x72\164\55\154\x69\156\x6b\x20\x69\156\x73\x74\x61\154\154\141\x74\x69\157\156\x2d\x67\165\x69\144\145\55\164\157\147\x67\154\x65"], Constants::gqmuoaykeqeuoukm => false, Constants::ELEMENT => "\x61"]]); } }
