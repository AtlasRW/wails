<?

namespace Wails\Core;

abstract class Controller
{

    public static function error(string $error_message) { echo $error_message; exit(); }

}