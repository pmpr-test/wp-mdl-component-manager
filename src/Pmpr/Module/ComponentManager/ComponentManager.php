<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705b08362919             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Module\ComponentManager\Frontend\Frontend; use Pmpr\Module\ComponentManager\Model\Campaign; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Installation; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Model\Report; use Pmpr\Module\ComponentManager\Model\Request; use Pmpr\Module\ComponentManager\Panel\Panel; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\ComponentManager\REST\REST; class ComponentManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x43\x6f\155\160\157\x6e\145\x6e\x74\x20\x4d\x61\156\141\147\x65\x72", PR__MDL__COMPONENT_MANAGER); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\x65\146\157\x72\x65\x5f\145\x6e\x71\x75\x65\165\x65\137\x62\141\143\x6b\145\156\x64\137\x61\163\x73\145\164\163", [$this, "\145\x6e\161\x75\x65\165\145"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\154\x6f\147\151\x6e\137\x72\145\x64\x69\x72\145\x63\x74", "\165\162\154\144\x65\x63\157\144\145"); $this->aqaqisyssqeomwom("\x70\x6c\165\147\151\x6e\137\144\157\x77\156\x6c\157\x61\144\137\x62\x75\164\164\x6f\x6e", [$this, "\x65\163\x65\x71\x6f\157\x75\x79\167\x69\x65\x67\155\x6f\165\141"], 10, 2)->aqaqisyssqeomwom("\x67\x65\x74\x5f\x63\157\x6d\x70\157\x6e\145\x6e\x74\x73\x5f\x62\171\x5f\150\x6f\163\x74", [$this, "\x61\x63\x71\165\x63\153\161\x65\165\151\x65\147\x63\161\x6d\x73"], 10, 2)->aqaqisyssqeomwom("\147\x65\164\137\143\x6f\x6d\160\157\156\x65\x6e\x74\137\x69\156\x73\x74\x61\154\x6c\141\164\151\x6f\x6e\x5f\x67\165\151\144\x65", [$this, "\153\161\x77\157\x6d\x6b\167\x69\163\x61\x6d\147\x67\x61\x77\167"], 10, 2)->aqaqisyssqeomwom("\x67\145\x74\137\143\x6f\155\x70\157\x6e\x65\156\x74\137\151\156\x73\x74\141\x6c\x6c\x61\x74\151\157\x6e\137\x67\165\151\144\145\137\x6d\x6f\144\141\154", [$this, "\141\x71\163\x75\147\x73\155\x73\153\143\x65\151\153\141\x65\145"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::ieicsweaowmycywa)) { Ajax::symcgieuakksimmu(); } REST::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); PushUpdate::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\144\x6f\x6d\x61\x69\156\55\x6d\141\156\x61\x67\145\x72") && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Component::symcgieuakksimmu(); Purchase::symcgieuakksimmu(); Report::symcgieuakksimmu(); Campaign::symcgieuakksimmu(); Installation::symcgieuakksimmu(); Request::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\160\141\x6e\x65\x6c")) { Panel::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x73\145\143\x75\162\x69\164\x79")) { Security::symcgieuakksimmu(); } } public function acquckqeuiegcqms(array $mqkkuqaimswumeww, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::aqikuweekkucgqoy, Constants::ckiaowgkqoewoseo => '', Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $ksaameoqigiaoigg = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($ywmkwiwkosakssii[Constants::ckiaowgkqoewoseo], $uamcoiueqaamsqma, $ywmkwiwkosakssii[Constants::squoamkioomemiyi])) { $mqkkuqaimswumeww = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->iiqauwkoiguyeawu($siykeiywomwwuoiw); switch ($ywmkwiwkosakssii[Constants::aisguagukaewucii]) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $ksaameoqigiaoigg[$gcswwqwyaccgyoee->mwyqswsaeeewsosm($wksoawcgagcgoask)] = $gcswwqwyaccgyoee->waecsyqmwascmqoa($wksoawcgagcgoask, $gcswwqwyaccgyoee::wucysakokksokumi); } break; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: $ksaameoqigiaoigg = $mqkkuqaimswumeww; break; } } return $ksaameoqigiaoigg; } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\144\x6d\x69\156", $eygsasmqycagyayw->get("\141\144\x6d\x69\x6e\56\152\163"))->okawmmwsiuauwsiu())->ikqyiskqaaymscgw("\x61\152\141\x78", Ajax::mucicoimkyqqioke); } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; if ($mkysicwccoeicumg = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk)) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->yucssysgmisaquki($mkysicwccoeicumg); } return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\154\141\163\x73" => "\x74\145\170\x74\x2d\144\145\143\x6f\162\x61\164\x69\157\x6e\55\156\x6f\x6e\145", "\141\x73\55\x62\x75\x74\164\x6f\x6e" => true, Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::ykecciymmukkwucu, Constants::qgqyauaqwqmqseim => IconBrandInterface::cowoiyummsokycaq, Constants::igssuqwuicwawgam => Constants::smkwuwawwaqyimcq]); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if ($mkysicwccoeicumg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk)) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x63\x6c\x61\x73\x73"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x61\x73\55\x62\x75\164\x74\x6f\x6e")) { $oiegiwogmwmawkeo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::waguuiqqgsysuukq); $qoiwmokisgikggia = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\x20\142\x74\x6e\x20\142\x74\156\55{$qoiwmokisgikggia}\40\142\x74\156\55{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qgqyauaqwqmqseim); if ($wkaqekwwgqsqwcoi) { $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\141\x73\163" => "\151\143\x6f\x6e\x2d\x77\150\151\164\145\x20\x69\143\x6f\156\55{$oiegiwogmwmawkeo}"], [Constants::kicoscymgmgqeqgy => true]); } } $cmwygeyygwqaemaq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::TEXT); if (!$cmwygeyygwqaemaq) { $cmwygeyygwqaemaq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::wumiomcykccwmgei, __("\x50\x4d\x50\x52\40\x50\x6c\165\147\151\156", PR__MDL__COMPONENT_MANAGER)); } $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\x63\154\x61\163\163" => $iyiskikeoeeysmiw ? "\x70\154\55\x32" : '']); $siquossayskcwkea = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\143\154\x61\163\163" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($ewgwqamkygiqaawc, $siquossayskcwkea); } return $iwywmkygwewiamwm; } public function kqwomkwisamggaww($iwamiguusayooguq, $wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return sprintf(__("\131\x6f\x75\40\143\x61\156\x20\x67\x65\164\40\150\x65\x6c\x70\40\x66\x72\x6f\155\x20\164\150\x65\x20\45\x73\x20\x74\157\40\x69\x6e\163\x74\141\x6c\x6c\40\164\150\x65\40\45\163\x2e", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($quisksguegkuygus), Setting::symcgieuakksimmu()->aqsugsmskceikaee($wksoawcgagcgoask)); } }
