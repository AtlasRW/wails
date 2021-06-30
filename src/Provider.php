<?

namespace Wails\Core;
use League\OAuth2\Client\Provider\GenericProvider;

final class Provider
{

    private static function new(string $provider)
    {

        return new GenericProvider(Config::get('providers', true)[$provider]);

    }

    public static function url(string $provider)
    {

        return self::new($provider)->getAuthorizationUrl();

    }

    public static function access(string $provider, mixed $type, array $format)
    {

        return self::new($provider)->getAccessToken($type, $format);

    }

}