<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * noticias
 */
class noticias
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $contenido;

    /**
     * @var string
     */
    private $imgDestacada;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return noticias
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     * @return noticias
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set imgDestacada
     *
     * @param string $imgDestacada
     * @return noticias
     */
    public function setImgDestacada($imgDestacada)
    {
        $this->imgDestacada = $imgDestacada;

        return $this;
    }

    /**
     * Get imgDestacada
     *
     * @return string 
     */
    public function getImgDestacada()
    {
        return $this->imgDestacada;
    }
}
