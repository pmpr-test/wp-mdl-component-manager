<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46b952390             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\ComponentManager\Model\Purchase as PurchaseModel; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\143\x6f\x6d\x70\157\156\x65\156\x74\x2d\155\141\x6e\141\147\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\164\x2d\160\165\162\143\x68\141\163\145\163", [Constants::okeuagwgwkmiokac => [], Constants::oaggieeykyaoiiyw => self::uigoseacoukemwqc, Constants::wwgusigoaksqmwsm => [$this, "\153\x73\x79\153\165\x61\171\153\171\171\x75\161\147\163\167\x67"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if ($wqogggcaamgeiwew) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); } $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, PurchaseModel::symcgieuakksimmu(), [$eqwoegegiamegqsm->megqywqeuquawkim(PurchaseModel::qkmqmaeuyokqgemg, $wqogggcaamgeiwew)]); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
