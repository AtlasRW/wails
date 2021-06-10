<?

namespace Wails\Core;

class Utils
{

    public static function log(mixed $arg, bool $dump = false)
    {

        echo "<pre>"; ($dump) ? var_dump($arg) : print_r($arg); echo "</pre>";

    }

    public static function unserialize(string $path, bool $assoc = false) : mixed
    {

        return json_decode(file_get_contents($path), $assoc);

    }

    public static function serialize(string $filename, mixed $value) : bool
    {

        return file_put_contents($filename, json_encode($value));

    }

    public static function array_check(array $subject) : bool
    {

        return !in_array(false, $subject);

    }

    public static function array_subkeys(array $subject) : array
    {

        return array_map(
            function ($e) { return array_keys($e); },
            array_filter($subject,
                function ($e) { return is_array($e); }
            )
        );

    }

    public static function preg(string $pattern, mixed $subject) : bool
    {

        return match (gettype($subject)) {
            "string" => preg_match($pattern, $subject),
            "array" => Utils::array_check(
                array_map(function($e) use ($pattern) {
                    return Utils::preg($pattern, $e);
                }, $subject)
            ),
            "object" => Utils::array_check(
                array_map(function($e) use ($pattern) {
                    return Utils::preg($pattern, $e);
                }, get_object_vars($subject))
            )
        };

    }

}