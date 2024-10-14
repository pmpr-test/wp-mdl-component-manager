<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d97f23fcc2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\PushUpdate; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Process\Queue; class Process extends Queue { const oyouaagycauaqgkc = "\143\x6f\x6d\x70\x6f\x6e\x65\x6e\x74\x5f\x6d\x61\156\x61\147\x65\x72\x5f\152\157\x62\137\160\x75\163\150\x5f\165\x70\x64\x61\164\x65"; public function eamuuiioigiouimg($wksoawcgagcgoask, $wqogggcaamgeiwew) : int { $ksaameoqigiaoigg = 0; if (!$this->yyuksmqogammigqm($wksoawcgagcgoask)) { $this->ksicwcssyugsigka(time(), self::oyouaagycauaqgkc, [Constants::ocwsuwyiiasigqaa => $wksoawcgagcgoask, Constants::oyaoekcogwkcekcc => $wqogggcaamgeiwew]); } return $ksaameoqigiaoigg; } public function yyuksmqogammigqm($wksoawcgagcgoask) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::oyouaagycauaqgkc, Constants::okeuagwgwkmiokac => [Constants::ocwsuwyiiasigqaa => $wksoawcgagcgoask]]); } }
