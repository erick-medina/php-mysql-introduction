<?php


class User extends Connection // to connect with the database via class Connection
{
    private $firstName;
    private $lastName;
    private $username;
    private $linkedin;
    private $github;
    private $email;
    private $language;
    private $avatar;
    private $video;
    private $quote;
    private $quoteAuthor;

    /**
     * User constructor.
     * @param $firstName
     * @param $lastName
     * @param $username
     * @param $linkedin
     * @param $github
     * @param $email
     * @param $language
     * @param $avatar
     * @param $video
     * @param $quote
     * @param $quoteAuthor
     */
    public function __construct($firstName, $lastName, $username, $linkedin, $github, $email, $language, $avatar, $video, $quote, $quoteAuthor)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->linkedin = $linkedin;
        $this->github = $github;
        $this->email = $email;
        $this->language = $language;
        $this->avatar = $avatar;
        $this->video = $video;
        $this->quote = $quote;
        $this->quoteAuthor = $quoteAuthor;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * @return mixed
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @return mixed
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @return mixed
     */
    public function getQuoteAuthor()
    {
        return $this->quoteAuthor;
    }



}