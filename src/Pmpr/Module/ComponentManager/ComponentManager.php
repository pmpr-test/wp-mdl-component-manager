<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46b952390             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Module\ComponentManager\Model\Campaign; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Installation; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Model\Report; use Pmpr\Module\ComponentManager\Model\Request; use Pmpr\Module\ComponentManager\Panel\Panel; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\ComponentManager\REST\REST; class ComponentManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x43\x6f\x6d\x70\x6f\156\x65\x6e\164\40\x4d\x61\156\141\147\x65\162", PR__MDL__COMPONENT_MANAGER); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\145\146\157\162\x65\137\145\156\x71\165\x65\165\x65\x5f\x62\141\x63\153\x65\x6e\x64\x5f\x61\x73\x73\145\164\x73", [$this, "\x65\x6e\x71\x75\x65\x75\145"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\154\x6f\x67\x69\x6e\137\x72\x65\x64\151\x72\x65\x63\164", "\165\x72\x6c\144\x65\x63\x6f\x64\145"); $this->aqaqisyssqeomwom("\160\x6c\165\x67\151\x6e\137\144\x6f\x77\x6e\154\x6f\141\x64\x5f\142\165\x74\164\157\156", [$this, "\x65\x73\x65\x71\x6f\x6f\x75\171\x77\x69\x65\147\155\157\165\141"], 10, 2)->aqaqisyssqeomwom("\147\145\x74\x5f\x63\x6f\x6d\x70\157\x6e\145\x6e\164\x73\x5f\x62\171\137\150\157\x73\x74", [$this, "\141\143\x71\x75\143\x6b\x71\145\165\151\145\147\x63\161\x6d\x73"], 10, 2)->aqaqisyssqeomwom("\x67\145\x74\x5f\x63\x6f\x6d\160\157\x6e\145\x6e\x74\137\151\156\x73\164\x61\154\x6c\x61\x74\x69\x6f\x6e\x5f\147\165\151\144\x65", [$this, "\x6b\x71\x77\x6f\155\153\x77\151\x73\141\155\147\x67\141\x77\x77"], 10, 2)->aqaqisyssqeomwom("\x67\145\x74\x5f\x63\x6f\155\160\x6f\156\x65\156\x74\x5f\x69\x6e\x73\x74\x61\154\154\x61\164\151\x6f\156\137\x67\x75\x69\144\145\137\x6d\x6f\144\141\x6c", [$this, "\141\161\163\x75\147\x73\x6d\x73\153\143\145\x69\x6b\x61\x65\145"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::ieicsweaowmycywa)) { Ajax::symcgieuakksimmu(); } REST::symcgieuakksimmu(); PushUpdate::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x64\x6f\155\141\x69\156\55\155\141\156\x61\147\145\x72") && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { Component::symcgieuakksimmu(); Purchase::symcgieuakksimmu(); Report::symcgieuakksimmu(); Campaign::symcgieuakksimmu(); Installation::symcgieuakksimmu(); Request::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x70\141\x6e\145\154")) { Panel::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x73\x65\x63\x75\x72\x69\x74\171")) { Security::symcgieuakksimmu(); } } public function acquckqeuiegcqms(array $mqkkuqaimswumeww, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::aqikuweekkucgqoy, Constants::ckiaowgkqoewoseo => '', Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $ksaameoqigiaoigg = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($ywmkwiwkosakssii[Constants::ckiaowgkqoewoseo], $uamcoiueqaamsqma, $ywmkwiwkosakssii[Constants::squoamkioomemiyi])) { $mqkkuqaimswumeww = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->iiqauwkoiguyeawu($siykeiywomwwuoiw); switch ($ywmkwiwkosakssii[Constants::aisguagukaewucii]) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $ksaameoqigiaoigg[$gcswwqwyaccgyoee->mwyqswsaeeewsosm($wksoawcgagcgoask)] = $gcswwqwyaccgyoee->waecsyqmwascmqoa($wksoawcgagcgoask, $gcswwqwyaccgyoee::wucysakokksokumi); } break; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: $ksaameoqigiaoigg = $mqkkuqaimswumeww; break; } } return $ksaameoqigiaoigg; } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\155\x69\156", $eygsasmqycagyayw->get("\x61\x64\x6d\151\x6e\x2e\x6a\163"))->okawmmwsiuauwsiu())->ikqyiskqaaymscgw("\x61\x6a\x61\x78", Ajax::mucicoimkyqqioke); } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; if ($mkysicwccoeicumg = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk)) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->yucssysgmisaquki($mkysicwccoeicumg); } return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\154\141\163\x73" => "\x74\145\x78\x74\x2d\144\x65\143\157\162\x61\164\151\x6f\156\55\156\157\x6e\145", "\x61\163\x2d\x62\165\164\164\x6f\156" => true, Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::ykecciymmukkwucu, Constants::qgqyauaqwqmqseim => IconBrandInterface::cowoiyummsokycaq, Constants::igssuqwuicwawgam => Constants::smkwuwawwaqyimcq]); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if ($mkysicwccoeicumg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk)) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\154\141\x73\x73"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\141\163\x2d\142\x75\x74\x74\157\156")) { $oiegiwogmwmawkeo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::waguuiqqgsysuukq); $qoiwmokisgikggia = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\x20\x62\164\156\x20\x62\x74\x6e\x2d{$qoiwmokisgikggia}\40\142\164\x6e\x2d{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qgqyauaqwqmqseim); if ($wkaqekwwgqsqwcoi) { $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\x61\163\x73" => "\x69\x63\x6f\x6e\x2d\x77\150\x69\164\145\x20\x69\143\157\x6e\x2d{$oiegiwogmwmawkeo}"], [Constants::kicoscymgmgqeqgy => true]); } } $cmwygeyygwqaemaq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::TEXT); if (!$cmwygeyygwqaemaq) { $cmwygeyygwqaemaq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::wumiomcykccwmgei, __("\120\x4d\120\x52\40\x50\x6c\165\147\151\x6e", PR__MDL__COMPONENT_MANAGER)); } $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\x63\x6c\141\163\x73" => $iyiskikeoeeysmiw ? "\x70\154\55\62" : '']); $siquossayskcwkea = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\x63\x6c\x61\163\163" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($ewgwqamkygiqaawc, $siquossayskcwkea); } return $iwywmkygwewiamwm; } public function kqwomkwisamggaww($iwamiguusayooguq, $wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return sprintf(__("\x59\x6f\x75\40\143\x61\x6e\x20\x67\x65\x74\x20\x68\145\154\160\x20\x66\162\157\155\40\164\x68\x65\40\45\163\40\164\157\x20\x69\156\163\164\x61\154\x6c\x20\x74\150\145\40\x25\163\56", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($quisksguegkuygus), Setting::symcgieuakksimmu()->aqsugsmskceikaee($wksoawcgagcgoask)); } }
