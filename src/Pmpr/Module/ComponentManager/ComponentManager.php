<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675f1d1141a85             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Module\ComponentManager\Model\Campaign; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Installation; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Model\Report; use Pmpr\Module\ComponentManager\Model\Request; use Pmpr\Module\ComponentManager\Panel\Panel; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\ComponentManager\REST\REST; class ComponentManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\103\157\155\160\157\156\x65\156\x74\40\115\x61\156\141\147\145\162", PR__MDL__COMPONENT_MANAGER); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\145\x66\157\x72\145\x5f\145\156\161\165\145\x75\145\137\142\141\143\x6b\x65\156\144\x5f\x61\x73\x73\x65\164\x73", [$this, "\x65\156\x71\165\x65\x75\145"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\154\157\x67\x69\x6e\137\x72\x65\144\x69\x72\x65\x63\x74", "\x75\162\154\144\x65\x63\x6f\144\145"); $this->aqaqisyssqeomwom("\160\154\165\x67\151\x6e\x5f\144\x6f\167\x6e\154\157\141\x64\x5f\x62\x75\164\x74\x6f\x6e", [$this, "\145\163\x65\161\x6f\x6f\x75\x79\167\151\x65\x67\x6d\x6f\x75\x61"], 10, 2)->aqaqisyssqeomwom("\x67\x65\164\x5f\143\157\x6d\x70\x6f\156\x65\x6e\x74\163\137\142\171\137\x68\x6f\163\164", [$this, "\141\143\x71\x75\x63\x6b\x71\x65\x75\x69\x65\147\143\161\155\x73"], 10, 2)->aqaqisyssqeomwom("\x67\145\x74\137\143\157\155\x70\x6f\156\x65\x6e\164\137\x69\x6e\x73\x74\x61\x6c\154\x61\x74\151\x6f\x6e\x5f\147\x75\x69\x64\145", [$this, "\x6b\161\167\x6f\155\153\167\151\x73\x61\155\x67\x67\x61\167\167"], 10, 2)->aqaqisyssqeomwom("\147\145\x74\137\x63\x6f\x6d\160\157\x6e\x65\156\164\137\151\156\163\x74\x61\154\154\x61\164\x69\x6f\156\x5f\x67\x75\x69\x64\x65\137\155\x6f\144\x61\x6c", [$this, "\141\x71\x73\x75\147\x73\155\163\x6b\x63\145\151\x6b\141\145\x65"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::ieicsweaowmycywa)) { Ajax::symcgieuakksimmu(); } REST::symcgieuakksimmu(); PushUpdate::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x64\x6f\155\141\x69\x6e\x2d\155\x61\x6e\x61\147\145\x72") && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { Component::symcgieuakksimmu(); Purchase::symcgieuakksimmu(); Report::symcgieuakksimmu(); Campaign::symcgieuakksimmu(); Installation::symcgieuakksimmu(); Request::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\160\141\156\x65\154")) { Panel::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\163\145\x63\165\x72\151\x74\x79")) { Security::symcgieuakksimmu(); } } public function acquckqeuiegcqms(array $mqkkuqaimswumeww, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::aqikuweekkucgqoy, Constants::ckiaowgkqoewoseo => '', Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $ksaameoqigiaoigg = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($ywmkwiwkosakssii[Constants::ckiaowgkqoewoseo], $uamcoiueqaamsqma, $ywmkwiwkosakssii[Constants::squoamkioomemiyi])) { $mqkkuqaimswumeww = $gcswwqwyaccgyoee->iekyeyicoyyawomk()->iiqauwkoiguyeawu($siykeiywomwwuoiw); switch ($ywmkwiwkosakssii[Constants::aisguagukaewucii]) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $ksaameoqigiaoigg[$gcswwqwyaccgyoee->mwyqswsaeeewsosm($wksoawcgagcgoask)] = $gcswwqwyaccgyoee->waecsyqmwascmqoa($wksoawcgagcgoask, $gcswwqwyaccgyoee::wucysakokksokumi); } break; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: $ksaameoqigiaoigg = $mqkkuqaimswumeww; break; } } return $ksaameoqigiaoigg; } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\141\x64\x6d\x69\156", "\141\x64\x6d\x69\156\56\x6a\x73")->okawmmwsiuauwsiu())->wwmusmkkcwsiciou($this, "\141\152\141\170", Ajax::mucicoimkyqqioke); } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; if ($mkysicwccoeicumg = $this->weysguygiseoukqw(Setting::iwseqweooieakqwk)) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->yucssysgmisaquki($mkysicwccoeicumg); } return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\x6c\141\x73\x73" => "\164\145\170\164\x2d\x64\145\143\157\162\141\x74\151\157\x6e\55\x6e\157\156\145", "\141\163\x2d\142\x75\164\x74\x6f\156" => true, Constants::TEXT => '', Constants::waguuiqqgsysuukq => Constants::ykecciymmukkwucu, Constants::qgqyauaqwqmqseim => IconBrandInterface::cowoiyummsokycaq, Constants::igssuqwuicwawgam => Constants::smkwuwawwaqyimcq]); if ($mkysicwccoeicumg = $this->weysguygiseoukqw(Setting::iwseqweooieakqwk)) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\x6c\141\x73\163"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x61\163\55\x62\165\164\x74\157\x6e")) { $oiegiwogmwmawkeo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::waguuiqqgsysuukq); $qoiwmokisgikggia = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\x20\142\x74\x6e\x20\142\164\156\x2d{$qoiwmokisgikggia}\x20\x62\164\156\55{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qgqyauaqwqmqseim); if ($wkaqekwwgqsqwcoi) { $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\141\x73\x73" => "\151\143\157\x6e\55\167\x68\x69\x74\x65\40\151\143\157\156\x2d{$oiegiwogmwmawkeo}"], [Constants::kicoscymgmgqeqgy => true]); } } $cmwygeyygwqaemaq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::TEXT); if (!$cmwygeyygwqaemaq) { $cmwygeyygwqaemaq = $this->weysguygiseoukqw(Setting::wumiomcykccwmgei, __("\120\x4d\120\x52\x20\120\x6c\165\147\151\x6e", PR__MDL__COMPONENT_MANAGER)); } $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\143\x6c\x61\163\163" => $iyiskikeoeeysmiw ? "\160\154\x2d\x32" : '']); $siquossayskcwkea = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\143\x6c\141\x73\x73" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($ewgwqamkygiqaawc, $siquossayskcwkea); } return $iwywmkygwewiamwm; } public function kqwomkwisamggaww($iwamiguusayooguq, $wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return sprintf(__("\131\157\x75\40\143\141\x6e\40\147\x65\164\x20\150\x65\x6c\x70\40\x66\x72\x6f\x6d\x20\x74\150\145\x20\x25\x73\x20\164\x6f\40\x69\x6e\x73\164\141\154\x6c\40\164\x68\145\x20\x25\163\56", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($quisksguegkuygus), $this->kmuweyayaqoeqiyw()->aqsugsmskceikaee($wksoawcgagcgoask)); } }
