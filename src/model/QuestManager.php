<?php
/** classe permettant de créer une connexion à mysql et de requêter une table
 *  devra contenir les mécanismes de connexion et de requêtage.
 */
require_once 'connect.php';
require_once 'Quest.php';


class QuestManager
{
    private $_db;
    public function __construct($db)
    {
        $this->setDb($db);
    }
    public function getList()
    {
        $quest = [];

        $q = $this->_db->query('SELECT * FROM quest');

        while ($data = $q->fetch(PDO::FETCH_OBJ))
        {

            $quest[] = new Quest((int)$data->score, $data->name, $data->course, $data->id);

        }

        return $quest;
    }


    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }

}