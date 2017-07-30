<?php
/**
 * Created by PhpStorm.
 * User: NIKIT
 * Date: 29.07.2017
 * Time: 16:41
 */

namespace testtask\core\domain;

/**
 * Class Task
 * Задачи состоят из:
 * имени пользователя;
 * е-mail;
 * текста задачи;
 * картинки;
 * @package testtask\core\domain
 */
class Task
{
    private $id;
    /**
     * @var string имя пользователя
     */
    private $username;
    /**
     * @var string е-mail пользователя
     */
    private $email;
    /**
     * @var string  текст задачи
     */
    private $text;
    /**
     * @var object изображение задачи
     */
    private $image;
    /**
     * @var object изображение задачи
     */
    private $isDone;

    /**
     * Task constructor.
     * @param $id
     * @param string $username
     * @param string $email
     * @param string $text
     * @param object $image
     * @param $isDone
     */
    public function __construct($id,$username, $email, $text, $image,$isDone)
    {
        $this->isDone = $isDone;
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->text = $text;
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return object
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param object $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
    /**
     * @return object
     */
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * @param object $isDone
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;
    }

    /**
     * @return string
     */
    public static function getUsernameDBName()
    {
        return "username";
    }
    /**
     * @return string
     */
    public static function getEmailDBName()
    {
        return "email";
    }
    /**
     * @return string
     */
    public static function getTextDBName()
    {
        return "text";
    }
    /**
     * @return string
     */
    public static function getImageDBName()
    {
        return "image";
    }
    /**
     * @return string
     */
    public static function getTaskDBName()
    {
        return "task";
    }
    public static function getIdDBName()
    {
        return "id";
    }
    public static function getIsDoneDBName()
    {
        return "is_done";
    }
}