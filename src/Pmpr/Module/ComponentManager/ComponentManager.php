<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d00126a7de             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Module\ComponentManager\Model\Campaign; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Installation; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Model\Report; use Pmpr\Module\ComponentManager\Model\Request; use Pmpr\Module\ComponentManager\Panel\Panel; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\ComponentManager\REST\REST; class ComponentManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\103\157\155\x70\x6f\x6e\145\156\x74\x20\x4d\141\156\x61\x67\145\162", PR__MDL__COMPONENT_MANAGER); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x62\x65\146\x6f\x72\145\137\145\156\x71\x75\x65\x75\145\137\142\141\143\x6b\145\x6e\144\137\x61\163\x73\145\164\163", [$this, "\145\x6e\161\x75\x65\165\x65"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x6c\x6f\x67\151\x6e\x5f\162\145\144\x69\162\145\x63\164", "\x75\162\154\x64\x65\x63\157\x64\145"); $this->aqaqisyssqeomwom("\x70\154\165\x67\x69\x6e\x5f\144\157\x77\156\154\157\141\x64\x5f\142\165\164\x74\157\x6e", [$this, "\145\163\x65\x71\x6f\157\x75\171\x77\151\x65\147\x6d\x6f\165\x61"], 10, 2)->aqaqisyssqeomwom("\147\145\164\x5f\143\x6f\x6d\x70\x6f\x6e\x65\156\164\163\x5f\x62\171\x5f\x68\157\x73\x74", [$this, "\141\x63\161\165\143\x6b\161\145\x75\151\145\147\143\161\155\x73"], 10, 2)->aqaqisyssqeomwom("\x67\145\x74\137\x63\157\155\x70\157\x6e\145\156\164\137\151\x6e\163\x74\x61\x6c\154\141\164\x69\157\156\x5f\x67\x75\151\144\x65", [$this, "\x6b\161\x77\157\x6d\x6b\167\x69\163\141\x6d\147\x67\141\x77\167"], 10, 2)->aqaqisyssqeomwom("\x67\145\x74\x5f\143\157\155\x70\x6f\x6e\x65\156\x74\x5f\151\156\163\164\141\154\154\x61\164\151\x6f\x6e\x5f\x67\165\x69\x64\145\x5f\155\x6f\x64\x61\154", [$this, "\x61\x71\x73\165\x67\x73\155\163\153\x63\x65\x69\153\141\x65\x65"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::ieicsweaowmycywa)) { Ajax::symcgieuakksimmu(); } REST::symcgieuakksimmu(); PushUpdate::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\144\157\155\x61\x69\156\55\x6d\141\156\x61\x67\145\x72") && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { Component::symcgieuakksimmu(); Purchase::symcgieuakksimmu(); Report::symcgieuakksimmu(); Campaign::symcgieuakksimmu(); Installation::symcgieuakksimmu(); Request::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x70\x61\156\x65\x6c")) { Panel::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\163\x65\x63\165\162\151\x74\171")) { Security::symcgieuakksimmu(); } } public function acquckqeuiegcqms(array $mqkkuqaimswumeww, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::aqikuweekkucgqoy, Constants::ckiaowgkqoewoseo => '', Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $ksaameoqigiaoigg = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($ywmkwiwkosakssii[Constants::ckiaowgkqoewoseo], $uamcoiueqaamsqma, $ywmkwiwkosakssii[Constants::squoamkioomemiyi])) { $mqkkuqaimswumeww = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->iiqauwkoiguyeawu($siykeiywomwwuoiw); switch ($ywmkwiwkosakssii[Constants::aisguagukaewucii]) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $ksaameoqigiaoigg[$gcswwqwyaccgyoee->mwyqswsaeeewsosm($wksoawcgagcgoask)] = $gcswwqwyaccgyoee->waecsyqmwascmqoa($wksoawcgagcgoask, $gcswwqwyaccgyoee::wucysakokksokumi); } break; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: $ksaameoqigiaoigg = $mqkkuqaimswumeww; break; } } return $ksaameoqigiaoigg; } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\x6d\151\156", $eygsasmqycagyayw->get("\x61\144\x6d\151\x6e\56\x6a\x73"))->okawmmwsiuauwsiu())->ikqyiskqaaymscgw("\141\152\x61\170", Ajax::mucicoimkyqqioke); } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; if ($mkysicwccoeicumg = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk)) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->yucssysgmisaquki($mkysicwccoeicumg); } return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\x6c\x61\x73\x73" => "\x74\x65\x78\164\55\144\145\143\x6f\x72\141\x74\x69\x6f\156\x2d\156\157\x6e\x65", "\141\163\x2d\x62\x75\164\x74\x6f\156" => true, Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::ykecciymmukkwucu, Constants::qgqyauaqwqmqseim => IconBrandInterface::cowoiyummsokycaq, Constants::igssuqwuicwawgam => Constants::smkwuwawwaqyimcq]); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if ($mkysicwccoeicumg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk)) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x63\x6c\x61\163\163"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\141\x73\x2d\x62\165\164\x74\x6f\156")) { $oiegiwogmwmawkeo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::waguuiqqgsysuukq); $qoiwmokisgikggia = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\40\142\x74\x6e\40\x62\164\x6e\55{$qoiwmokisgikggia}\40\x62\x74\156\55{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qgqyauaqwqmqseim); if ($wkaqekwwgqsqwcoi) { $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\141\163\x73" => "\x69\143\157\156\55\x77\x68\151\164\145\40\x69\143\x6f\x6e\x2d{$oiegiwogmwmawkeo}"], [Constants::kicoscymgmgqeqgy => true]); } } $cmwygeyygwqaemaq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::TEXT); if (!$cmwygeyygwqaemaq) { $cmwygeyygwqaemaq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::wumiomcykccwmgei, __("\120\115\120\x52\40\x50\x6c\165\x67\x69\x6e", PR__MDL__COMPONENT_MANAGER)); } $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\143\x6c\x61\163\163" => $iyiskikeoeeysmiw ? "\160\x6c\55\x32" : '']); $siquossayskcwkea = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\x63\154\141\x73\163" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($ewgwqamkygiqaawc, $siquossayskcwkea); } return $iwywmkygwewiamwm; } public function kqwomkwisamggaww($iwamiguusayooguq, $wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return sprintf(__("\x59\x6f\x75\x20\x63\141\x6e\40\x67\145\164\40\x68\x65\154\160\40\146\162\157\155\40\x74\150\145\40\45\163\40\164\x6f\x20\151\156\x73\x74\141\x6c\x6c\40\x74\x68\x65\40\x25\163\x2e", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($quisksguegkuygus), Setting::symcgieuakksimmu()->aqsugsmskceikaee($wksoawcgagcgoask)); } }
