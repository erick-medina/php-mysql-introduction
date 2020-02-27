<?php


class User extends Connection // to connect with the database via class Connection
{
    private $firstName;
    private $lastName;
    private $username;
    private $password;
    private $confirmPassword;
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
    public function __construct($firstName, $lastName, $username, $password, $confirmPassword, $linkedin, $github, $email, $language, $avatar, $video, $quote, $quoteAuthor)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
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
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getUsername() : string
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }

    /**
     * @return mixed
     */
    public function getLinkedin() : string
    {
        return $this->linkedin;
    }

    /**
     * @return mixed
     */
    public function getGithub() : string
    {
        return $this->github;
    }

    /**
     * @return mixed
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getLanguage() : string
    {
        return $this->language;
    }

    /**
     * @return mixed
     */
    public function getAvatar() : string
    {
        return $this->avatar;
    }

    /**
     * @return mixed
     */
    public function getVideo() : string
    {
        return $this->video;
    }

    /**
     * @return mixed
     */
    public function getQuote() : string
    {
        return $this->quote;
    }

    /**
     * @return mixed
     */
    public function getQuoteAuthor() : string
    {
        return $this->quoteAuthor;
    }

}