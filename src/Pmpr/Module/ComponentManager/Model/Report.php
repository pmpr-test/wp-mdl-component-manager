<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc074927da             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; class Report extends Model { const qkmqmaeuyokqgemg = Constants::weayyoewessosyko . Constants::mswocgcucqoaesaa; const ogqcgemayqiaucag = Constants::ocwsuwyiiasigqaa . Constants::mswocgcucqoaesaa; const mkgimueycqsggewa = "\x77\162\157\156\x67\x5f\x76\x61\154\x75\145"; public function register() { $this->muuwuqssqkaieqge(__("\122\145\x70\x6f\x72\164\x73", PR__MDL__COMPONENT_MANAGER))->guiaswksukmgageq(__("\122\145\x70\x6f\162\x74", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::geeqaackcgawagqg)->uaywwyimkgwyqwya([Constants::yiuwgggacagyeqmo => 15]); $this->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->esoauokkgywesoku(Constants::ckiaowgkqoewoseo, __("\x48\157\163\164", PR__MDL__COMPONENT_MANAGER))->esoauokkgywesoku(self::qkmqmaeuyokqgemg, __("\x44\x6f\x6d\141\x69\x6e", PR__MDL__COMPONENT_MANAGER))->esoauokkgywesoku(Constants::uqgcmmosieyimiku, __("\x41\x63\164\151\157\x6e", PR__MDL__COMPONENT_MANAGER))->esoauokkgywesoku(Constants::eqkeooqcsscoggia, __("\104\x65\163\x63\162\151\x70\164\x69\x6f\156", PR__MDL__COMPONENT_MANAGER)); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->wuuqgaekqeymecag(Component::class)->gswweykyogmsyawy(__("\x43\x6f\155\160\157\156\x65\x6e\164", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::squoamkioomemiyi)->kesomeowemmyygey(1, Constants::okkqqmwseqscceye, __("\114\x69\x63\145\x6e\163\x65\40\113\145\171", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, Constants::qqmqgwwqaqyaiqkc, __("\x45\x78\x63\x65\160\x74\151\x6f\156", PR__MDL__COMPONENT_MANAGER))->gswweykyogmsyawy(__("\124\171\x70\145", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->qcqeqimisiisswky()->gswweykyogmsyawy(__("\103\x72\145\x61\164\x65\144\x20\101\164", PR__MDL__COMPONENT_MANAGER))); parent::uwmqacgewuauagai(); } public function icyeokqcmiyigkic(?string $mosgqccgckcwsoom, $wksoawcgagcgoask, string $sqeykgyoooqysmca = Constants::qqmqgwwqaqyaiqkc, string $aiamqeawckcsuaou = '') { if (!is_numeric($wksoawcgagcgoask)) { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->mwyqswsaeeewsosm($gcswwqwyaccgyoee->iekyeyicoyyawomk()->akkkoiiymmamsauc($wksoawcgagcgoask, Constants::NAME)); } if (is_numeric($wksoawcgagcgoask) && $mosgqccgckcwsoom) { $kuguwoaesuqsqysu = []; if ($aiamqeawckcsuaou) { $kuguwoaesuqsqysu[Constants::uqgcmmosieyimiku] = $aiamqeawckcsuaou; } if (is_numeric($mosgqccgckcwsoom)) { $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $mosgqccgckcwsoom; } else { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqykqusigegasqeg = $swgwkyqkakceqeia->mwyqswsaeeewsosm($swgwkyqkakceqeia->iekyeyicoyyawomk()->akkkoiiymmamsauc($mosgqccgckcwsoom, Constants::ciyoccqkiamemcmm)); if ($wqykqusigegasqeg) { $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $wqykqusigegasqeg; } else { $kuguwoaesuqsqysu[Constants::ckiaowgkqoewoseo] = $mosgqccgckcwsoom; } } $sogksuscggsicmac = $this->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::ckcuiukmyisueqeo => $kuguwoaesuqsqysu, self::ogqcgemayqiaucag => $wksoawcgagcgoask]); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $sogksuscggsicmac; } }
