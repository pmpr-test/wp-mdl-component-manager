<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7901da8d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Frontend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Ajax; use Pmpr\Module\ComponentManager\ComponentManager; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Installation; use Pmpr\Module\ComponentManager\Model\Request; use Pmpr\Module\ComponentManager\Setting; abstract class InstallRequestMultistep extends Multistep { const kucekgcakwigcqiy = self::oksogsuoasasycco . "\x73\x65\x72\151\141\x6c\x5f\143\x68\x65\x63\153"; const oaiiyoewkkgqawaa = self::oksogsuoasasycco . "\162\x65\x71\165\x69\162\x65\155\145\x6e\164\x73"; const qgmeqwomcqikmcas = self::oksogsuoasasycco . "\163\145\x74\x75\x70\x5f\151\156\146\x6f\162\155\141\164\x69\x6f\156"; public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk($qqscaoyqikuyeoaw); $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $emssaqsyeiqeeiqa = "\143\x6f\155\160\157\156\145\156\x74\x5f\x6d\x61\x6e\x61\147\145\x72\137\151\156\x73\164\141\154\154\x5f\x72\x65\x71\x75\x65\163\164\x5f\x25\x73\x5f\146\151\x65\154\144\163"; switch ($qqscaoyqikuyeoaw) { case self::kucekgcakwigcqiy: $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->cwiuiiakukcsaakw(Constants::ocwsuwyiiasigqaa)->iygyugseyaqwywyg($this->iaueessccuucgisw()), $gusoaiguqeaommcc->ymuegqgyuagyucws(Installation::sukyayoieioyymka)->kyiucygqsgequoys(__("\123\145\164\x75\160\40\x53\x65\x72\151\141\154", PR__MDL__COMPONENT_MANAGER))->qigsyyqgewgskemg("\164\x65\x78\164\55\143\145\x6e\x74\x65\x72")->jyumyyugiwwiqomk(0)->kqqqugemmqagucuq()->lgwgcswaocouiuik(7, 7), $gusoaiguqeaommcc->qoeiescseggagsqs("\x63\x68\x65\143\x6b\137\x73\145\x72\x69\141\x6c")->gswweykyogmsyawy(__("\x43\150\145\x63\x6b\x20\123\x65\162\x69\141\x6c", PR__MDL__COMPONENT_MANAGER))->qigsyyqgewgskemg("\x6d\141\x69\x6e\55\x61\x63\x74\151\157\x6e\40\142\164\x6e\x2d\142\154\157\x63\x6b")->qiqckusosoksgaua()->jyumyyugiwwiqomk(999)]; $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou(sprintf($emssaqsyeiqeeiqa, "\143\150\x65\143\x6b\x5f\163\145\x72\x69\x61\154"), $ikgwqyuyckaewsow); $qookweymeqawmcwo[Constants::ymckmcsiymwqucoq] = $gusoaiguqeaommcc->ywoasuyoaicwqqsu($ikgwqyuyckaewsow); goto wsesqmcqoiyyqkqi; case self::oaiiyoewkkgqawaa: $qookweymeqawmcwo[Constants::qwumqqyuasyskkkc] = Component::symcgieuakksimmu()->usesgqgqsgskkesi($this->iaueessccuucgisw()); $qookweymeqawmcwo["\x67\165\151\x64\145\x5f\164\x65\x78\x74"] = __("\107\165\x69\144\x65", PR__MDL__COMPONENT_MANAGER); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->wcwmusaouiqaqeww("\143\157\156\x66\x69\162\155\x61\x74\x69\x6f\x6e")->gswweykyogmsyawy(__("\101\154\x6c\40\x74\150\145\x20\141\142\x6f\x76\145\x20\x69\164\x65\155\163\40\141\162\x65\40\141\166\x61\x69\154\141\142\x6c\145\x20\x61\156\144\x20\x49\x20\141\155\40\162\145\141\144\x79\x20\146\157\162\x20\164\150\145\x20\x69\x6e\163\164\x61\x6c\x6c\x61\x74\151\157\x6e", PR__MDL__COMPONENT_MANAGER))]; $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou(sprintf($emssaqsyeiqeeiqa, "\162\145\x71\x75\x69\162\x65\x6d\x65\156\164\x73"), $ikgwqyuyckaewsow); $qookweymeqawmcwo[Constants::ymckmcsiymwqucoq] = $gusoaiguqeaommcc->ywoasuyoaicwqqsu($ikgwqyuyckaewsow); goto wsesqmcqoiyyqkqi; case self::qgmeqwomcqikmcas: $kueeocmceokoouqa = Request::symcgieuakksimmu(); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__("\123\x69\x74\x65\x20\x54\x65\x63\x68\156\151\143\141\154\40\x41\x73\163\151\163\x74\x61\x6e\164", PR__MDL__COMPONENT_MANAGER)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Request::moyywwqyaokwoagk)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\106\x75\154\x6c\x20\116\x61\155\145", PR__MDL__COMPONENT_MANAGER))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(Request::samkssymmeowamew)->smigkcmumwkgamkk()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\115\x6f\x62\151\x6c\x65", PR__MDL__COMPONENT_MANAGER))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Request::scawmcmqeimiwoqw)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\101\x6e\163\x77\x65\x72\151\156\x67\x20\x4d\x65\164\150\x6f\144", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($kueeocmceokoouqa->uqeoyqiwywwmsiew(Request::scawmcmqeimiwoqw)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Request::yayssowawieuycme)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x41\156\x73\x77\x65\x72\151\x6e\x67\x20\x44\141\171\163", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($kueeocmceokoouqa->uqeoyqiwywwmsiew(Request::yayssowawieuycme)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Request::sauuqekecqkcamwg)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x41\156\x73\167\145\x72\x69\156\147\40\x48\157\165\162\163", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($kueeocmceokoouqa->uqeoyqiwywwmsiew(Request::sauuqekecqkcamwg)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)), $gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__("\114\x6f\x67\151\x6e\x20\164\x6f\40\127\x6f\162\x64\160\x72\145\163\x73\40\101\x64\x6d\x69\156\40\x50\141\156\x65\x6c", PR__MDL__COMPONENT_MANAGER))->cuomeiwckekemywm(__("\117\x75\x72\x20\145\x78\160\145\x72\x74\x73\x20\x6e\x65\145\x64\x20\x74\x6f\x20\x6c\x6f\147\x20\x69\x6e\40\164\x6f\x20\x74\x68\145\x20\127\157\162\144\120\162\145\163\163\x20\155\x61\x6e\141\147\x65\x6d\x65\156\164\x20\160\x61\156\145\154\40\x6f\x66\x20\171\157\x75\162\40\x73\x69\x74\145\40\x74\x6f\40\151\x6e\163\x74\x61\154\x6c\x20\141\x6e\144\x20\x61\x64\152\x75\x73\164\x20\x74\150\x65\40\163\x70\145\x65\144\x20\151\156\143\162\145\141\163\145\x20\155\157\144\165\x6c\145\56\x20\106\157\162\40\x74\x68\x69\163\x20\x70\x75\162\160\x6f\163\x65\x2c\x20\143\x72\x65\x61\164\145\x20\141\40\164\x65\x6d\x70\x6f\162\x61\x72\x79\x20\x75\163\x65\x72\x20\x77\x69\164\x68\x20\x74\150\x65\40\x61\x63\x63\145\163\x73\x20\x6c\x65\166\145\154\40\x6f\146\x20\x74\150\145\40\x67\145\x6e\x65\162\x61\x6c\x20\155\x61\x6e\x61\x67\145\162\x20\141\156\x64\40\145\x6e\164\145\x72\40\151\164\x73\40\151\156\146\x6f\162\x6d\x61\x74\151\157\x6e\40\x69\x6e\40\x74\150\x65\40\146\157\x72\x6d\40\x62\145\x6c\157\167\56\40\x41\x66\164\145\x72\x20\x63\157\155\x70\154\x65\x74\x69\x6e\147\x20\164\x68\x65\x20\151\156\163\164\141\x6c\154\x61\164\x69\x6f\156\x20\141\156\x64\40\x73\145\x74\165\160\x20\x70\162\157\x63\145\163\163\54\x20\171\157\165\40\x63\141\x6e\x20\144\x65\x6c\145\x74\x65\40\x74\150\x65\40\155\x65\156\164\151\x6f\x6e\x65\x64\40\165\x73\145\162\40\x6f\162\x20\162\145\x64\165\143\145\40\x69\164\163\40\141\143\143\x65\163\163\40\154\x65\x76\x65\154\40\164\157\x20\163\x75\x62\x73\x63\x72\151\142\x65\162\x2e", PR__MDL__COMPONENT_MANAGER), Constants::smkwuwawwaqyimcq, false, ["\143\x6c\141\163\x73\x65\163" => "\x74\x65\x78\x74\x2d\152\165\x73\164\x69\x66\x79"]), $gusoaiguqeaommcc->ymuegqgyuagyucws(Request::ayeakwcweywoyqyc)->eyygsasuqmommkua("\x77\x70\x2d\141\144\x6d\x69\156")->kqqqugemmqagucuq()->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x41\144\x6d\151\156\40\x45\x6e\x64\160\x6f\x69\156\164", PR__MDL__COMPONENT_MANAGER)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->kqqqugemmqagucuq()->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\125\x73\145\x72\x6e\x61\x6d\145", PR__MDL__COMPONENT_MANAGER)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->kqqqugemmqagucuq()->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\x50\141\x73\x73\x77\157\x72\x64", PR__MDL__COMPONENT_MANAGER)), $gusoaiguqeaommcc->uouyygwcgsmygaee(Constants::eqkeooqcsscoggia)->gswweykyogmsyawy(__("\116\x65\x63\x65\x73\163\141\162\171\x20\105\170\x70\154\141\156\x61\164\x69\x6f\156\163", PR__MDL__COMPONENT_MANAGER))->cuomeiwckekemywm(__("\106\157\162\40\x65\170\141\x6d\x70\154\x65\54\x20\x74\150\145\40\141\x63\164\x69\166\x61\164\151\x6f\156\40\157\x66\40\62\x46\101\x20\157\162\x20\164\150\x65\x20\x6e\x65\145\x64\x20\164\157\40\145\x6e\164\x65\x72\40\x77\151\164\x68\x20\x61\x6e\40\x49\x72\141\156\151\x61\x6e\x20\x49\x50\40\157\x72\40\x61\156\x79\40\164\171\x70\145\40\x6f\x66\x20\151\x6e\x66\x6f\162\155\141\x74\151\x6f\x6e\40\x61\x6e\144\x20\x72\145\x71\x75\151\162\x65\155\145\156\164\x73\x20\146\x6f\x72\40\163\165\143\143\145\163\x73\146\x75\154\x20\x65\156\164\x72\171\56", PR__MDL__COMPONENT_MANAGER), Constants::smkwuwawwaqyimcq, false, ["\143\154\x61\x73\x73\x65\163" => "\x74\145\x78\164\x2d\x6a\x75\x73\164\x69\146\171"])]; $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou(sprintf($emssaqsyeiqeeiqa, "\163\145\164\165\160\137\x69\x6e\x66\157\162\x6d\x61\x74\151\157\156"), $ikgwqyuyckaewsow); $qookweymeqawmcwo[Constants::ymckmcsiymwqucoq] = $gusoaiguqeaommcc->ywoasuyoaicwqqsu($ikgwqyuyckaewsow); goto wsesqmcqoiyyqkqi; case self::kgmkeaoiugsyyeys: $qookweymeqawmcwo[Constants::eoskkkieowogacws] = sprintf("\45\163\x3c\142\162\76\74\x62\162\76\45\x73\x3c\142\x72\x3e\x3c\x62\x72\x3e\x25\x73", __("\x57\145\40\x68\x61\x76\x65\40\x72\x65\x63\145\x69\x76\x65\x64\x20\164\x68\x65\40\x72\145\161\165\145\163\164\x20\164\x6f\x20\151\156\163\x74\x61\154\154\40\164\x68\145\40\x73\x70\145\x65\x64\40\x69\156\143\x72\x65\141\x73\145\40\x6d\x6f\x64\165\x6c\145\40\146\157\x72\40\171\x6f\165\x72\40\x57\157\x72\x64\x50\162\145\163\163\x20\163\x69\164\145\56", PR__MDL__COMPONENT_MANAGER), __("\117\x75\162\40\x65\x78\160\x65\x72\164\x73\x20\167\x69\154\x6c\x20\x73\x74\141\162\x74\x20\x74\x68\145\x20\x70\x72\157\x63\145\x73\x73\x20\157\146\x20\151\156\x73\164\x61\154\x6c\151\156\x67\x20\141\x6e\x64\40\x61\x64\x6a\x75\163\x74\x69\156\x67\40\x74\150\x65\x20\x6d\157\x64\x75\x6c\x65\x20\151\156\x20\164\150\x65\x20\x6e\145\x78\x74\40\146\x65\167\x20\150\157\165\162\163\x20\141\x6e\144\40\x77\151\154\154\40\x62\x65\40\x69\x6e\x20\x63\x6f\x6e\x74\x61\143\164\x20\x77\x69\164\x68\x20\171\157\165\x72\40\164\145\143\x68\156\x69\x63\x61\154\x20\x65\x78\160\145\162\164\40\x69\x66\40\x6e\x65\x65\x64\x65\x64\56", PR__MDL__COMPONENT_MANAGER), Setting::symcgieuakksimmu()->iwgmiyoaskssmosa()); goto wsesqmcqoiyyqkqi; } mogkoocsoeuyoqqa: wsesqmcqoiyyqkqi: return $qookweymeqawmcwo; } public function enqueue() { if (!($gaumukogkkgkiiuo = ComponentManager::symcgieuakksimmu()->miocmcoykayoyyau())) { goto wkwamkgkwykeqkec; } $gaumukogkkgkiiuo->ieayqiyiuuguowyq(Constants::eoskkkieowogacws, ["\x65\x6d\x70\164\x79\x5f\x73\145\x72\151\x61\x6c" => __("\x54\150\145\40\163\145\162\151\x61\154\x20\156\x75\x6d\x62\145\x72\x20\x66\x69\x65\154\x64\40\x63\141\156\x6e\x6f\x74\40\x62\x65\40\x65\x6d\x70\x74\x79\x2e", PR__MDL__COMPONENT_MANAGER), "\x73\x65\162\x69\141\x6c\137\x6e\157\x74\x5f\x76\x61\154\x69\144" => __("\x54\150\x65\x20\163\x65\162\151\141\154\x20\156\165\x6d\142\x65\162\x20\x65\x6e\x74\x65\162\145\144\x20\151\163\40\156\x6f\x74\x20\x76\141\x6c\x69\144\56\x20\x50\x6c\x65\141\x73\145\40\x65\156\164\145\162\40\141\x20\x76\141\x6c\151\x64\x20\163\x65\x72\x69\141\154\x20\x6e\165\155\x62\145\162\56", PR__MDL__COMPONENT_MANAGER), "\143\150\x65\143\153\x5f\143\157\x6e\x66\151\x72\155\x61\x74\x69\157\x6e" => __("\103\150\145\143\x6b\x20\162\x65\161\165\x69\x72\145\x6d\x65\156\x74\x73\40\143\157\156\146\x69\x72\x6d\x61\x74\151\x6f\156\56", PR__MDL__COMPONENT_MANAGER), "\x63\x68\145\143\x6b\137\163\x65\162\151\141\x6c\x5f\146\151\x72\x73\x74" => __("\120\154\145\x61\x73\x65\x20\151\156\x73\x65\162\x74\40\163\145\x72\x69\x61\154\x20\x74\x6f\x20\x63\x68\x65\143\153\x20\171\157\x75\162\x20\162\145\x71\x75\x65\163\x74\x2e", PR__MDL__COMPONENT_MANAGER), "\146\151\154\x6c\137\x72\145\x71\x75\151\x72\x65\x64\137\x66\x69\145\154\144\163" => __("\x50\154\x65\141\x73\x65\40\x66\x69\x6c\x6c\x20\x72\145\161\165\151\x72\145\x64\40\146\x69\145\x6c\144\163\56", PR__MDL__COMPONENT_MANAGER), "\x61\x63\x63\x65\x70\164\137\164\145\x72\x6d\x73\x5f\x6f\x66\137\165\x73\x65\x5f\146\151\162\x73\x74" => __("\120\x6c\145\141\x73\145\x20\141\143\143\x65\x70\164\x20\164\145\162\155\163\40\x6f\x66\x20\165\x73\145\40\x66\x69\162\163\x74\56", PR__MDL__COMPONENT_MANAGER)])->ieayqiyiuuguowyq(Constants::gueokgaoyascgeqe, [Constants::ckumcckgkuuygwkg => ["\162\145\x71\165\x69\162\x65\144" => __("\x66\x69\145\154\x64\x20\x63\x61\156\x20\156\x6f\x74\40\142\x65\x20\x65\155\x70\164\171\x2e", PR__MDL__COMPONENT_MANAGER)]])->ieayqiyiuuguowyq(Constants::wyucqaeuuqkesque, Ajax::ugaesemqyyeiqaki); $gaumukogkkgkiiuo->oeoquuwkoywiuesy($gaumukogkkgkiiuo->owygwqwawqoiusis("\x69\156\163\164\x61\x6c\x6c\137\x72\145\161\165\145\x73\164\x5f\x6d\165\154\164\x69\x73\x74\x65\x70", $gaumukogkkgkiiuo->get("\x69\x6e\163\x74\141\x6c\154\x5f\162\145\x71\165\x65\163\x74\x5f\x6d\165\154\164\x69\x73\x74\x65\160\56\x6a\163"))->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); wkwamkgkwykeqkec: parent::enqueue(); } public function oqcaaiewkewqgoww() : array { $asuggasaseaacmqu = parent::oqcaaiewkewqgoww(); return array_merge([self::kucekgcakwigcqiy => ["\x63\154\141\x73\163" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::qyceyememkgewwgc, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\103\x68\x65\x63\x6b\x20\x53\145\x74\x75\x70\40\123\x65\x72\x69\141\154", PR__MDL__COMPONENT_MANAGER), Constants::eqkeooqcsscoggia => __("\125\x73\x65\162\x20\163\150\x6f\165\x6c\144\40\x69\156\163\x65\162\164\40\150\x69\x73\x2f\x68\x65\162\x20\163\145\x74\x75\160\x20\x73\x65\x72\151\x61\154\56", PR__MDL__COMPONENT_MANAGER)], Constants::kekcgssiyagioocg => 10], self::oaiiyoewkkgqawaa => ["\143\154\x61\x73\163" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::imoykkmkkkaqgouo, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\123\x68\157\167\x20\x52\x65\161\165\151\x72\145\x6d\145\x6e\x74\163", PR__MDL__COMPONENT_MANAGER), Constants::eqkeooqcsscoggia => __("\x53\150\x6f\167\40\163\x65\x74\165\x70\40\x72\145\x71\165\x69\x72\x65\155\x65\156\x74\x73\40\164\157\x20\165\x73\145\x72\56", PR__MDL__COMPONENT_MANAGER)], Constants::kekcgssiyagioocg => 20], self::qgmeqwomcqikmcas => ["\x63\x6c\141\x73\163" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::mgkgqisegywmguem, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\123\145\164\165\x70\x20\122\145\161\x75\151\162\x65\144\40\151\156\146\x6f\x72\155\141\x74\151\x6f\x6e", PR__MDL__COMPONENT_MANAGER), Constants::eqkeooqcsscoggia => __("\x55\163\145\x72\x20\163\150\x6f\x75\154\x64\x20\147\151\x76\x65\40\150\x69\163\x2f\150\x65\162\x20\163\x69\x74\x65\x73\x20\162\145\x71\x75\151\x72\x65\155\x65\156\164\x73\56", PR__MDL__COMPONENT_MANAGER)], Constants::kekcgssiyagioocg => 30]], $asuggasaseaacmqu); } }
