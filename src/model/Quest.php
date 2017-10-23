<?php
/** classe permettant de gérer les données de la table Quest (appelée entité)
 * contiendra une classe avec des attribus associés aux champs de la table,
 * ainsi que les méthodes (getters et setters) permettant d'accéder et de modifier leurs valeurs
 */
class Quest
{
    public $_score;
    public $_name;
    public $_course;
    public $_id;



    public function __construct($score, $name, $course, $id)
    {
        $this->setScore($score);
        $this->setName($name);
        $this->setCourse($course);
        $this->setId($id);

    }
//setter
    public function setScore($score) {
        $this->_score = $score;
    }

    public function setName($name) {
        $this->_name = $name;
    }

    public function setCourse($course) {
        $this->_course = $course;
    }
    public function setId($id) {
        $this->_id = $id;
    }

//getter
/*
    public function getScore()
    {
        return $this->_score;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function getCourse()
    {
        return $this->_course;
    }
*/

}
