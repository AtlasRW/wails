<?

namespace Wails\Entities;
use Wails\Core\DAO;
use PDO;

class User extends DAO
{

    public function getAll() : array
    {

        return $this->pdo->query("SELECT id, nickname, firstname, lastname, job FROM user")->fetchAll(PDO::FETCH_ASSOC);
        
    }

}