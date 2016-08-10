<?php
/**
 * Created by PhpStorm.
 */
//model class to work with the controllers
class config
{

    public static function openDB()
    {
        // ** MySQL settings - You can get this info from your web host ** //
        /** The name of the database for WordPress */
        define('DB_NAME', 'development');

        /** MySQL database username */
        define('DB_USER', 'hari');

        /** MySQL database password */
        define('DB_PASSWORD', '');

        /** MySQL hostname */
        define('DB_HOST', 'localhost');

        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        } else {
            return $con;
        }
    }

    //public function to display all users in the database

    public function showall()
    {
        $db = config::openDB();
        $employees = array();
        //the query is prepared
        $query = "SELECT * FROM users";
        $results = mysqli_query($db, $query);
        while ($row = mysqli_fetch_assoc($results)) :
            $employees[] = $row;
        endwhile;
        return $employees;
    }

    //public function to select users based on their id number in the database

    public function selectById($id)
    {

    }

    //public function to update users based on their id number in the database
    public function updateById($id)
    {

    }

    //public function to delete users based on their id number in the database
    public function deleteById($id)
    {

    }
}