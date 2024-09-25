<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43b00a2f67             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\PushUpdate; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Process\Queue; class Process extends Queue { const oyouaagycauaqgkc = "\x63\157\x6d\160\157\x6e\x65\156\x74\137\x6d\141\x6e\141\x67\145\x72\137\x6a\157\142\x5f\x70\165\163\x68\x5f\165\x70\144\x61\164\145"; public function eamuuiioigiouimg($wksoawcgagcgoask, $wqogggcaamgeiwew) : int { $ksaameoqigiaoigg = 0; if ($this->yyuksmqogammigqm($wksoawcgagcgoask)) { goto zayqqeqgcwkekwws; } $this->ksicwcssyugsigka(time(), self::oyouaagycauaqgkc, [Constants::ocwsuwyiiasigqaa => $wksoawcgagcgoask, Constants::oyaoekcogwkcekcc => $wqogggcaamgeiwew]); zayqqeqgcwkekwws: return $ksaameoqigiaoigg; } public function yyuksmqogammigqm($wksoawcgagcgoask) : bool { return $this->exists([self::cmooywkooekaakwk => self::oyouaagycauaqgkc, self::okeuagwgwkmiokac => [self::ocwsuwyiiasigqaa => $wksoawcgagcgoask]]); } }
