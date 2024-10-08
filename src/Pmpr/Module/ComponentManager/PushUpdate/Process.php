<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517593ad7e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\PushUpdate; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Process\Queue; class Process extends Queue { const oyouaagycauaqgkc = "\x63\x6f\155\x70\x6f\x6e\x65\156\x74\x5f\155\x61\156\141\147\145\x72\x5f\x6a\157\x62\x5f\160\x75\163\150\137\x75\x70\144\141\164\145"; public function eamuuiioigiouimg($wksoawcgagcgoask, $wqogggcaamgeiwew) : int { $ksaameoqigiaoigg = 0; if ($this->yyuksmqogammigqm($wksoawcgagcgoask)) { goto ikqeeaysmqgcgawq; } $this->ksicwcssyugsigka(time(), self::oyouaagycauaqgkc, [Constants::ocwsuwyiiasigqaa => $wksoawcgagcgoask, Constants::oyaoekcogwkcekcc => $wqogggcaamgeiwew]); ikqeeaysmqgcgawq: return $ksaameoqigiaoigg; } public function yyuksmqogammigqm($wksoawcgagcgoask) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::oyouaagycauaqgkc, Constants::okeuagwgwkmiokac => [Constants::ocwsuwyiiasigqaa => $wksoawcgagcgoask]]); } }
