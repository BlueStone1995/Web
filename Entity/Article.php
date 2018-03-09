<?php
/**
 * Created by PhpStorm.
 * User: Mbape
 * Date: 24/02/2018
 * Time: 15:39
 */

class Article
{
    private $idarticle;
    private $image;
    private $titre;
    private $corps;

    function __construct($id, $image, $titre, $corps)
    {
        $this->idarticle = $id;
        $this->image = $image;
        $this->titre = $titre;
        $this->corps = $corps;
    }

    /**
     * @return mixed
     */
    public function getIdarticle()
    {
        return $this->idarticle;
    }

    /**
     * @param mixed $idarticle
     */
    public function setIdarticle($idarticle)
    {
        $this->idarticle = $idarticle;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
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