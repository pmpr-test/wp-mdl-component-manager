<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d00126a7de             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Model\Report; use Pmpr\Module\ComponentManager\Setting; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = Constants::ocwsuwyiiasigqaa; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\x65\164\55\x6b\x65\171", [Constants::okeuagwgwkmiokac => [Constants::ocwsuwyiiasigqaa => [Constants::squoamkioomemiyi => "\163\164\x72\x69\156\147", Constants::eqkeooqcsscoggia => __("\103\157\x6d\160\157\156\x65\x6e\x74", PR__MDL__COMPONENT_MANAGER)]], Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x73\147\x63\x77\147\155\x6f\141\x79\151\x6b\x6b\171\x73\x61\x71"]]); $this->register("\x2f\147\145\164\x2d\160\154\x75\x67\x69\156\55\x74\x61\x62", [Constants::wwgusigoaksqmwsm => [$this, "\141\155\145\x69\167\157\145\x6d\x75\153\155\x6b\x77\165\x6f\151"]]); $this->register("\57\x67\145\x74\x2d\151\x74\x65\155", [Constants::okeuagwgwkmiokac => [Constants::NAME => [Constants::squoamkioomemiyi => "\x73\164\x72\151\x6e\x67", Constants::eqkeooqcsscoggia => __("\x4e\x61\155\145\x20\x6f\x66\40\x63\x6f\x6d\160\x6f\x6e\145\156\164", PR__MDL__COMPONENT_MANAGER)]], Constants::wwgusigoaksqmwsm => [$this, "\x73\x71\157\x69\x75\171\x6b\143\157\x75\145\x69\165\143\x67\143"]]); $this->register("\x2f\147\x65\x74\55\151\164\145\x6d\x73", [Constants::okeuagwgwkmiokac => [Constants::squoamkioomemiyi => [Constants::squoamkioomemiyi => "\x73\x74\x72\151\156\147", Constants::eqkeooqcsscoggia => __("\x54\x79\160\x65\40\x6f\146\40\x63\x6f\155\x70\x6f\156\x65\156\164", PR__MDL__COMPONENT_MANAGER)], Constants::imywcsggckkcywgk => [Constants::squoamkioomemiyi => "\x69\x6e\164\x65\x67\x65\162"], Constants::yayciqueeakqwese => [Constants::squoamkioomemiyi => "\163\164\162\x69\156\x67"], Constants::soesaeyoucgacqga => [Constants::squoamkioomemiyi => "\142\x6f\x6f\154\x65\x61\x6e"], Constants::ausqeuugegoygouq => [Constants::squoamkioomemiyi => "\x69\156\164\145\147\x65\162"]], Constants::wwgusigoaksqmwsm => [$this, "\x77\x61\163\147\x77\163\157\x67\155\x75\x71\165\161\x65\x61\x61"]]); $this->register("\x2f\x63\150\x65\x63\153\x2d\153\145\x79", [Constants::okeuagwgwkmiokac => [Constants::ascagqcquwgmygkm => [Constants::squoamkioomemiyi => "\163\x74\x72\151\x6e\x67", Constants::eqkeooqcsscoggia => __("\114\151\x63\145\x6e\163\x65\40\157\146\40\143\x6f\155\160\157\156\145\156\164", PR__MDL__COMPONENT_MANAGER)], Constants::ocwsuwyiiasigqaa => [Constants::squoamkioomemiyi => "\163\x74\x72\151\156\x67", Constants::eqkeooqcsscoggia => __("\x4e\x61\155\x65\x20\157\x66\x20\143\157\x6d\160\157\x6e\145\156\164", PR__MDL__COMPONENT_MANAGER)], Constants::vsykweaucigiekae => [Constants::squoamkioomemiyi => "\x62\157\157\154\145\141\x6e", Constants::eqkeooqcsscoggia => __("\122\145\161\x75\x65\163\164\40\163\x65\156\x64\x20\x61\x75\164\x6f\155\141\x74\151\x63\x61\x6c\154\171\x20\x62\171\40\x63\162\x6f\x6e\x20\x6f\162\x20\156\157\164", PR__MDL__COMPONENT_MANAGER)]], Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\157\x6b\x69\143\141\141\165\147\x71\x6b\x6d\x79\x77\x71\x79\x6d"]]); } public function sgcwgmoayikkysaq(WP_REST_Request $aqmwamyiwgeeymqa) { if ($wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ocwsuwyiiasigqaa)) { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($wksoawcgagcgoask = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->akkkoiiymmamsauc($wksoawcgagcgoask, is_numeric($wksoawcgagcgoask) ? $gcswwqwyaccgyoee->kumuygiiqswoyasy() : Constants::NAME)) { if ($keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc)) { $syqougokmmgaoaee = $gcswwqwyaccgyoee->mwyqswsaeeewsosm($wksoawcgagcgoask); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim($yakcyegsoqusmiak::ogqcgemayqiaucag, $syqougokmmgaoaee), $eqwoegegiamegqsm->megqywqeuquawkim($yakcyegsoqusmiak::qkmqmaeuyokqgemg, $keccaugmemegoimu)]); $wqykqusigegasqeg = $keccaugmemegoimu; if (!$gmywaegkmeaueiyo) { $keccaugmemegoimu = $yakcyegsoqusmiak->gssiscqyqsacmeca()->gsegsiocqmsoayii([$yakcyegsoqusmiak::qkmqmaeuyokqgemg => $wqykqusigegasqeg, $yakcyegsoqusmiak::ogqcgemayqiaucag => $syqougokmmgaoaee], true, 0); if (!is_wp_error($keccaugmemegoimu)) { $gmywaegkmeaueiyo = $keccaugmemegoimu[Constants::iikosyqiawkweouo]; } } if (!is_wp_error($keccaugmemegoimu)) { $qmwoykgeiicumeiw = $gcswwqwyaccgyoee->waecsyqmwascmqoa($wksoawcgagcgoask, Constants::NAME); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("\143\x6f\x6d\160\157\156\145\x6e\x74\x5f\x67\x65\x74\137\x6c\151\x63\145\156\163\x65\x5f\x6b\x65\171\x5f\x72\x65\163\160\157\156\x73\145\137\x64\141\164\x61", [], $wqykqusigegasqeg, $wksoawcgagcgoask); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$syqougokmmgaoaee}\137\147\145\164\x5f\x6c\x69\143\145\156\x73\145\137\153\x65\x79\137\x72\x65\x73\160\157\156\163\x65\137\x64\x61\164\141", $icwicymcioeyeyek, $wqykqusigegasqeg, $wksoawcgagcgoask); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$qmwoykgeiicumeiw}\137\x67\x65\164\x5f\x6c\151\x63\145\156\163\x65\137\x6b\145\171\x5f\x72\x65\x73\160\x6f\x6e\x73\145\x5f\x64\x61\x74\141", $icwicymcioeyeyek, $wqykqusigegasqeg, $wksoawcgagcgoask); $icwicymcioeyeyek[Constants::ascagqcquwgmygkm] = $yakcyegsoqusmiak->waecsyqmwascmqoa($gmywaegkmeaueiyo, $yakcyegsoqusmiak::okkqqmwseqscceye); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\114\x69\143\145\156\163\145\x20\x6b\145\171\40\160\162\157\166\x69\x64\x65\144\40\163\165\143\143\145\x73\x73\x66\x75\154\154\x79\x2e", PR__MDL__COMPONENT_MANAGER), $icwicymcioeyeyek); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\161\x75\x65\163\x74\x65\x64\40\x63\x6f\x6d\x70\157\156\x65\156\164\40\156\157\164\x20\146\x6f\165\x6e\144\56", PR__MDL__COMPONENT_MANAGER)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\103\157\155\160\157\x6e\145\156\164", PR__MDL__COMPONENT_MANAGER)); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ascagqcquwgmygkm, ''); $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ocwsuwyiiasigqaa, ''); if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if ($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu)) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wqykqusigegasqeg = $swgwkyqkakceqeia->mwyqswsaeeewsosm($keccaugmemegoimu); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Purchase::okkqqmwseqscceye, $hsouuwoeemykcceu), $eqwoegegiamegqsm->megqywqeuquawkim(Purchase::qkmqmaeuyokqgemg, $wqykqusigegasqeg)]); if ($gmywaegkmeaueiyo) { $syqougokmmgaoaee = $swgwkyqkakceqeia->waecsyqmwascmqoa($gmywaegkmeaueiyo, Purchase::ogqcgemayqiaucag, 0); $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->akkkoiiymmamsauc($syqougokmmgaoaee); if ($gcswwqwyaccgyoee->waecsyqmwascmqoa($wmqsyyyeksgsmmya, Constants::NAME) === $wksoawcgagcgoask) { $qmwoykgeiicumeiw = $gcswwqwyaccgyoee->waecsyqmwascmqoa($wksoawcgagcgoask, Constants::NAME); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("\x63\157\155\160\157\x6e\145\x6e\x74\137\143\x68\x65\143\153\x5f\x6c\151\x63\x65\x6e\163\x65\137\153\x65\x79\137\162\145\163\x70\157\156\x73\145\137\x64\141\x74\x61", [], $wqykqusigegasqeg, $wmqsyyyeksgsmmya); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$syqougokmmgaoaee}\x5f\x63\150\x65\x63\x6b\137\154\x69\x63\x65\156\x73\x65\137\153\145\x79\x5f\x72\x65\163\x70\x6f\x6e\163\x65\137\x64\141\164\141", $icwicymcioeyeyek, $wqykqusigegasqeg, $wmqsyyyeksgsmmya); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$qmwoykgeiicumeiw}\x5f\143\x68\145\143\x6b\137\154\151\x63\x65\156\x73\x65\137\153\145\171\x5f\x72\145\163\x70\x6f\156\x73\145\137\x64\141\x74\141", $icwicymcioeyeyek, $wqykqusigegasqeg, $wmqsyyyeksgsmmya); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x4c\151\143\x65\x6e\163\145\40\113\145\x79\x20\151\163\x20\x76\x61\x6c\x69\x64\x2e", PR__MDL__COMPONENT_MANAGER), $icwicymcioeyeyek); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\x72\162\171\x2c\x20\x59\157\165\40\156\x6f\164\x20\x62\x75\171\x20\164\x68\x69\x73\x20\143\x6f\x6d\x70\157\x6e\x65\x6e\x74\54\x20\141\162\145\x20\x79\x6f\165\40\x74\x72\x79\x69\x6e\147\x20\x68\141\x63\153\77", PR__MDL__COMPONENT_MANAGER)); $this->icyeokqcmiyigkic($wqykqusigegasqeg, $syqougokmmgaoaee, Report::mkgimueycqsggewa); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\162\x72\171\54\40\x59\x6f\165\40\x6e\x6f\164\x20\142\x75\171\x20\164\x68\151\163\x20\x63\x6f\155\160\x6f\156\145\x6e\x74\x2e", PR__MDL__COMPONENT_MANAGER)); $this->icyeokqcmiyigkic($wqykqusigegasqeg, $wksoawcgagcgoask, Constants::ckumcckgkuuygwkg); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } if (is_wp_error($keccaugmemegoimu)) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu)); } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->info("\x4c\151\x63\x65\156\x73\145\x20\153\x65\171\40\151\x73\40\166\x61\x6c\151\x64\40\141\x6e\x64\x20\x63\x68\x65\143\153\40\x69\163\40\163\x75\143\143\145\163\163\x66\165\x6c\56"); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ameiwoemukmkwuoi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if ($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu)) { $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $keccaugmemegoimu = [Constants::qescuiwgsyuikume => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::agskamgmowaiywus), Constants::qwumqqyuasyskkkc => $ykquycoiqesuckco->ksgygymiyeiukqoy(), Constants::eqkeooqcsscoggia => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::uckmggyuwgmmskyc, '')]; $keccaugmemegoimu = $this->ocksiywmkyaqseou("\160\154\165\x67\151\x6e\137\162\x65\155\x6f\x74\x65\137\164\141\x62\x5f\162\x65\x73\160\x6f\156\x73\x65", $keccaugmemegoimu, $ykquycoiqesuckco); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function icyeokqcmiyigkic($wqykqusigegasqeg, $wksoawcgagcgoask, string $aiamqeawckcsuaou = '') { return Report::symcgieuakksimmu()->icyeokqcmiyigkic($wqykqusigegasqeg, $wksoawcgagcgoask, Constants::okkqqmwseqscceye, $aiamqeawckcsuaou); } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::NAME, ''); if ($ymqmyyeuycgmigyo) { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wkkweuacukumqmya = [Constants::gouqcwikiiygyasc, Constants::NAME, Constants::squoamkioomemiyi, Constants::mkousmkiawwousws, Constants::ciywsqoeiymemsys, Constants::oguseymmyyoyaako, Constants::auugqowqueaocgsu, Constants::CREATED_AT, $gcswwqwyaccgyoee::wucysakokksokumi, $gcswwqwyaccgyoee::ouwcgiuiymgwouec, $gcswwqwyaccgyoee::yegaaaygeimasokq, $gcswwqwyaccgyoee::bsqkociucacssuum, $gcswwqwyaccgyoee::zgcmquuuyyakwqqm, $gcswwqwyaccgyoee::qscgeqoccoiyaeoi, $gcswwqwyaccgyoee::keqoqmmgsiegwskg, $gcswwqwyaccgyoee::ieagekqsqmcsqqeo, $gcswwqwyaccgyoee::caecscgwwciyemog]; $wksoawcgagcgoask = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->akkkoiiymmamsauc($ymqmyyeuycgmigyo, Constants::NAME, $wkkweuacukumqmya); if ($wksoawcgagcgoask) { $wqykqusigegasqeg = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if ($wqykqusigegasqeg && !is_wp_error($wqykqusigegasqeg)) { $myqeggyewswyoowe = true; $wqogggcaamgeiwew = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->iscemaoqqckmkago($gcswwqwyaccgyoee::qkmqmaeuyokqgemg, $wksoawcgagcgoask); if (!$wqogggcaamgeiwew) { if (Constants::kqeokggqcsesmqco === $gcswwqwyaccgyoee->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $wksoawcgagcgoask)) { $myqeggyewswyoowe = false; } } else { $myqeggyewswyoowe = false; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); foreach ($wqogggcaamgeiwew as $mokawwccycoiqeka) { if ($wqykqusigegasqeg == $swgwkyqkakceqeia->mwyqswsaeeewsosm($mokawwccycoiqeka)) { $myqeggyewswyoowe = true; break; } } } if ($myqeggyewswyoowe) { $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); $keccaugmemegoimu = $this->ocksiywmkyaqseou("\143\x6f\155\160\x6f\x6e\145\x6e\164\137\x72\x65\163\x74\x5f\147\x65\164\137\151\164\x65\155\137\162\145\163\x70\157\156\x73\145", $keccaugmemegoimu, $wqykqusigegasqeg, $wksoawcgagcgoask); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\162\x72\x79\x20\171\157\165\40\150\141\x76\145\x20\x6e\x6f\x20\160\x65\162\155\x69\163\163\151\157\156\x20\164\157\40\147\x65\x74\40\164\x68\151\163\40\x63\x6f\x6d\160\157\x6e\x65\x6e\x74\40\144\x61\x74\141\x2e", PR__MDL__COMPONENT_MANAGER)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\167\145\x20\x68\141\166\x65\40\163\x6f\155\x65\40\160\x72\157\x62\x6c\145\x6d\x20\x77\x69\x74\150\40\x64\x65\x74\145\143\164\x69\x6e\x67\x20\171\157\x75\x72\x20\144\x6f\x6d\141\151\x6e\x2e\40\155\141\171\x62\145\x20\x79\157\165\162\x20\x64\157\x6d\x61\x69\x6e\40\156\x6f\x74\40\162\145\147\151\x73\x74\145\162\x65\144\56", PR__MDL__COMPONENT_MANAGER), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x72\x65\161\x75\145\x73\164\145\x64\x20\x63\157\x6d\x70\157\156\x65\156\x74\x20\x77\x69\x74\x68\40\x6e\x61\x6d\145\x20\45\163\40\156\x6f\x74\x20\146\157\165\156\x64\x2e", PR__MDL__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\116\141\155\x65", PR__MDL__COMPONENT_MANAGER)); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa)) { $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($gwgucoaaqcwwciqq, $kaoqokqgkamekoes, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::squoamkioomemiyi, Constants::aqikuweekkucgqoy), $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::soesaeyoucgacqga, false), $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::yayciqueeakqwese, '')); if ($kaoqokqgkamekoes) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($kaoqokqgkamekoes); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\162\x72\x79\40\x62\x75\x74\x20\171\x6f\165\x72\40\162\x65\161\x75\x65\163\164\40\x69\x73\40\156\x6f\164\40\166\141\154\151\x64\x2c\x20\x63\x6f\x6e\164\141\x63\164\x20\165\163\56", PR__MDL__COMPONENT_MANAGER)); } if (!isset($keccaugmemegoimu)) { if (isset($siykeiywomwwuoiw) && $siykeiywomwwuoiw) { $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $keccaugmemegoimu = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, array_merge($ywmkwiwkosakssii, [Constants::wosqwewmqmyweqea => false])); $oammesyieqmwuwyi = $keccaugmemegoimu[Constants::qwumqqyuasyskkkc]; $qsqwqsymmqeoqwcu = []; if (is_array($oammesyieqmwuwyi)) { foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $iueymcwwscwqkiyq = $gcswwqwyaccgyoee->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $igqsaukqcqscimok); if (in_array($iueymcwwscwqkiyq, [Constants::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg], true)) { $qsqwqsymmqeoqwcu[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); } } } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $qsqwqsymmqeoqwcu; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x65\x72\x76\x69\143\x65\x20\151\163\x20\165\156\x61\x76\x61\x69\x6c\x61\x62\x6c\x65\40\162\151\x67\x68\x74\x20\156\x6f\167\x2e", PR__MDL__COMPONENT_MANAGER), 503); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ieqymewceekuicei($igqsaukqcqscimok) { $jwsqucqyaoaasykk = Component::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $iueymcwwscwqkiyq = $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Constants::ciywsqoeiymemsys); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [Constants::squoamkioomemiyi => $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $igqsaukqcqscimok, Constants::aqikuweekkucgqoy), Constants::eikgweiqgomeisyo => $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $jwsqucqyaoaasykk::iuisqwiqesgyqsyg)]); $product = $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Constants::oguseymmyyoyaako); if ($product = $usmsssmiougymckk->get($product)) { if (Constants::wmmucsiyiyusmssm === $iueymcwwscwqkiyq) { $aumscagymwyyicag = $usmsssmiougymckk->oemowqiewwkuiecu($product); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, ["\x70\x72\x69\x63\x65" => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($aumscagymwyyicag), "\162\x61\x74\x69\x6e\x67" => $product->get_average_rating(), "\x72\x61\164\x69\156\x67\137\x63\x6f\x75\x6e\164" => $product->get_rating_count(), "\146\x72\x65\x65\x5f\x76\x65\162\x73\x69\157\x6e" => $aumscagymwyyicag <= 0]); } $igqsaukqcqscimok[Constants::sauwwsocmukoaayu] = $product->get_permalink(); } if ($mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::mkousmkiawwousws)) { $igqsaukqcqscimok[Constants::mkousmkiawwousws] = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($mcqieaigyeeyaksm); $igqsaukqcqscimok["\151\155\x61\147\145\x5f\x64\141\164\x65"] = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->squyiyimquqicqke("\131\55\155\x2d\x64\40\x48\x3a\151\72\163", $mcqieaigyeeyaksm, false); } if ($rgswmioeqyomacmc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Component::wsymueygaeiiwsiw)) { $igqsaukqcqscimok[Component::wsymueygaeiiwsiw] = Setting::symcgieuakksimmu()->icioieqkoswsyouk([Constants::ascagqcquwgmygkm => $rgswmioeqyomacmc, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); } $uoyamuqmwmemuiko = (int) $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Component::ieagekqsqmcsqqeo); $gyycewisqacsckaw = (int) $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Component::caecscgwwciyemog); $ocmwaasmoekuweaa = (int) $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Component::keqoqmmgsiegwskg); if ($iueymcwwscwqkiyq === Constants::wmmucsiyiyusmssm) { $ieqwogkgyywicygk = $uoyamuqmwmemuiko + $ocmwaasmoekuweaa; if ($gyycewisqacsckaw > 0) { $keaccasqgkaqawwm = time(); $kwkmegesqkqwyska = strtotime($gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Constants::CREATED_AT)); $immmocykksywgkqu = round(($keaccasqgkaqawwm - $kwkmegesqkqwyska) / DAY_IN_SECONDS); if ($immmocykksywgkqu > 0) { $ieqwogkgyywicygk += $gyycewisqacsckaw * $immmocykksywgkqu; } } } else { $ieqwogkgyywicygk = 0; } $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [Component::mawokyacsmmqmsoo => $ieqwogkgyywicygk]); $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, [Constants::gouqcwikiiygyasc, "\144\x6f\155\x61\151\156\x5f\x69\x64", "\143\x6f\155\x70\x6f\156\145\156\x74\137\151\x64"]); return $igqsaukqcqscimok; } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::igswcauwsgmeougs); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $iakkeikwceeomgyq); if (Constants::gouqcwikiiygyasc === $aqykuigiuwmmcieu) { $mokawwccycoiqeka = $swgwkyqkakceqeia->mwyqswsaeeewsosm($mokawwccycoiqeka); } if (!$mokawwccycoiqeka) { $mokawwccycoiqeka = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4e\x6f\40\144\157\155\x61\x69\156\x20\146\x6f\165\x6e\144\x20\x66\x6f\x72\x20\171\x6f\165\56", PR__MDL__COMPONENT_MANAGER), 401); } return $mokawwccycoiqeka; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $iqauecoycmqkimak = Domain::symcgieuakksimmu()->aokkqqekiykiikki($aqmwamyiwgeeymqa); return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && $iqauecoycmqkimak; } }
