<?

namespace Wails\DB;
use Wails\Core\DAO;
use PDO;

class User extends DAO
{

    public function getAll() : array
    {

        return $this->pdo->query("SELECT * FROM user LIMIT 50")->fetchAll(PDO::FETCH_ASSOC);
        
    }

}