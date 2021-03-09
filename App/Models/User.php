<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version >= 7.0
 */
class User extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function all()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT id, name FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Store new user
     *
     * @return object
     */
    public static function store($params){}

    /**
     * Update new user
     *
     * @return object
     */
    public static function update($id,$params){}

    /**
     * Delete user
     *
     * @return boolean
     */
    public static function delete($id){}

    /**
     * Find user
     *
     * @return object
     */
    public static function find($id){}

    /**
     * Check if user exists
     *
     * @return object
     */
    public static function exists($id){}

    /**
     * Authenticate user
     *
     * @return boolean
     */
    public static function auth($login, $password){}



}
