<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801061adff77             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\ComponentManager\Model\Campaign; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Installation; use Pmpr\Module\ComponentManager\Model\Request; use Pmpr\Module\ComponentManager\PushUpdate\Process; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\DomainManager\Model\Domain; class Ajax extends Container { const kmqyewmocukcqwwi = self::ieicsweaowmycywa . 'check_setup_serial'; const oemwegyeieayouko = self::ieicsweaowmycywa . 'submit_installation'; const ugaesemqyyeiqaki = ['check_serial' => self::kmqyewmocukcqwwi, 'submit_installation' => self::oemwegyeieayouko]; const caoamoywisiyyiou = self::ieicsweaowmycywa . 'get_order_details'; const gqokkmcqkaykoiqq = ['get_order_details' => self::caoamoywisiyyiou]; const iegmcgiiweuqsaes = self::ieicsweaowmycywa . 'push_update'; const cqcueqasssuioasu = self::ieicsweaowmycywa . 'generate_serials_pdf'; const gwaqugqawuqamskq = self::ieicsweaowmycywa . 'installation_batch_creation'; const mucicoimkyqqioke = ['push_update' => self::iegmcgiiweuqsaes, 'generate_serials_pdf' => self::cqcueqasssuioasu, 'installation_batch_creation' => self::gwaqugqawuqamskq]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::caoamoywisiyyiou, [$this, 'yqiqkqiyauygumma'])->iqkqummseggmikgo(self::kmqyewmocukcqwwi, [$this, 'amucgsgasaicccwu'])->iqkqummseggmikgo(self::oemwegyeieayouko, [$this, 'myoouqqumakeksgw']); $this->koaegcswmcqsiykq(self::iegmcgiiweuqsaes, [$this, 'ciouacuqqgciiqqy'])->koaegcswmcqsiykq(self::cqcueqasssuioasu, [$this, 'ckcymcommeagekem'])->koaegcswmcqsiykq(self::gwaqugqawuqamskq, [$this, 'aokaimoyyyqiwmai']); parent::wigskegsqequoeks(); } public function ciouacuqqgciiqqy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk('domain-manager')) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wksoawcgagcgoask = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ocwsuwyiiasigqaa); if ($wksoawcgagcgoask) { if ($wqogggcaamgeiwew = $eiicaiwgqkgsekce->yyqgamuwwakgciey(PushUpdate::waukmygusyyymgmy, [])) { $oysoyeaucuawyaky = $wqogggcaamgeiwew; } else { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $oysoyeaucuawyaky = $swgwkyqkakceqeia->iekyeyicoyyawomk()->ssiyoimagsskwsoi([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg), $eqwoegegiamegqsm->megqywqeuquawkim($swgwkyqkakceqeia::aemeeukyaaokioui, $swgwkyqkakceqeia::wyeieyscswyiskcw)], $swgwkyqkakceqeia->kumuygiiqswoyasy()); } if ($oysoyeaucuawyaky) { if (Process::symcgieuakksimmu()->eamuuiioigiouimg($wksoawcgagcgoask, $oysoyeaucuawyaky)) { $keccaugmemegoimu = __('Update pushed successfully.', PR__MDL__COMPONENT_MANAGER); $occymigcemkqucuw = true; } else { $keccaugmemegoimu = __('Another process already running, please wait and try again few minutes later.', PR__MDL__COMPONENT_MANAGER); } } else { $keccaugmemegoimu = __('No domain founded.', PR__MDL__COMPONENT_MANAGER); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__('Component', PR__MDL__COMPONENT_MANAGER)); } } else { $keccaugmemegoimu = __('Domain manager component is not running.', PR__MDL__COMPONENT_MANAGER); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function aokaimoyyyqiwmai() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $ikgwqyuyckaewsow = [Constants::oguseymmyyoyaako, Constants::icymuyeowqaciyyu, Installation::iuyuwaomgikisgww, Installation::ogqcgemayqiaucag]; $gaeqamemwmwsyukm = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qiyqwyiiwykeccmo); if (is_numeric($gaeqamemwmwsyukm) && $gaeqamemwmwsyukm > 0) { $icwicymcioeyeyek = []; $keccaugmemegoimu = ''; $ceqmkkuswcieukum = Installation::symcgieuakksimmu(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $eqgoocgaqwqcimie = $eiicaiwgqkgsekce->yyqgamuwwakgciey($aiowsaccomcoikus); if (!$eqgoocgaqwqcimie) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg($ceqmkkuswcieukum->uqeoyqiwywwmsiew($aiowsaccomcoikus)->qcgakseyaikigqco()); break; } $icwicymcioeyeyek[$aiowsaccomcoikus] = $eqgoocgaqwqcimie; } if (!is_wp_error($keccaugmemegoimu)) { $kigowwqauiumummw = 0; for ($ciyackuwsqkoqese = 1; $ciyackuwsqkoqese <= $gaeqamemwmwsyukm; $ciyackuwsqkoqese++) { $icwicymcioeyeyek[$ceqmkkuswcieukum::sukyayoieioyymka] = $ceqmkkuswcieukum->camuqekyeyqkmgwo(); $sogksuscggsicmac = $ceqmkkuswcieukum->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (!is_wp_error($sogksuscggsicmac)) { $kigowwqauiumummw++; } } if ($kigowwqauiumummw > 0) { $keccaugmemegoimu = sprintf(__('%s installation generated successfully.', PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($kigowwqauiumummw)); $occymigcemkqucuw = true; } else { $keccaugmemegoimu = __('Can not generate even one new installation, probably can not generate new uniq serial.', PR__MDL__COMPONENT_MANAGER); } } } else { $keccaugmemegoimu = sprintf(__('Please enter count value and it\'s muster a number bigger than %s', PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(0)); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function ckcymcommeagekem() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $tsuauommsquiesmk = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::kyyscqqmsikeuaea); $qqscaoyqikuyeoaw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uwceyikaaaqgkkee); if ($tsuauommsquiesmk && $qqscaoyqikuyeoaw) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqgemcmoicmgaqie = [$eqwoegegiamegqsm->megqywqeuquawkim(Installation::qkmqmaeuyokqgemg)->wegeyaguowmkqiac()]; $keccaugmemegoimu = ''; switch ($tsuauommsquiesmk) { case Installation::ogqcgemayqiaucag: $syqougokmmgaoaee = $eiicaiwgqkgsekce->yyqgamuwwakgciey($tsuauommsquiesmk); if (!$syqougokmmgaoaee) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__('Component', PR__MDL__COMPONENT_MANAGER)); } $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim($tsuauommsquiesmk, $syqougokmmgaoaee); break; case Installation::iuyuwaomgikisgww: $auqocuuuaeqmowey = $eiicaiwgqkgsekce->yyqgamuwwakgciey($tsuauommsquiesmk); if (!$auqocuuuaeqmowey) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__('Campaign', PR__MDL__COMPONENT_MANAGER)); } $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->megqywqeuquawkim($tsuauommsquiesmk, $auqocuuuaeqmowey); break; case Constants::cssmmusomaywaswe: $isuywoqqseygywkq = $eiicaiwgqkgsekce->yyqgamuwwakgciey($tsuauommsquiesmk); if (!$isuywoqqseygywkq) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__('Range', PR__MDL__COMPONENT_MANAGER)); } break; case Constants::ALL: break; } if (!is_wp_error($keccaugmemegoimu)) { $ceqmkkuswcieukum = Installation::symcgieuakksimmu(); $yayuyagggqqoeaeu = $ceqmkkuswcieukum->iekyeyicoyyawomk()->cieaqygkucwoqwke($gqgemcmoicmgaqie); if ($yayuyagggqqoeaeu) { $qsqwqsymmqeoqwcu = []; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); foreach ($yayuyagggqqoeaeu as $ciyiimyuqkggakcc) { $aumscagymwyyicag = $usmsssmiougymckk->owuaywucuaiyocum($ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, Constants::oguseymmyyoyaako)); $qcokqoamkkyoemcy = $ceqmkkuswcieukum->mwyqswsaeeewsosm($ciyiimyuqkggakcc); $qsqwqsymmqeoqwcu[$qcokqoamkkyoemcy] = ['free' => __('Free', PR__MDL__COMPONENT_MANAGER), 'regular_price' => $cgceoyqmmwumqyqa->aumscagymwyyicag($aumscagymwyyicag, ['short' => false]), Constants::kumuoysauoagaiiy => $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, Constants::icymuyeowqaciyyu), 'Y/m/d'), Constants::oguseymmyyoyaako => __('One Year Silver Subscription', PR__MDL__COMPONENT_MANAGER), $ceqmkkuswcieukum::sukyayoieioyymka => $ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, $ceqmkkuswcieukum::sukyayoieioyymka)]; } $oocakskkyoasigic = $qqscaoyqikuyeoaw === '4x4' ? 16 : 65; $sgkwemagyggaecwi = $qqscaoyqikuyeoaw === '4x4' ? 4 : 5; $iiguicmayewwgmsw = $qqscaoyqikuyeoaw === '4x4' ? [0, 0, 263.5, 425.2] : 'A4'; $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $waoisqguweoociwe = [Constants::icymuyeowqaciyyu, Constants::uomuwqaqggoekwwg, Constants::acymsykymkiewqsy, Constants::eoigaocgcaekssuw]; $qookweymeqawmcwo = ['chunks' => array_chunk(array_chunk($qsqwqsymmqeoqwcu, $sgkwemagyggaecwi), $oocakskkyoasigic)]; foreach ($waoisqguweoociwe as $ymqmyyeuycgmigyo) { $qookweymeqawmcwo[$ymqmyyeuycgmigyo] = $yyauwyaeewsickwk->uiyouwwuscecumsg($meakksicouekcgoe->souwykwwmyygqyqi($this, "img/svg/{$ymqmyyeuycgmigyo}.svg"), 'svg+xml'); } $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("pdf/installation/{$qqscaoyqikuyeoaw}", $qookweymeqawmcwo); if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk('document', Constants::ycaueuokiswkqaoc)) { $sogksuscggsicmac = pr_utility_document_get_pdf()->wyqcekcuyecikkiq([Constants::aeoikmkskgikaqmk => 'installation_serials', Constants::ssmskyqgcmeiayco => $ewgwqamkygiqaawc, Constants::gcqwukogwcmcuqqg => false, Constants::aisguagukaewucii => Constants::ogigqueukwysusii, Constants::waguuiqqgsysuukq => $iiguicmayewwgmsw]); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis('Document Utility not installed.'); } if (!is_wp_error($sogksuscggsicmac)) { $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__('Your requested pdf is generated successfully and you can see it from %s.', PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__('Here', PR__MDL__COMPONENT_MANAGER), $sogksuscggsicmac, ['class' => '', 'target' => '_blank'])); } else { $keccaugmemegoimu = $sogksuscggsicmac; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('There is no not assigned installation by selected filter.', PR__MDL__COMPONENT_MANAGER)); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function yqiqkqiyauygumma() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $syqougokmmgaoaee = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ocwsuwyiiasigqaa); $yigswkamgakyoaww = $this->ocksiywmkyaqseou('component_manager_purchase_order_details', []); $yigswkamgakyoaww = $this->ocksiywmkyaqseou("component_manager_purchase_{$syqougokmmgaoaee}_order_details", $yigswkamgakyoaww); $wqykqusigegasqeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::weayyoewessosyko); if (!$wqykqusigegasqeg) { $seiucyauowymwomc = $eiicaiwgqkgsekce->yyqgamuwwakgciey('order_request_domain'); switch ($seiucyauowymwomc) { case 'new_domain': $ymqmyyeuycgmigyo = $eiicaiwgqkgsekce->yyqgamuwwakgciey('order_request_new_domain_title'); $eeamcawaiqocomwy = $eiicaiwgqkgsekce->yyqgamuwwakgciey('order_request_new_domain'); $mokawwccycoiqeka = sprintf('%s (%s)', $ymqmyyeuycgmigyo, $eeamcawaiqocomwy); break; case 'prev_domains': $wqykqusigegasqeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey('order_request_prev_domains'); break; } } if ($wqykqusigegasqeg) { $mokawwccycoiqeka = Domain::symcgieuakksimmu()->uikgwcuascgeissw($wqykqusigegasqeg); } if (isset($mokawwccycoiqeka) && $mokawwccycoiqeka) { $yigswkamgakyoaww[Constants::weayyoewessosyko] = $mokawwccycoiqeka; } $keccaugmemegoimu = $yigswkamgakyoaww; $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu); } public function amucgsgasaicccwu() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $ceqmkkuswcieukum = Installation::symcgieuakksimmu(); $wuouqecakiimsmec = strtoupper(trim($eiicaiwgqkgsekce->yyqgamuwwakgciey($ceqmkkuswcieukum::sukyayoieioyymka, ''))); $syqougokmmgaoaee = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ocwsuwyiiasigqaa, 0); if (empty($wuouqecakiimsmec)) { $keccaugmemegoimu = __('The serial number field cannot be empty.', PR__MDL__COMPONENT_MANAGER); } else { if (strlen($wuouqecakiimsmec) !== 7) { $keccaugmemegoimu = __('The serial number entered is not valid. Please enter a valid serial number.', PR__MDL__COMPONENT_MANAGER); } else { $iqauecoycmqkimak = $this->ocksiywmkyaqseou('component_manager_check_serial_validation', true, $eiicaiwgqkgsekce->yyqgamuwwakgciey()); if (is_wp_error($iqauecoycmqkimak)) { $keccaugmemegoimu = $iqauecoycmqkimak; } else { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->akkkoiiymmamsauc($syqougokmmgaoaee); if ($wksoawcgagcgoask) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ciyiimyuqkggakcc = $ceqmkkuswcieukum->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim($ceqmkkuswcieukum::sukyayoieioyymka, $wuouqecakiimsmec), $eqwoegegiamegqsm->megqywqeuquawkim($ceqmkkuswcieukum::ogqcgemayqiaucag, $syqougokmmgaoaee)]); if ($ciyiimyuqkggakcc) { $yiuogaeewyockeak = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->gwgmymsuwsceguce(); $ceqmkkuswcieukum->gssiscqyqsacmeca()->wqikesawekycweoi($ciyiimyuqkggakcc, [$ceqmkkuswcieukum::esuagmgegkwsocmk => date('Y-m-d H:i:s', $yiuogaeewyockeak)]); $wekousyuiguacggm = $ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, Constants::icymuyeowqaciyyu); if ($wekousyuiguacggm && !$this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->wguceomqgwouoyks($wekousyuiguacggm)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $aqmwamyiwgeeymqa = $kueeocmceokoouqa->iekyeyicoyyawomk()->iscemaoqqckmkago($kueeocmceokoouqa::ukmumwwqqeeyescc, $ciyiimyuqkggakcc); if (!$aqmwamyiwgeeymqa) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $kueeocmceokoouqa->iekyeyicoyyawomk()->akkkoiiymmamsauc($gcswwqwyaccgyoee->waecsyqmwascmqoa($ciyiimyuqkggakcc, $ceqmkkuswcieukum::qkmqmaeuyokqgemg)); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $product = $usmsssmiougymckk->get($ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, Constants::oguseymmyyoyaako)); $keccaugmemegoimu = ['installation' => $ceqmkkuswcieukum->mwyqswsaeeewsosm($ciyiimyuqkggakcc), Constants::gsqoooskigukokks => $this->iuygowkemiiwqmiw('serial_check', [Constants::qwumqqyuasyskkkc => ['serial' => [Constants::qescuiwgsyuikume => __('Setup Serial', PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, $ceqmkkuswcieukum::sukyayoieioyymka)], Constants::icymuyeowqaciyyu => [Constants::qescuiwgsyuikume => __('Validity Date', PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, Constants::icymuyeowqaciyyu), sprintf(__('Time %s Day %s', PR__MDL__COMPONENT_MANAGER), 'H:i', 'd F Y'))], 'site_name' => [Constants::qescuiwgsyuikume => __('Site Name', PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $swgwkyqkakceqeia->waecsyqmwascmqoa($mokawwccycoiqeka, Constants::NAME)], 'site_domain' => [Constants::qescuiwgsyuikume => __('Site Domain', PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $swgwkyqkakceqeia->waecsyqmwascmqoa($mokawwccycoiqeka, Constants::ciyoccqkiamemcmm)], 'campaign' => [Constants::qescuiwgsyuikume => __('Campaign', PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => Campaign::symcgieuakksimmu()->uikgwcuascgeissw($ceqmkkuswcieukum->waecsyqmwascmqoa($ciyiimyuqkggakcc, $ceqmkkuswcieukum::iuyuwaomgikisgww))], Constants::oguseymmyyoyaako => [Constants::qescuiwgsyuikume => __('Product', PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $usmsssmiougymckk->qcgakseyaikigqco($product)], Constants::acymsykymkiewqsy => [Constants::qescuiwgsyuikume => __('Price', PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $usmsssmiougymckk->iimgkucsckeosmmk($product)], 'discount' => [Constants::qescuiwgsyuikume => __('Discount', PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess('100%')], 'your_price' => [Constants::qescuiwgsyuikume => __('Price for You', PR__MDL__COMPONENT_MANAGER), Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag(0)]]])]; $occymigcemkqucuw = true; } else { $keccaugmemegoimu = $this->ecgyiauiuuqacuiq(); } } else { $keccaugmemegoimu = __('Sorry but your installation is expired.', PR__MDL__COMPONENT_MANAGER); } } else { $keccaugmemegoimu = sprintf(__('Your entered code is not valid for %s', PR__MDL__COMPONENT_MANAGER), $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask)); } } else { $keccaugmemegoimu = __('Can not found component, please refresh page and try again.', PR__MDL__COMPONENT_MANAGER); } } } } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function myoouqqumakeksgw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if (!$eiicaiwgqkgsekce->yyqgamuwwakgciey('confirmation')) { $keccaugmemegoimu = __('Please accept requirements confirmation first.', PR__MDL__COMPONENT_MANAGER); } else { if (!$eiicaiwgqkgsekce->yyqgamuwwakgciey('accept_terms_of_use')) { $keccaugmemegoimu = __('Please accept terms of use first.', PR__MDL__COMPONENT_MANAGER); } else { $keccaugmemegoimu = ''; $kueeocmceokoouqa = Request::symcgieuakksimmu(); $ceqmkkuswcieukum = Installation::symcgieuakksimmu(); $wuouqecakiimsmec = strtoupper($eiicaiwgqkgsekce->yyqgamuwwakgciey($ceqmkkuswcieukum::sukyayoieioyymka, '')); $syqougokmmgaoaee = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ocwsuwyiiasigqaa, ''); $qcokqoamkkyoemcy = $eiicaiwgqkgsekce->yyqgamuwwakgciey($kueeocmceokoouqa::ukmumwwqqeeyescc, false); if ($wuouqecakiimsmec && $qcokqoamkkyoemcy) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ciyiimyuqkggakcc = $ceqmkkuswcieukum->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim($ceqmkkuswcieukum::sukyayoieioyymka, $wuouqecakiimsmec), $eqwoegegiamegqsm->megqywqeuquawkim($ceqmkkuswcieukum::ogqcgemayqiaucag, $syqougokmmgaoaee), $eqwoegegiamegqsm->megqywqeuquawkim($ceqmkkuswcieukum->kumuygiiqswoyasy(), $qcokqoamkkyoemcy)]); if ($ciyiimyuqkggakcc) { $aqmwamyiwgeeymqa = $kueeocmceokoouqa->iekyeyicoyyawomk()->iscemaoqqckmkago($kueeocmceokoouqa::ukmumwwqqeeyescc, $ciyiimyuqkggakcc); if (!$aqmwamyiwgeeymqa) { $uuacqomwuwquwkoo = [Constants::akywgoyaseymiyka, Constants::csiaccacwgeeqwwo, $kueeocmceokoouqa::ayeakwcweywoyqyc, $kueeocmceokoouqa::yayssowawieuycme, $kueeocmceokoouqa::sauuqekecqkcamwg, $kueeocmceokoouqa::scawmcmqeimiwoqw, $kueeocmceokoouqa::moyywwqyaokwoagk, $kueeocmceokoouqa::samkssymmeowamew]; $icwicymcioeyeyek = [Constants::eqkeooqcsscoggia => $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::eqkeooqcsscoggia, '', true), $kueeocmceokoouqa::ukmumwwqqeeyescc => $qcokqoamkkyoemcy]; foreach ($uuacqomwuwquwkoo as $euwkouuykmaieusi) { $eqgoocgaqwqcimie = $eiicaiwgqkgsekce->yyqgamuwwakgciey($euwkouuykmaieusi, '', true); $aiowsaccomcoikus = ''; if ($aaqqkgyougeiueyq = $kueeocmceokoouqa->uqeoyqiwywwmsiew($euwkouuykmaieusi)) { $aiowsaccomcoikus = $aaqqkgyougeiueyq->qcgakseyaikigqco(); } if (empty($eqgoocgaqwqcimie)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg($aiowsaccomcoikus); } else { switch ($euwkouuykmaieusi) { case $kueeocmceokoouqa::samkssymmeowamew: if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->qawecuimqqcqwgsw($eqgoocgaqwqcimie)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__('%s not a valid mobile number', PR__MDL__COMPONENT_MANAGER), $aiowsaccomcoikus)); } break; } } if (is_wp_error($keccaugmemegoimu)) { break; } $icwicymcioeyeyek[$euwkouuykmaieusi] = $eqgoocgaqwqcimie; } if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $kueeocmceokoouqa->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (!is_wp_error($keccaugmemegoimu)) { $occymigcemkqucuw = true; $keccaugmemegoimu = __('Submitted successfully.', PR__MDL__COMPONENT_MANAGER); } } } else { $keccaugmemegoimu = $this->ecgyiauiuuqacuiq(); } } else { $keccaugmemegoimu = __('Your entered setup serial is not valid.', PR__MDL__COMPONENT_MANAGER); } } else { $keccaugmemegoimu = __('Your request is not valid, please refresh page and try again.', PR__MDL__COMPONENT_MANAGER); } } } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function ecgyiauiuuqacuiq() : string { return sprintf('%s<br>%s', __('Previously, a request to install the speed-up module has been registered with the same code.', PR__MDL__COMPONENT_MANAGER), Setting::symcgieuakksimmu()->iwgmiyoaskssmosa()); } }
