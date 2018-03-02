<?php
/**
 * Created by PhpStorm.
 * User: Mbape
 * Date: 24/02/2018
 * Time: 15:39
 */

class Article
{
    private $imageURL;
    private $titre;
    private $corps;

    function __construct($image, $titre, $corps)
    {
        $this->imageURL = $image;
        $this->titre = $titre;
        $this->corps = $corps;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->imageURL;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->imageURL = $image;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getCorps()
    {
        return $this->corps;
    }

    /**
     * @param mixed $corps
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;
    }

}