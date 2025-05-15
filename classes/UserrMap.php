<?php

class UserrMap extends BaseMap{
    public function __construct()
    {
        parent::__construct();
    }

    public function auth($login, $password)
    {

        $login = $this->db->quote($login);


        $res = $this->db->query(
            "SELECT userr.user_id, " .
            "CONCAT(userr.lastname,' ', userr.firstname, ' ', userr.patronymic) AS fio, " .
            "userr.pass, role.sys_name, role.name " .
            "FROM userr " .
            "INNER JOIN role ON userr.role_id = role.role_id " .
            "WHERE userr.login = $login AND userr.active = 1"
        );

        $user = $res->fetch(PDO::FETCH_OBJ);

        if ($user && password_verify($password, $user->pass)) {
            return $user;
        }

        return null;
    }
}
