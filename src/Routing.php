<?

namespace Wails\Core;
use ReflectionMethod;

class Routing
{

    private array $config;
    private string $http;
    private string $uri;

    public function __construct()
    {

        $this->config = Config::get("routing", true);
        $this->http = $_SERVER['REQUEST_METHOD']; $this->uri = $_SERVER['REQUEST_URI'];
        ($this->check()) ? $this->execute() : Controller::error('Syntax Error : config.json');

    }

    private function check()
    {

        return Utils::array_check([
            Utils::preg('/^[a-z]+::[a-z]+$/i', $this->config),
            Utils::preg('/^(\/|(\/([a-z0-9-_]+|{[a-z0-9-_]+}))+)(\/)?$/i', array_keys($this->config)),
            Utils::preg('/^(GET|HEAD|POST|PUT|PATCH|DELETE)$/i', Utils::array_subkeys($this->config))
        ]);

    }

    private function execute()
    {

        list($this->class, $this->method) = explode('::', 'Test::static');
        Utils::log($this->class);
        Utils::log($this->method);
        // Utils::log(method_exists("\\Wails\\Controllers\\{$this->class}", $this->method));
        // $reflector = new ReflectionMethod("\\Wails\\Controllers\\{$this->class}", $this->method);
        // Utils::log($reflector->isStatic());
        // Utils::log($reflector->invoke(null));    

    }

}