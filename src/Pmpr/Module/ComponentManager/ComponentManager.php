<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670da318acac6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Module\ComponentManager\Model\Campaign; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Installation; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Model\Report; use Pmpr\Module\ComponentManager\Model\Request; use Pmpr\Module\ComponentManager\Panel\Panel; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\ComponentManager\REST\REST; class ComponentManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\103\157\x6d\160\x6f\156\x65\x6e\164\x20\115\x61\156\x61\147\145\x72", PR__MDL__COMPONENT_MANAGER); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x62\x65\x66\x6f\x72\145\137\x65\156\161\x75\145\x75\x65\x5f\x62\141\x63\153\145\x6e\144\x5f\141\x73\163\145\164\x73", [$this, "\145\x6e\161\x75\145\x75\145"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x6c\x6f\147\x69\156\137\x72\x65\x64\151\x72\x65\x63\164", "\165\162\x6c\144\145\x63\x6f\144\x65"); $this->aqaqisyssqeomwom("\x70\154\165\x67\151\156\137\144\x6f\x77\x6e\x6c\x6f\141\x64\137\x62\165\164\164\157\x6e", [$this, "\145\163\x65\161\x6f\157\165\171\x77\151\x65\x67\x6d\x6f\165\x61"], 10, 2)->aqaqisyssqeomwom("\147\145\x74\x5f\x63\157\155\160\x6f\x6e\145\x6e\x74\163\x5f\142\x79\x5f\x68\157\x73\164", [$this, "\141\143\161\x75\143\x6b\161\145\165\x69\x65\147\x63\161\155\x73"], 10, 2)->aqaqisyssqeomwom("\147\x65\164\137\143\157\155\x70\x6f\x6e\145\x6e\x74\137\151\x6e\x73\164\141\x6c\x6c\x61\164\151\x6f\156\137\x67\x75\x69\x64\x65", [$this, "\x6b\161\167\x6f\x6d\x6b\167\x69\x73\141\x6d\x67\x67\141\167\167"], 10, 2)->aqaqisyssqeomwom("\147\x65\164\x5f\143\x6f\x6d\160\157\156\x65\x6e\164\x5f\151\x6e\x73\164\x61\x6c\x6c\x61\x74\x69\157\x6e\x5f\147\165\151\144\145\x5f\155\x6f\x64\141\x6c", [$this, "\141\x71\x73\165\x67\163\x6d\163\153\x63\145\151\x6b\141\x65\145"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::ieicsweaowmycywa)) { Ajax::symcgieuakksimmu(); } REST::symcgieuakksimmu(); PushUpdate::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\144\157\x6d\x61\151\x6e\55\x6d\141\156\x61\147\145\x72") && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { Component::symcgieuakksimmu(); Purchase::symcgieuakksimmu(); Report::symcgieuakksimmu(); Campaign::symcgieuakksimmu(); Installation::symcgieuakksimmu(); Request::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x70\x61\x6e\x65\154")) { Panel::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\163\x65\x63\165\x72\151\164\x79")) { Security::symcgieuakksimmu(); } } public function acquckqeuiegcqms(array $mqkkuqaimswumeww, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::aqikuweekkucgqoy, Constants::ckiaowgkqoewoseo => '', Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $ksaameoqigiaoigg = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($ywmkwiwkosakssii[Constants::ckiaowgkqoewoseo], $uamcoiueqaamsqma, $ywmkwiwkosakssii[Constants::squoamkioomemiyi])) { $mqkkuqaimswumeww = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->iiqauwkoiguyeawu($siykeiywomwwuoiw); switch ($ywmkwiwkosakssii[Constants::aisguagukaewucii]) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $ksaameoqigiaoigg[$gcswwqwyaccgyoee->mwyqswsaeeewsosm($wksoawcgagcgoask)] = $gcswwqwyaccgyoee->waecsyqmwascmqoa($wksoawcgagcgoask, $gcswwqwyaccgyoee::wucysakokksokumi); } break; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: $ksaameoqigiaoigg = $mqkkuqaimswumeww; break; } } return $ksaameoqigiaoigg; } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\155\151\156", $eygsasmqycagyayw->get("\141\144\155\x69\x6e\56\152\163"))->okawmmwsiuauwsiu())->ikqyiskqaaymscgw("\141\x6a\141\x78", Ajax::mucicoimkyqqioke); } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; if ($mkysicwccoeicumg = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk)) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->yucssysgmisaquki($mkysicwccoeicumg); } return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\x6c\x61\x73\163" => "\x74\145\170\x74\55\144\x65\x63\x6f\x72\x61\x74\151\157\x6e\x2d\x6e\x6f\x6e\145", "\x61\163\55\142\165\x74\164\x6f\x6e" => true, Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::ykecciymmukkwucu, Constants::qgqyauaqwqmqseim => IconBrandInterface::cowoiyummsokycaq, Constants::igssuqwuicwawgam => Constants::smkwuwawwaqyimcq]); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if ($mkysicwccoeicumg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk)) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\x6c\141\x73\x73"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\141\x73\55\x62\x75\x74\164\157\156")) { $oiegiwogmwmawkeo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::waguuiqqgsysuukq); $qoiwmokisgikggia = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\40\x62\x74\156\40\142\x74\x6e\55{$qoiwmokisgikggia}\x20\142\x74\156\x2d{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qgqyauaqwqmqseim); if ($wkaqekwwgqsqwcoi) { $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\x61\163\x73" => "\x69\143\x6f\156\55\x77\150\x69\x74\145\x20\151\143\157\x6e\55{$oiegiwogmwmawkeo}"], [Constants::kicoscymgmgqeqgy => true]); } } $cmwygeyygwqaemaq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::TEXT); if (!$cmwygeyygwqaemaq) { $cmwygeyygwqaemaq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::wumiomcykccwmgei, __("\x50\115\120\122\x20\x50\x6c\165\x67\151\x6e", PR__MDL__COMPONENT_MANAGER)); } $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\143\154\x61\x73\x73" => $iyiskikeoeeysmiw ? "\x70\x6c\55\x32" : '']); $siquossayskcwkea = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\143\154\141\x73\163" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($ewgwqamkygiqaawc, $siquossayskcwkea); } return $iwywmkygwewiamwm; } public function kqwomkwisamggaww($iwamiguusayooguq, $wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return sprintf(__("\131\157\165\x20\143\141\x6e\x20\147\x65\x74\40\x68\x65\154\160\40\x66\162\157\155\40\x74\x68\145\40\x25\x73\40\164\x6f\40\x69\x6e\163\x74\x61\154\x6c\40\x74\150\x65\x20\45\163\56", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($quisksguegkuygus), Setting::symcgieuakksimmu()->aqsugsmskceikaee($wksoawcgagcgoask)); } }
