<?

require_once 'vendor/autoload.php';
new Wails\Core\Routing();
use Wails\Core\Utils;

// CONTROLLER METHODS | FULL
$any_method = '/^[a-z]+(::|->)[a-z]+$/i';
$dynamic_method = '/^[a-z]+->[a-z]+$/i';
$final_method = '/^[a-z]+::[a-z]+$/i';
// CONTROLLER METHODS | BLOCKS
$method_start = '/^[a-z]+/i';
$method_end = '/[a-z]+$/i';
// ROUTES | FULL
$full_route = '/^(\/|(\/([a-z0-9-_]+|{[a-z0-9-_]+}))+)(\/)?$/i';
$full_req_uri = '/^(\/|(\/[a-z0-9-_]+)+)(\/)?$/i';
// ROUTE | BLOCKS
$any_block = '/\/([a-z0-9-_]+|{[a-z0-9-_]+})/i';
$static_block = '/\/[a-z0-9-_]+/i';
$dynamic_block = '/\/{[a-z0-9-_]+}/i';
// HTTP REQUESTS
$http = '/^(GET|HEAD|POST|PUT|PATCH|DELETE)$/i';

// preg_filter();
// preg_grep();
// preg_match();
// preg_quote();
// preg_replace();
// preg_replace_callback();
// preg_replace_callback_array();
// preg_split();