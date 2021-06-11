<?

namespace Wails\Core;

final class Error
{

    public static function status(int $status)
    {

        Utils::log(match ($status) {
            200 => "OK",
            404 => "STATUS ERROR : 404 Content Not Found"
        });
        exit();

    }

    public static function syntax(string $file)
    {

        Utils::log("SYNTAX ERROR : ${file}");
        exit();

    }

    public static function method(string $class, string $method, string $http = 'GET')
    {

        Utils::log("METHOD ERROR : Method \"${http}:${method}\" of Class \"${class}\" doesn't exist");
        exit();

    }

    public static function http(string $method, string $http = 'GET')
    {

        Utils::log("HTTP ERROR : Method \"${method}\" doesn't exist for HTTP request \"${http}\"");
        exit();

    }

}