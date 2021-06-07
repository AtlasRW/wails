<?

abstract class DAO implements CRUDInterface, RepositoryInterface {

    protected $db;

    protected function __construct() {
        $this->db = new PDO();
    }

json_decode(file_get_contents("css-color-names.json"), true);

}