<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc52f2d78c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; class Report extends Model { const qkmqmaeuyokqgemg = Constants::weayyoewessosyko . Constants::mswocgcucqoaesaa; const ogqcgemayqiaucag = Constants::ocwsuwyiiasigqaa . Constants::mswocgcucqoaesaa; const mkgimueycqsggewa = "\167\x72\157\156\x67\x5f\166\141\154\165\x65"; public function register() { $this->muuwuqssqkaieqge(__("\x52\145\x70\157\x72\x74\163", PR__MDL__COMPONENT_MANAGER))->guiaswksukmgageq(__("\122\145\x70\157\x72\164", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::geeqaackcgawagqg)->uaywwyimkgwyqwya([Constants::yiuwgggacagyeqmo => 15]); $this->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->esoauokkgywesoku(Constants::ckiaowgkqoewoseo, __("\110\x6f\x73\x74", PR__MDL__COMPONENT_MANAGER))->esoauokkgywesoku(self::qkmqmaeuyokqgemg, __("\104\x6f\x6d\x61\151\x6e", PR__MDL__COMPONENT_MANAGER))->esoauokkgywesoku(Constants::uqgcmmosieyimiku, __("\101\143\164\151\x6f\x6e", PR__MDL__COMPONENT_MANAGER))->esoauokkgywesoku(Constants::eqkeooqcsscoggia, __("\104\x65\163\143\162\151\x70\x74\x69\157\x6e", PR__MDL__COMPONENT_MANAGER)); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->wuuqgaekqeymecag(Component::class)->gswweykyogmsyawy(__("\103\x6f\155\x70\x6f\156\x65\x6e\164", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::squoamkioomemiyi)->kesomeowemmyygey(1, Constants::okkqqmwseqscceye, __("\x4c\x69\x63\145\156\x73\145\40\113\x65\x79", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, Constants::qqmqgwwqaqyaiqkc, __("\105\x78\x63\x65\160\164\x69\x6f\156", PR__MDL__COMPONENT_MANAGER))->gswweykyogmsyawy(__("\x54\171\x70\145", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->qcqeqimisiisswky()->gswweykyogmsyawy(__("\x43\162\x65\141\164\145\x64\x20\101\x74", PR__MDL__COMPONENT_MANAGER))); parent::uwmqacgewuauagai(); } public function icyeokqcmiyigkic(?string $mosgqccgckcwsoom, $wksoawcgagcgoask, string $sqeykgyoooqysmca = Constants::qqmqgwwqaqyaiqkc, string $aiamqeawckcsuaou = '') { if (!is_numeric($wksoawcgagcgoask)) { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->mwyqswsaeeewsosm($gcswwqwyaccgyoee->iekyeyicoyyawomk()->akkkoiiymmamsauc($wksoawcgagcgoask, Constants::NAME)); } if (is_numeric($wksoawcgagcgoask) && $mosgqccgckcwsoom) { $kuguwoaesuqsqysu = []; if ($aiamqeawckcsuaou) { $kuguwoaesuqsqysu[Constants::uqgcmmosieyimiku] = $aiamqeawckcsuaou; } if (is_numeric($mosgqccgckcwsoom)) { $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $mosgqccgckcwsoom; } else { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqykqusigegasqeg = $swgwkyqkakceqeia->mwyqswsaeeewsosm($swgwkyqkakceqeia->iekyeyicoyyawomk()->akkkoiiymmamsauc($mosgqccgckcwsoom, Constants::ciyoccqkiamemcmm)); if ($wqykqusigegasqeg) { $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $wqykqusigegasqeg; } else { $kuguwoaesuqsqysu[Constants::ckiaowgkqoewoseo] = $mosgqccgckcwsoom; } } $sogksuscggsicmac = $this->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::ckcuiukmyisueqeo => $kuguwoaesuqsqysu, self::ogqcgemayqiaucag => $wksoawcgagcgoask]); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $sogksuscggsicmac; } }
