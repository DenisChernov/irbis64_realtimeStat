<?php

class bdOper {

    var $conn;
    var $filials = array();
    var $filStruct = array();
    var $currentFilial;
    var $count = array();

    function bdOper()
    {


    }

    function connect()
    {
        $connstr = "host=192.168.9.250 port=5433 dbname=rdr user=irbis64_rdr password=oa";
        $conn = pg_connect($connstr)
                    or die("Error connect". pg_last_error($this->conn));

    }

    function disconnect()
    {
        pg_close($this->conn);
    }

    function getFilials()
    {
        $this->connect();

        unset($this->filials);

        $query = "SELECT * from filials WHERE id < 20;";
        $res = pg_query($query)
                   or die ("Error query". pg_last_error($this->conn));

        while ($row = pg_fetch_array($res, NULL, PGSQL_NUM))
        {
            $this->filials[] = $row[1];
        }

        $this->disconnect();
    }

    function getSubDivision($filialName)
    {
        unset($this->filStruct);
        $id = $this->getFilialID($filialName);

        $this->connect();
        $query = "SELECT name FROM division WHERE uid=". $id. ";";

        $res = pg_query($query)
                    or die ("Error query". pg_last_error($this->conn));

        while ($result = pg_fetch_row($res, NULL, PGSQL_NUM))
        {
            $this->filStruct[] = $result[0];
        }
        $this->disconnect();
    }

    function getFilialID($filialName)
    {
        $this->connect();

        $query = "SELECT id FROM filials WHERE filial='". $filialName. "'";
        $res = pg_query($query)
                    or die ("Error query". pg_last_error($this->conn));

        $id = pg_fetch_result($res, 0, 0);

        $this->disconnect();

        return $id;
    }

    function getCountVisits($date, $filial)
    {
// select COUNT(*) FROM Visits WHERE date='20100206' AND filial_division = 18;

        $query = "select COUNT(*) FROM Visits WHERE date=". $date. " AND filial_division=". $filial. ";";
        $res = pg_query($query)
            or die ("Error query". pg_last_error($this->conn));



    }

    function getRegs($date, $filial)
    {
        unset ($this->count);

        $query = "SELECT registration_v51 FROM registration WHERE registration_v51 LIKE '%". $date. "%' AND registration_v51 LIKE '%". $filial. "%'";
        $res = pg_query($query)
            or die ("Error query". pg_last_error($this->conn));

        while ($result = pg_fetch_row($res, NULL, PGSQL_NUM))
            $this->count[] = $result[0];

    }

    function getReRegs($date, $filial)
    {
        unset ($this->count);

        $query = "SELECT reregistration_v52 FROM reregistration WHERE reregistration_v52 LIKE '%". $date. "%' AND reregistration_v52 LIKE '%". $filial. "%'";
        $res = pg_query($query)
            or die ("Error query". pg_last_error($this->conn));

        while ($result = pg_fetch_row($res, NULL, PGSQL_NUM))
            $this->count[] = $result[0];

    }

    function getCategory($date, $filial, $category)
    {
        $query = "SELECT COUNT(registration_v51) FROM registration
                  LEFT JOIN readers
                  ON readers.uid_v30 = registration.uid_v30
                  WHERE registration_v51 LIKE '%". $date. "%' AND registration_v51 LIKE '%". $filial. "%' AND readers.category_v50 = '". $category. "';";
        $res = pg_query($query)
            or die ("Error query". pg_last_error($this->conn));

        $result_v51 = pg_fetch_row($res, NULL, PGSQL_NUM);

        $query = "SELECT COUNT(reregistration_v52) FROM reregistration
                  LEFT JOIN readers
                  ON readers.uid_v30 = reregistration.uid_v30
                  WHERE reregistration_v52 LIKE '%". $date. "%' AND reregistration_v52 LIKE '%". $filial. "%' AND readers.category_v50 = '". $category. "';";
        $res = pg_query($query)
            or die ("Error query". pg_last_error($this->conn));

        $result_v52 = pg_fetch_row($res, NULL, PGSQL_NUM);

        return $result_v51[0] + $result_v52[0];
    }

    function getEducation($date, $filial, $education)
    {
        $query = "SELECT COUNT(registration_v51) FROM registration
                  LEFT JOIN readers
                  ON readers.uid_v30 = registration.uid_v30
                  WHERE registration_v51 LIKE '%". $date. "%' AND registration_v51 LIKE '%". $filial. "%' AND readers.education_v20 = '". $education. "';";
        $res = pg_query($query)
            or die ("Error query". pg_last_error($this->conn));

        $result_v51 = pg_fetch_row($res, NULL, PGSQL_NUM);

        $query = "SELECT COUNT(reregistration_v52) FROM reregistration
                  LEFT JOIN readers
                  ON readers.uid_v30 = reregistration.uid_v30
                  WHERE reregistration_v52 LIKE '%". $date. "%' AND reregistration_v52 LIKE '%". $filial. "%' AND readers.education_v20 = '". $education. "';";
        $res = pg_query($query)
            or die ("Error query". pg_last_error($this->conn));

        $result_v52 = pg_fetch_row($res, NULL, PGSQL_NUM);

        return $result_v51[0] + $result_v52[0];
    }

    function getDivisionID($division)
    {
        $query = "SELECT id FROM division WHERE name = '". $division. "'";
        $res = pg_query($query)
            or die ("Error query". pg_last_error($this->conn));

        $divID = pg_fetch_row($res, NULL, PGSQL_NUM);
        return $divID[0];
    }

    function getRowFromDiary($filial, $year, $month, $day)
    {
        $idFilial = $this->getDivisionID($filial);

        $query = "SELECT row_diary FROM stat WHERE uid_filial = ". $idFilial. " AND uid_month = ". $month. " AND uid_year = ". $year. " AND day = ". $day. " AND revision = ".
                    "(SELECT COUNT(revision) FROM stat WHERE uid_filial = ". $idFilial. " AND uid_month = ". $month. " AND uid_year = " . $year. " AND day = ". $day. ")";

        $res = pg_query($query)
            or die ("Error query". pg_last_error($this->conn));

        $result_row = pg_fetch_row($res, NULL, PGSQL_NUM);

        return $result_row[0];
    }
}
