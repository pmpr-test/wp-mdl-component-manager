<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675f1d1141a85             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\PushUpdate; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Process\Queue; class Process extends Queue { const oyouaagycauaqgkc = "\143\x6f\x6d\x70\157\156\145\156\164\x5f\x6d\141\x6e\x61\x67\x65\162\x5f\152\x6f\142\x5f\x70\x75\163\x68\x5f\x75\x70\x64\141\x74\145"; public function eamuuiioigiouimg($wksoawcgagcgoask, $wqogggcaamgeiwew) : int { $ksaameoqigiaoigg = 0; if (!$this->yyuksmqogammigqm($wksoawcgagcgoask)) { $this->ksicwcssyugsigka(time(), self::oyouaagycauaqgkc, [Constants::ocwsuwyiiasigqaa => $wksoawcgagcgoask, Constants::oyaoekcogwkcekcc => $wqogggcaamgeiwew]); } return $ksaameoqigiaoigg; } public function yyuksmqogammigqm($wksoawcgagcgoask) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::oyouaagycauaqgkc, Constants::okeuagwgwkmiokac => [Constants::ocwsuwyiiasigqaa => $wksoawcgagcgoask]]); } }
