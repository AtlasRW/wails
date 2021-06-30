<?

namespace Wails\Controllers;
use Wails\Core\Controller;
use Wails\Core\Cookie;
use Wails\Core\Error;
use Wails\Core\HTTP;
use Wails\Core\Session;
use Wails\Core\View;

final class ExampleController extends Controller
{

    public function welcome()
    {

        View::render('example/welcome', [
            'key' => 'value'
        ], 'WELCOME');

    }

    public function create(array $args) : object { return new \Exception(); }

    public function retrieve(int $id) : object { return new \Exception(); }

    public function update(int $id) : bool { return false; }

    public function delete(int $id) : bool { return false; }

    public function getAll() : array { return []; }

    public function getAllBy(array $args) : array { return []; }

}