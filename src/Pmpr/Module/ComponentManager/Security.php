<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800fba6192ae             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Module\Security\AbstractSecurity; class Security extends AbstractSecurity { const waecoacwkiccwsyq = 'check_serial_recaptcha'; public function ikcgmcycisiccyuc() { $this->setting = Setting::symcgieuakksimmu(); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('component_manager_check_serial_validation', [$this, 'cggowicaawamqiig'], 10, 2)->aqaqisyssqeomwom('component_manager_install_request_check_serial_fields', [$this, 'uaiocikgayqqsqei']); parent::kgquecmsgcouyaya(); } public function iucqycygmekqcggo() : array { return [$this->wcwmusaouiqaqeww(self::waecoacwkiccwsyq)->gswweykyogmsyawy(__('Check Setup Serial', PR__MDL__CONTACT))->gucwmccyimoagwcm(__('Enable reCAPTCHA for check setup serial (first step of request multistep).', PR__MDL__OPTIMIZATION_MANAGER))]; } public function uaiocikgayqqsqei($ikgwqyuyckaewsow) { if (is_array($ikgwqyuyckaewsow) && $this->giiuwsmyumqwwiyq(self::waecoacwkiccwsyq)) { $aiowsaccomcoikus = $this->gusaciukmokcqeik(); if ($aiowsaccomcoikus) { $aiowsaccomcoikus->jyumyyugiwwiqomk(10)->kakecegieeqyyayu()->qigsyyqgewgskemg('my-4 d-flex justify-content-center'); $ikgwqyuyckaewsow[] = $aiowsaccomcoikus; } } return $ikgwqyuyckaewsow; } public function cggowicaawamqiig($sogksuscggsicmac, $icwicymcioeyeyek = []) { if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac) && $this->ockgcoyewecmsqag() && $this->giiuwsmyumqwwiyq(self::waecoacwkiccwsyq)) { $sogksuscggsicmac = $this->akquumwmywuqyeck($icwicymcioeyeyek); } return $sogksuscggsicmac; } }
