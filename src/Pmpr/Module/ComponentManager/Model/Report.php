<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8e89fd5e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; class Report extends Common { const qkmqmaeuyokqgemg = Constants::weayyoewessosyko . Constants::mswocgcucqoaesaa; const ogqcgemayqiaucag = Constants::ocwsuwyiiasigqaa . Constants::mswocgcucqoaesaa; const ckumcckgkuuygwkg = "\151\x6e\x76\141\x6c\x69\144"; const mkgimueycqsggewa = "\167\x72\157\x6e\x67\x5f\166\x61\x6c\x75\145"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconInterface::geeqaackcgawagqg)->ckaeqgiaiqwsccke(30)->guiaswksukmgageq(__("\122\145\160\157\162\164", PR__MDL__COMPONENT_MANAGER))->muuwuqssqkaieqge(__("\122\x65\x70\x6f\162\164\163", PR__MDL__COMPONENT_MANAGER))->aseucqksocwomwos()->qemeyueyiwgsokuc(); $this->esoauokkgywesoku([Constants::ckiaowgkqoewoseo => __("\110\x6f\163\164", PR__MDL__COMPONENT_MANAGER), Constants::uqgcmmosieyimiku => __("\101\143\x74\151\x6f\156", PR__MDL__COMPONENT_MANAGER), self::qkmqmaeuyokqgemg => __("\x44\157\x6d\x61\151\x6e", PR__MDL__COMPONENT_MANAGER), Constants::eqkeooqcsscoggia => __("\104\145\x73\143\x72\151\160\164\x69\x6f\x6e", PR__MDL__COMPONENT_MANAGER)]); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->wuuqgaekqeymecag(Component::class)->gswweykyogmsyawy(__("\103\x6f\155\160\x6f\x6e\145\156\x74", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(Constants::squoamkioomemiyi)->kesomeowemmyygey(1, Constants::okkqqmwseqscceye, __("\114\151\x63\x65\x6e\163\x65\x20\113\145\x79", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, Constants::qqmqgwwqaqyaiqkc, __("\105\x78\x63\x65\x70\x74\151\157\156", PR__MDL__COMPONENT_MANAGER))->gswweykyogmsyawy(__("\x54\171\160\x65", PR__MDL__COMPONENT_MANAGER))); parent::ewaqwooqoqmcoomi(); } public function icyeokqcmiyigkic(?string $mosgqccgckcwsoom, $wksoawcgagcgoask, string $sqeykgyoooqysmca = Constants::qqmqgwwqaqyaiqkc, string $aiamqeawckcsuaou = '') { if (is_numeric($wksoawcgagcgoask)) { goto oimkeqocuguqqsqk; } $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->keeuqgyooycqoygw($gcswwqwyaccgyoee->akkkoiiymmamsauc($wksoawcgagcgoask, Constants::NAME)); oimkeqocuguqqsqk: if (is_numeric($wksoawcgagcgoask) && $mosgqccgckcwsoom) { goto ikuuiauwouuqawuw; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto yoqakewookqoqacm; ikuuiauwouuqawuw: $kuguwoaesuqsqysu = []; if (!$aiamqeawckcsuaou) { goto oeocukauoyosicso; } $kuguwoaesuqsqysu[Constants::uqgcmmosieyimiku] = $aiamqeawckcsuaou; oeocukauoyosicso: if (is_numeric($mosgqccgckcwsoom)) { goto kwiggogcgciwuwqk; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($swgwkyqkakceqeia->akkkoiiymmamsauc($mosgqccgckcwsoom, Constants::ciyoccqkiamemcmm)); if ($wqykqusigegasqeg) { goto suqceasgacskcmkc; } $kuguwoaesuqsqysu[Constants::ckiaowgkqoewoseo] = $mosgqccgckcwsoom; goto yykqaowwsqgqysmq; suqceasgacskcmkc: $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $wqykqusigegasqeg; yykqaowwsqgqysmq: goto uckewycoogsogwiy; kwiggogcgciwuwqk: $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $mosgqccgckcwsoom; uckewycoogsogwiy: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::ckcuiukmyisueqeo => $kuguwoaesuqsqysu, self::ogqcgemayqiaucag => $wksoawcgagcgoask]); yoqakewookqoqacm: return $sogksuscggsicmac; } }
