<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d97f23fcc2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\ComponentManager\Model\Campaign; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Installation; use Pmpr\Module\ComponentManager\Model\Request; use Pmpr\Module\ComponentManager\PushUpdate\Process; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\DomainManager\Model\Domain; class Ajax extends Container { const kmqyewmocukcqwwi = self::ieicsweaowmycywa . "\143\x68\145\143\153\x5f\163\x65\x74\165\x70\x5f\163\145\x72\151\x61\x6c"; const oemwegyeieayouko = self::ieicsweaowmycywa . "\x73\x75\142\155\x69\164\x5f\151\156\163\x74\141\x6c\154\x61\164\151\x6f\156"; const ugaesemqyyeiqaki = ["\x63\x68\x65\143\x6b\x5f\x73\145\x72\151\141\x6c" => self::kmqyewmocukcqwwi, "\163\x75\x62\155\151\x74\x5f\x69\x6e\163\164\x61\154\x6c\141\x74\151\x6f\x6e" => self::oemwegyeieayouko]; const caoamoywisiyyiou = self::ieicsweaowmycywa . "\147\145\164\137\x6f\162\x64\145\x72\x5f\144\x65\x74\x61\151\154\x73"; const gqokkmcqkaykoiqq = ["\147\x65\x74\x5f\x6f\162\144\145\162\137\x64\x65\x74\x61\x69\154\x73" => self::caoamoywisiyyiou]; const iegmcgiiweuqsaes = self::ieicsweaowmycywa . "\160\165\x73\x68\137\x75\160\x64\141\x74\145"; const cqcueqasssuioasu = self::ieicsweaowmycywa . "\x67\145\156\x65\162\x61\164\x65\137\x73\x65\x72\151\x61\154\x73\137\x70\x64\146"; const gwaqugqawuqamskq = self::ieicsweaowmycywa . "\151\x6e\x73\x74\141\154\154\141\164\151\157\x6e\x5f\x62\x61\164\143\150\x5f\143\x72\145\141\x74\x69\157\x6e"; const mucicoimkyqqioke = ["\x70\165\163\150\137\x75\160\x64\141\x74\145" => self::iegmcgiiweuqsaes, "\147\x65\156\x65\x72\x61\x74\x65\x5f\163\145\162\151\x61\154\163\x5f\x70\x64\x66" => self::cqcueqasssuioasu, "\x69\x6e\163\164\x61\154\154\x61\164\x69\x6f\156\x5f\142\141\x74\143\x68\x5f\143\x72\x65\141\x74\151\x6f\x6e" => self::gwaqugqawuqamskq]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::caoamoywisiyyiou, [$this, "\171\x71\151\x71\153\161\151\x79\141\165\171\x67\165\x6d\x6d\141"])->iqkqummseggmikgo(self::kmqyewmocukcqwwi, [$this, "\141\x6d\165\x63\x67\x73\147\x61\163\141\151\x63\143\143\x77\x75"])->iqkqummseggmikgo(self::oemwegyeieayouko, [$this, "\155\x79\x6f\x6f\x75\161\x71\x75\x6d\x61\x6b\145\x6b\163\x67\167"]); $this->koaegcswmcqsiykq(self::iegmcgiiweuqsaes, [$this, "\x63\x69\157\165\141\143\165\x71\x71\x67\x63\151\x69\161\x71\x79"])->koaegcswmcqsiykq(self::cqcueqasssuioasu, [$this, "\x63\153\143\171\x6d\143\157\x6d\155\x65\141\147\x65\153\x65\x6d"])->koaegcswmcqsiykq(self::gwaqugqawuqamskq, [$this, "\141\x6f\153\x61\151\x6d\157\x79\x79\171\x71\151\167\155\x61\151"]); parent::wigskegsqequoeks(); } public function ciouacuqqgciiqqy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\144\x6f\x6d\x61\151\x6e\55\155\141\156\141\147\145\x72")) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wksoawcgagcgoask = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ocwsuwyiiasigqaa); if ($wksoawcgagcgoask) { if ($wqogggcaamgeiwew = $eiicaiwgqkgsekce->yyqgamuwwakgciey(PushUpdate::waukmygusyyymgmy, [])) { $oysoyeaucuawyaky = $wqogggcaamgeiwew; } else { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $oysoyeaucuawyaky = $swgwkyqkakceqeia->iekyeyicoyyawomk()->ssiyoimagsskwsoi([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg), $eqwoegegiamegqsm->megqywqeuquawkim($swgwkyqkakceqeia::aemeeukyaaokioui, $swgwkyqkakceqeia::wyeieyscswyiskcw)], $swgwkyqkakceqeia->kumuygiiqswoyasy()); } if ($oysoyeaucuawyaky) { if (Process::symcgieuakksimmu()->eamuuiioigiouimg($wksoawcgagcgoask, $oysoyeaucuawyaky)) { $keccaugmemegoimu = __("\125\160\144\141\164\145\x20\x70\x75\163\x68\145\144\x20\163\x75\143\x63\x65\163\163\x66\x75\154\154\x79\56", PR__MDL__COMPONENT_MANAGER); $occymigcemkqucuw = true; } else { $keccaugmemegoimu = __("\101\x6e\157\x74\150\x65\162\x20\160\162\157\143\x65\163\163\40\141\x6c\x72\145\141\144\171\x20\x72\x75\156\x6e\x69\x6e\x67\x2c\40\x70\154\145\x61\x73\145\40\167\x61\x69\x74\40\x61\156\x64\x20\164\x72\x79\x20\141\147\141\151\156\x20\146\x65\x77\40\x6d\151\x6e\165\164\x65\x73\40\154\141\x74\x65\x72\x2e", PR__MDL__COMPONENT_MANAGER); } } else { $keccaugmemegoimu = __("\x4e\x6f\40\144\x6f\x6d\141\151\x6e\40\146\x6f\x75\156\x64\x65\144\56", PR__MDL__COMPONENT_MANAGER); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\103\x6f\x6d\x70\x6f\x6e\x65\156\x74", PR__MDL__COMPONENT_MANAGER)); } } else { $keccaugmemegoimu = __("\104\x6f\155\141\x69\x6e\x20\155\141\x6e\x61\x67\145\x72\40\x63\157\155\x70\157\x6e\x65\x6e\164\x20\151\x73\40\156\x6f\x74\40\162\x75\156\x6e\151\156\147\x2e", PR__MDL__COMPONENT_MANAGER); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function aokaimoyyyqiwmai() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $ikgwqyuyckaewsow = [Constants::oguseymmyyoyaako, Constants::icymuyeowqaciyyu, Installation::iuyuwaomgikisgww, Installation::ogqcgemayqiaucag]; $gaeqamemwmwsyukm = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qiyqwyiiwykeccmo); if (is_numeric($gaeqamemwmwsyukm) && $gaeqamemwmwsyukm > 0) { $icwicymcioeyeyek = []; $keccaugmemegoimu = ''; $ceqmkkuswcieukum = Installation::symcgieuakksimmu(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $eqgoocgaqwqcimie = $eiicaiwgqkgsekce->yyqgamuwwakgciey($aiowsaccomcoikus); if (!$eqgoocgaqwqcimie) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg($ceqmkkuswcieukum->uqeoyqiwywwmsiew($aiowsaccomcoikus)->qcgakseyaikigqco()); break; } $icwicymcioeyeyek[$aiowsaccomcoikus] = $eqgoocgaqwqcimie; } if (!is_wp_error($keccaugmemegoimu)) { $kigowwqauiumummw = 0; for ($ciyackuwsqkoqese = 1; $ciyackuwsqkoqese <= $gaeqamemwmwsyukm; $ciyackuwsqkoqese++) { $icwicymcioeyeyek[$ceqmkkuswcieukum::sukyayoieioyymka] = $ceqmkkuswcieukum->camuqekyeyqkmgwo(); $sogksuscggsicmac = $ceqmkkuswcieukum->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (!is_wp_error($sogksuscggsicmac)) { $kigowwqauiumummw++; } } if ($kigowwqauiumummw > 0) { $keccaugmemegoimu = sprintf(__("\45\x73\x20\151\x6e\163\x74\x61\x6c\154\141\164\x69\157\x6e\40\x67\x65\156\x65\162\x61\x74\145\144\40\163\165\x63\x63\145\163\163\x66\165\x6c\x6c\x79\x2e", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($kigowwqauiumummw)); $occymigcemkqucuw = true; } else { $keccaugmemegoimu = __("\103\x61\156\40\156\157\x74\x20\147\145\156\145\x72\x61\x74\x65\x20\x65\x76\x65\x6e\x20\x6f\156\x65\x20\156\145\x77\x20\x69\x6e\163\x74\x61\x6c\154\141\x74\151\x6f\x6e\x2c\x20\x70\x72\157\142\141\x62\154\171\x20\143\x61\156\40\156\x6f\x74\x20\x67\145\156\145\x72\x61\x74\145\x20\156\145\x77\40\165\x6e\151\161\x20\x73\x65\x72\151\x61\x6c\x2e", PR__MDL__COMPONENT_MANAGER); } } } else { $keccaugmemegoimu = sprintf(__("\x50\154\x65\141\163\x65\x20\145\x6e\x74\x65\x72\x20\x63\157\165\x6e\x74\x20\166\141\x6c\165\x65\x20\141\x6e\144\x20\x69\x74\x27\163\40\155\165\163\x74\x65\x72\x20\x61\40\x6e\x75\x6d\x62\145\162\40\142\151\147\x67\145\162\x20\164\x68\141\x6e\x20\45\x73", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(0)); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function ckcymcommeagekem() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $tsuauommsquiesmk = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::kyyscqqmsikeuaea); $qqscaoyqikuyeoaw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uwceyikaaaqgkkee); if ($tsuauommsquiesmk && $qqscaoyqikuyeoaw) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqgemcmoicmgaqie = [$eqwoegegiamegqsm->megqywqeuquawkim(Installation::qkmqmaeuyokqgemg)->wegeyaguowmkqiac()]; $keccaugmemegoimu = ''; switch ($tsuauommsquiesmk) { case Installation::ogqcgemayqiaucag: $syqougokmmgaoaee = $eiicaiwgqkgsekce->yyqgamuwwakgciey($tsuauommsquiesmk); if (!$syqougokmmgaoaee) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\x43\x6f\x6d\x70\x6f\x6e\145\x6e\164", PR__MDL__COMPONENT_MANAGER)); } $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim($tsuauommsquiesmk, $syqougokmmgaoaee); break; case Installation::iuyuwaomgikisgww: $auqocuuuaeqmowey = $eiicaiwgqkgsekce->yyqgamuwwakgciey($tsuauommsquiesmk); if (!$auqocuuuaeqmowey) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\103\141\x6d\x70\141\x69\x67\156", PR__MDL__COMPONENT_MANAGER)); } $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim($tsuauommsquiesmk, $auqocuuuaeqmowey); break; case Constants::cssmmusomaywaswe: $isuywoqqseygywkq = $eiicaiwgqkgsekce->yyqgamuwwakgciey($tsuauommsquiesmk); if (!$isuywoqqseygywkq) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\122\x61\x6e\x67\145", PR__MDL__COMPONENT_MANAGER)); } break; case Constants::ALL: break; } if (!is_wp_error($keccaugmemegoimu)) { $ceqmkkuswcieukum = Installation::symcgieuakksimmu(); $yayuyagggqqoeaeu = $ceqmkkuswcieukum->iekyeyicoyyawomk()->cieaqygkucwoqwke($gqgemcmoicmgaqie); if ($yayuyagggqqoeaeu) { $qsqwqsymmqeoqwcu = []; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); foreach ($yayuyagggqqoeaeu as $ciyiimyuqkggakcc) { $aumscagymwyyicag = $usmsssmiougymckk->owuaywucuaiyocum($ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, Constants::oguseymmyyoyaako)); $qcokqoamkkyoemcy = $ceqmkkuswcieukum->mwyqswsaeeewsosm($ciyiimyuqkggakcc); $qsqwqsymmqeoqwcu[$qcokqoamkkyoemcy] = ["\146\162\145\145" => __("\x46\162\145\145", PR__MDL__COMPONENT_MANAGER), "\x72\x65\x67\165\x6c\141\x72\137\160\x72\x69\x63\x65" => $cgceoyqmmwumqyqa->aumscagymwyyicag($aumscagymwyyicag, ["\x73\x68\157\x72\164" => false]), Constants::kumuoysauoagaiiy => $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, Constants::icymuyeowqaciyyu), "\x59\x2f\x6d\x2f\144"), Constants::oguseymmyyoyaako => __("\x4f\156\x65\x20\x59\145\x61\162\40\123\151\154\x76\145\x72\40\x53\165\142\163\x63\162\151\160\x74\151\x6f\x6e", PR__MDL__COMPONENT_MANAGER), $ceqmkkuswcieukum::sukyayoieioyymka => $ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, $ceqmkkuswcieukum::sukyayoieioyymka)]; } $oocakskkyoasigic = $qqscaoyqikuyeoaw === "\64\x78\x34" ? 16 : 65; $sgkwemagyggaecwi = $qqscaoyqikuyeoaw === "\64\x78\64" ? 4 : 5; $iiguicmayewwgmsw = $qqscaoyqikuyeoaw === "\64\x78\64" ? [0, 0, 263.5, 425.2] : "\x41\x34"; $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $waoisqguweoociwe = [Constants::icymuyeowqaciyyu, Constants::uomuwqaqggoekwwg, Constants::acymsykymkiewqsy, Constants::eoigaocgcaekssuw]; $qookweymeqawmcwo = ["\x63\x68\x75\156\x6b\x73" => array_chunk(array_chunk($qsqwqsymmqeoqwcu, $sgkwemagyggaecwi), $oocakskkyoasigic)]; foreach ($waoisqguweoociwe as $ymqmyyeuycgmigyo) { $qookweymeqawmcwo[$ymqmyyeuycgmigyo] = $yyauwyaeewsickwk->uiyouwwuscecumsg($gaumukogkkgkiiuo->souwykwwmyygqyqi("\x69\155\147\x2f\163\166\x67\x2f{$ymqmyyeuycgmigyo}\56\x73\x76\x67"), "\x73\x76\147\53\170\155\154"); } $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\160\x64\146\57\151\156\163\164\x61\x6c\154\x61\164\151\157\156\x2f{$qqscaoyqikuyeoaw}", $qookweymeqawmcwo); if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\x64\157\143\165\155\x65\x6e\164", Constants::ycaueuokiswkqaoc)) { $sogksuscggsicmac = pr_utility_document_get_pdf()->wyqcekcuyecikkiq([Constants::aeoikmkskgikaqmk => "\x69\x6e\163\164\x61\154\x6c\141\x74\x69\157\156\137\163\145\162\151\141\x6c\x73", Constants::ssmskyqgcmeiayco => $ewgwqamkygiqaawc, Constants::gcqwukogwcmcuqqg => false, Constants::aisguagukaewucii => Constants::ogigqueukwysusii, Constants::waguuiqqgsysuukq => $iiguicmayewwgmsw]); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis("\x44\157\x63\x75\x6d\x65\x6e\x74\40\125\x74\151\154\151\x74\171\x20\x6e\157\x74\40\x69\156\163\x74\141\x6c\x6c\x65\144\56"); } if (!is_wp_error($sogksuscggsicmac)) { $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\x59\x6f\x75\162\x20\162\145\x71\165\x65\163\x74\x65\144\x20\x70\x64\x66\x20\151\163\x20\x67\145\x6e\x65\x72\141\x74\x65\x64\40\163\x75\143\143\145\x73\x73\x66\x75\x6c\x6c\x79\40\141\156\144\40\171\x6f\x75\40\x63\141\x6e\x20\x73\145\x65\40\151\x74\40\x66\162\x6f\155\40\x25\x73\56", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\x48\x65\x72\x65", PR__MDL__COMPONENT_MANAGER), $sogksuscggsicmac, ["\143\x6c\x61\x73\163" => '', "\164\x61\x72\x67\x65\x74" => "\137\x62\x6c\x61\x6e\x6b"])); } else { $keccaugmemegoimu = $sogksuscggsicmac; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\145\162\x65\x20\x69\x73\40\x6e\157\40\156\x6f\164\x20\141\163\x73\151\147\156\x65\x64\40\x69\x6e\163\x74\x61\x6c\154\x61\164\151\157\156\x20\142\171\40\163\145\154\145\143\x74\x65\144\40\x66\151\x6c\164\145\162\56", PR__MDL__COMPONENT_MANAGER)); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function yqiqkqiyauygumma() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $syqougokmmgaoaee = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ocwsuwyiiasigqaa); $yigswkamgakyoaww = $this->ocksiywmkyaqseou("\x63\157\x6d\x70\157\156\145\x6e\x74\137\155\x61\156\141\x67\x65\x72\137\160\x75\x72\x63\x68\141\163\145\137\x6f\162\144\x65\162\137\x64\x65\164\141\151\x6c\x73", []); $yigswkamgakyoaww = $this->ocksiywmkyaqseou("\x63\x6f\x6d\160\157\156\x65\x6e\x74\x5f\155\141\156\x61\x67\145\x72\137\x70\165\162\x63\150\x61\x73\145\x5f{$syqougokmmgaoaee}\137\157\162\x64\x65\162\x5f\144\145\x74\x61\x69\x6c\163", $yigswkamgakyoaww); $wqykqusigegasqeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::weayyoewessosyko); if (!$wqykqusigegasqeg) { $seiucyauowymwomc = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\157\162\x64\145\x72\x5f\x72\x65\x71\165\x65\x73\164\137\x64\157\155\141\x69\x6e"); switch ($seiucyauowymwomc) { case "\x6e\x65\x77\x5f\144\157\x6d\x61\151\156": $ymqmyyeuycgmigyo = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\x6f\x72\144\145\162\x5f\162\x65\x71\x75\x65\163\164\x5f\x6e\x65\167\137\x64\157\x6d\141\151\x6e\x5f\164\151\x74\154\145"); $eeamcawaiqocomwy = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\157\x72\x64\145\x72\137\x72\x65\161\x75\145\x73\x74\137\156\x65\167\x5f\144\x6f\x6d\x61\151\x6e"); $mokawwccycoiqeka = sprintf("\x25\x73\x20\x28\x25\x73\51", $ymqmyyeuycgmigyo, $eeamcawaiqocomwy); break; case "\160\x72\x65\166\x5f\144\157\155\x61\x69\156\163": $wqykqusigegasqeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\x6f\x72\x64\x65\x72\137\x72\x65\x71\165\145\x73\x74\137\160\x72\145\166\x5f\x64\157\155\141\x69\x6e\163"); break; } } if ($wqykqusigegasqeg) { $mokawwccycoiqeka = Domain::symcgieuakksimmu()->uikgwcuascgeissw($wqykqusigegasqeg); } if (isset($mokawwccycoiqeka) && $mokawwccycoiqeka) { $yigswkamgakyoaww[Constants::weayyoewessosyko] = $mokawwccycoiqeka; } $keccaugmemegoimu = $yigswkamgakyoaww; $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu); } public function amucgsgasaicccwu() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $ceqmkkuswcieukum = Installation::symcgieuakksimmu(); $wuouqecakiimsmec = strtoupper(trim($eiicaiwgqkgsekce->yyqgamuwwakgciey($ceqmkkuswcieukum::sukyayoieioyymka, ''))); $syqougokmmgaoaee = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ocwsuwyiiasigqaa, 0); if (empty($wuouqecakiimsmec)) { $keccaugmemegoimu = __("\124\x68\x65\40\x73\145\x72\x69\x61\x6c\x20\x6e\165\155\142\x65\162\x20\x66\x69\145\x6c\144\x20\143\141\x6e\156\157\164\x20\142\145\40\145\155\x70\x74\x79\56", PR__MDL__COMPONENT_MANAGER); } else { if (strlen($wuouqecakiimsmec) !== 7) { $keccaugmemegoimu = __("\124\x68\x65\40\x73\145\162\x69\141\x6c\40\x6e\x75\x6d\142\x65\162\40\145\156\x74\145\162\145\x64\40\151\163\x20\x6e\157\x74\40\x76\141\x6c\x69\144\56\40\120\154\145\141\163\145\40\145\156\x74\x65\x72\x20\141\x20\x76\141\x6c\x69\144\x20\x73\x65\x72\x69\141\x6c\40\156\x75\155\x62\x65\x72\x2e", PR__MDL__COMPONENT_MANAGER); } else { $iqauecoycmqkimak = $this->ocksiywmkyaqseou("\x63\157\x6d\x70\x6f\156\x65\156\164\x5f\x6d\x61\x6e\141\147\145\x72\x5f\x63\x68\145\143\153\137\x73\145\162\x69\141\154\137\x76\141\154\x69\x64\x61\x74\151\x6f\156", true, $eiicaiwgqkgsekce->yyqgamuwwakgciey()); if (is_wp_error($iqauecoycmqkimak)) { $keccaugmemegoimu = $iqauecoycmqkimak; } else { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->akkkoiiymmamsauc($syqougokmmgaoaee); if ($wksoawcgagcgoask) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ciyiimyuqkggakcc = $ceqmkkuswcieukum->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim($ceqmkkuswcieukum::sukyayoieioyymka, $wuouqecakiimsmec), $eqwoegegiamegqsm->megqywqeuquawkim($ceqmkkuswcieukum::ogqcgemayqiaucag, $syqougokmmgaoaee)]); if ($ciyiimyuqkggakcc) { $yiuogaeewyockeak = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->gwgmymsuwsceguce(); $ceqmkkuswcieukum->gssiscqyqsacmeca()->wqikesawekycweoi($ciyiimyuqkggakcc, [$ceqmkkuswcieukum::esuagmgegkwsocmk => date("\131\x2d\155\x2d\144\40\x48\x3a\x69\72\163", $yiuogaeewyockeak)]); $wekousyuiguacggm = $ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, Constants::icymuyeowqaciyyu); if ($wekousyuiguacggm && !$this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->wguceomqgwouoyks($wekousyuiguacggm)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $aqmwamyiwgeeymqa = $kueeocmceokoouqa->iekyeyicoyyawomk()->iscemaoqqckmkago($kueeocmceokoouqa::ukmumwwqqeeyescc, $ciyiimyuqkggakcc); if (!$aqmwamyiwgeeymqa) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $kueeocmceokoouqa->iekyeyicoyyawomk()->akkkoiiymmamsauc($gcswwqwyaccgyoee->waecsyqmwascmqoa($ciyiimyuqkggakcc, $ceqmkkuswcieukum::qkmqmaeuyokqgemg)); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $product = $usmsssmiougymckk->get($ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, Constants::oguseymmyyoyaako)); $keccaugmemegoimu = ["\x69\156\x73\x74\x61\x6c\154\x61\x74\x69\157\x6e" => $ceqmkkuswcieukum->mwyqswsaeeewsosm($ciyiimyuqkggakcc), Constants::gsqoooskigukokks => $this->iuygowkemiiwqmiw("\x73\x65\x72\x69\x61\x6c\137\x63\x68\x65\x63\153", [Constants::qwumqqyuasyskkkc => ["\x73\145\162\151\141\x6c" => [Constants::qescuiwgsyuikume => __("\123\x65\x74\165\160\x20\x53\145\x72\x69\x61\x6c", PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, $ceqmkkuswcieukum::sukyayoieioyymka)], Constants::icymuyeowqaciyyu => [Constants::qescuiwgsyuikume => __("\126\x61\x6c\x69\x64\151\x74\x79\40\x44\141\164\145", PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, Constants::icymuyeowqaciyyu), sprintf(__("\x54\151\x6d\145\40\x25\x73\40\104\x61\171\40\x25\x73", PR__MDL__COMPONENT_MANAGER), "\x48\x3a\151", "\144\x20\x46\40\131"))], "\163\x69\164\145\x5f\156\141\x6d\145" => [Constants::qescuiwgsyuikume => __("\123\151\x74\x65\40\x4e\x61\x6d\x65", PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $swgwkyqkakceqeia->waecsyqmwascmqoa($mokawwccycoiqeka, Constants::NAME)], "\163\151\164\145\x5f\144\x6f\155\x61\151\156" => [Constants::qescuiwgsyuikume => __("\x53\151\164\x65\40\x44\x6f\x6d\141\151\x6e", PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $swgwkyqkakceqeia->waecsyqmwascmqoa($mokawwccycoiqeka, Constants::ciyoccqkiamemcmm)], "\143\141\x6d\x70\141\151\147\156" => [Constants::qescuiwgsyuikume => __("\103\x61\155\x70\141\151\147\156", PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => Campaign::symcgieuakksimmu()->uikgwcuascgeissw($ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, $ceqmkkuswcieukum::iuyuwaomgikisgww))], Constants::oguseymmyyoyaako => [Constants::qescuiwgsyuikume => __("\120\x72\x6f\144\x75\x63\x74", PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $usmsssmiougymckk->qcgakseyaikigqco($product)], Constants::acymsykymkiewqsy => [Constants::qescuiwgsyuikume => __("\120\162\x69\x63\x65", PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $usmsssmiougymckk->iimgkucsckeosmmk($product)], "\x64\x69\x73\143\x6f\x75\x6e\164" => [Constants::qescuiwgsyuikume => __("\104\x69\x73\x63\157\x75\x6e\164", PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess("\x31\x30\60\45")], "\x79\x6f\165\162\x5f\x70\162\151\x63\145" => [Constants::qescuiwgsyuikume => __("\x50\162\x69\143\145\40\x66\157\x72\40\131\157\x75", PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag(0)]]])]; $occymigcemkqucuw = true; } else { $keccaugmemegoimu = $this->ecgyiauiuuqacuiq(); } } else { $keccaugmemegoimu = __("\123\157\x72\x72\171\40\142\x75\164\x20\x79\157\x75\162\40\151\156\163\164\x61\x6c\x6c\x61\x74\151\x6f\156\40\x69\x73\x20\x65\x78\x70\151\162\x65\x64\56", PR__MDL__COMPONENT_MANAGER); } } else { $keccaugmemegoimu = sprintf(__("\x59\x6f\x75\x72\40\145\x6e\x74\145\x72\145\144\40\143\157\144\x65\40\x69\x73\x20\156\x6f\x74\x20\166\141\x6c\151\144\40\146\157\162\40\45\x73", PR__MDL__COMPONENT_MANAGER), $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask)); } } else { $keccaugmemegoimu = __("\x43\x61\x6e\40\x6e\x6f\x74\x20\146\x6f\x75\156\x64\x20\143\157\x6d\x70\x6f\x6e\145\x6e\164\54\x20\x70\x6c\145\141\163\x65\40\x72\x65\x66\162\145\163\x68\40\160\141\x67\x65\40\141\156\x64\x20\164\162\171\x20\x61\147\x61\x69\156\56", PR__MDL__COMPONENT_MANAGER); } } } } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function myoouqqumakeksgw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if (!$eiicaiwgqkgsekce->yyqgamuwwakgciey("\143\157\156\x66\x69\x72\155\141\164\x69\157\x6e")) { $keccaugmemegoimu = __("\x50\154\x65\x61\x73\x65\40\x61\143\x63\x65\160\164\x20\162\145\x71\165\x69\162\x65\x6d\x65\x6e\x74\x73\x20\x63\x6f\x6e\x66\151\162\x6d\x61\164\151\x6f\x6e\40\x66\x69\162\x73\164\56", PR__MDL__COMPONENT_MANAGER); } else { if (!$eiicaiwgqkgsekce->yyqgamuwwakgciey("\141\143\143\145\x70\164\137\164\x65\162\x6d\x73\x5f\x6f\x66\x5f\x75\163\x65")) { $keccaugmemegoimu = __("\x50\x6c\x65\141\x73\145\40\x61\143\143\x65\x70\x74\40\164\x65\162\155\x73\40\157\x66\x20\x75\163\x65\x20\146\151\x72\163\164\x2e", PR__MDL__COMPONENT_MANAGER); } else { $keccaugmemegoimu = ''; $kueeocmceokoouqa = Request::symcgieuakksimmu(); $ceqmkkuswcieukum = Installation::symcgieuakksimmu(); $wuouqecakiimsmec = strtoupper($eiicaiwgqkgsekce->yyqgamuwwakgciey($ceqmkkuswcieukum::sukyayoieioyymka, '')); $syqougokmmgaoaee = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ocwsuwyiiasigqaa, ''); $qcokqoamkkyoemcy = $eiicaiwgqkgsekce->yyqgamuwwakgciey($kueeocmceokoouqa::ukmumwwqqeeyescc, false); if ($wuouqecakiimsmec && $qcokqoamkkyoemcy) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ciyiimyuqkggakcc = $ceqmkkuswcieukum->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim($ceqmkkuswcieukum::sukyayoieioyymka, $wuouqecakiimsmec), $eqwoegegiamegqsm->megqywqeuquawkim($ceqmkkuswcieukum::ogqcgemayqiaucag, $syqougokmmgaoaee), $eqwoegegiamegqsm->megqywqeuquawkim($ceqmkkuswcieukum->kumuygiiqswoyasy(), $qcokqoamkkyoemcy)]); if ($ciyiimyuqkggakcc) { $aqmwamyiwgeeymqa = $kueeocmceokoouqa->iekyeyicoyyawomk()->iscemaoqqckmkago($kueeocmceokoouqa::ukmumwwqqeeyescc, $ciyiimyuqkggakcc); if (!$aqmwamyiwgeeymqa) { $uuacqomwuwquwkoo = [Constants::akywgoyaseymiyka, Constants::csiaccacwgeeqwwo, $kueeocmceokoouqa::ayeakwcweywoyqyc, $kueeocmceokoouqa::yayssowawieuycme, $kueeocmceokoouqa::sauuqekecqkcamwg, $kueeocmceokoouqa::scawmcmqeimiwoqw, $kueeocmceokoouqa::moyywwqyaokwoagk, $kueeocmceokoouqa::samkssymmeowamew]; $icwicymcioeyeyek = [Constants::eqkeooqcsscoggia => $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::eqkeooqcsscoggia, '', true), $kueeocmceokoouqa::ukmumwwqqeeyescc => $qcokqoamkkyoemcy]; foreach ($uuacqomwuwquwkoo as $euwkouuykmaieusi) { $eqgoocgaqwqcimie = $eiicaiwgqkgsekce->yyqgamuwwakgciey($euwkouuykmaieusi, '', true); $aiowsaccomcoikus = ''; if ($aaqqkgyougeiueyq = $kueeocmceokoouqa->uqeoyqiwywwmsiew($euwkouuykmaieusi)) { $aiowsaccomcoikus = $aaqqkgyougeiueyq->qcgakseyaikigqco(); } if (empty($eqgoocgaqwqcimie)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg($aiowsaccomcoikus); } else { switch ($euwkouuykmaieusi) { case $kueeocmceokoouqa::samkssymmeowamew: if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->qawecuimqqcqwgsw($eqgoocgaqwqcimie)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\45\x73\40\x6e\x6f\164\40\x61\40\x76\141\x6c\151\x64\40\x6d\x6f\x62\151\154\145\40\156\165\x6d\x62\x65\162", PR__MDL__COMPONENT_MANAGER), $aiowsaccomcoikus)); } break; } } if (is_wp_error($keccaugmemegoimu)) { break; } $icwicymcioeyeyek[$euwkouuykmaieusi] = $eqgoocgaqwqcimie; } if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $kueeocmceokoouqa->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (!is_wp_error($keccaugmemegoimu)) { $occymigcemkqucuw = true; $keccaugmemegoimu = __("\123\x75\142\155\151\164\164\x65\x64\x20\163\x75\x63\143\x65\163\x73\146\x75\x6c\154\x79\56", PR__MDL__COMPONENT_MANAGER); } } } else { $keccaugmemegoimu = $this->ecgyiauiuuqacuiq(); } } else { $keccaugmemegoimu = __("\x59\157\165\162\40\x65\x6e\164\145\162\145\x64\x20\163\x65\164\x75\160\40\163\x65\x72\x69\x61\154\40\x69\x73\x20\x6e\157\164\40\166\141\x6c\151\144\56", PR__MDL__COMPONENT_MANAGER); } } else { $keccaugmemegoimu = __("\131\157\165\162\x20\162\x65\x71\x75\145\x73\x74\40\151\x73\40\156\x6f\164\x20\x76\x61\x6c\x69\x64\x2c\40\x70\x6c\x65\x61\163\145\x20\x72\145\146\x72\145\x73\150\x20\160\141\147\145\x20\141\x6e\144\40\x74\162\171\x20\141\147\x61\151\156\x2e", PR__MDL__COMPONENT_MANAGER); } } } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function ecgyiauiuuqacuiq() : string { return sprintf("\45\x73\x3c\142\x72\76\45\x73", __("\x50\162\145\x76\x69\x6f\x75\163\x6c\171\54\x20\x61\x20\x72\x65\161\165\145\x73\x74\40\x74\x6f\x20\x69\156\x73\x74\141\x6c\154\x20\164\x68\x65\40\x73\160\145\x65\144\55\x75\x70\x20\155\x6f\x64\x75\154\x65\40\x68\x61\163\40\142\145\x65\x6e\x20\x72\x65\x67\151\163\x74\145\162\x65\144\40\x77\151\164\150\40\x74\150\145\40\163\x61\155\x65\40\x63\157\144\145\x2e", PR__MDL__COMPONENT_MANAGER), Setting::symcgieuakksimmu()->iwgmiyoaskssmosa()); } }
