<?

namespace Wails\Core;
use Wails\Core\Interfaces\CRUDInterface;
use Wails\Core\Interfaces\RepositoryInterface;
use PDO;

abstract class DAO implements CRUDInterface, RepositoryInterface
{

    protected $pdo;

    public function __construct()
    {

        $db = json_decode(file_get_contents(__DIR__."/db.json"), true);
        $driver = $db['driver'];
        $name = $db['name'];
        $host = $db['host'];
        $port = $db['port'];
        $user = $db['user'];
        $pass = $db['pass'];

        $this->pdo = new PDO("${driver}:dbname=${name};host=${host}:${port}", "${user}", "${pass}");

    }

    public function create(array $args) : object {}

    public function retrieve(int $id) : object {}

    public function update(int $id) : bool {}

    public function delete(int $id) : bool {}

    public function getAll() : array {}

    public function getAllBy(array $args) : array {}

}