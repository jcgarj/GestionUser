<?php

namespace UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * estado
 */
class estado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $estado;


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
     * Set estado
     *
     * @param string $estado
     * @return estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dele_muni;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Usuario;

    /**
     * @var \UsuarioBundle\Entity\pais
     */
    private $pais;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dele_muni = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add dele_muni
     *
     * @param \UsuarioBundle\Entity\dele_muni $deleMuni
     * @return estado
     */
    public function addDeleMuni(\UsuarioBundle\Entity\dele_muni $deleMuni)
    {
        $this->dele_muni[] = $deleMuni;

        return $this;
    }

    /**
     * Remove dele_muni
     *
     * @param \UsuarioBundle\Entity\dele_muni $deleMuni
     */
    public function removeDeleMuni(\UsuarioBundle\Entity\dele_muni $deleMuni)
    {
        $this->dele_muni->removeElement($deleMuni);
    }

    /**
     * Get dele_muni
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDeleMuni()
    {
        return $this->dele_muni;
    }

    /**
     * Add Usuario
     *
     * @param \UsuarioBundle\Entity\Usuario $usuario
     * @return estado
     */
    public function addUsuario(\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->Usuario[] = $usuario;

        return $this;
    }

    /**
     * Remove Usuario
     *
     * @param \UsuarioBundle\Entity\Usuario $usuario
     */
    public function removeUsuario(\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->Usuario->removeElement($usuario);
    }

    /**
     * Get Usuario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuario()
    {
        return $this->Usuario;
    }

    /**
     * Set pais
     *
     * @param \UsuarioBundle\Entity\pais $pais
     * @return estado
     */
    public function setPais(\UsuarioBundle\Entity\pais $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \UsuarioBundle\Entity\pais 
     */
    public function getPais()
    {
        return $this->pais;
    }
    public function __toString()
    {
        return $this->estado;
    }
}
