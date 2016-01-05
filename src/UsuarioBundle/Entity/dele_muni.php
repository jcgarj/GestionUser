<?php

namespace UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * dele_muni
 */
class dele_muni
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $delemuni;


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
     * Set delemuni
     *
     * @param string $delemuni
     * @return dele_muni
     */
    public function setDelemuni($delemuni)
    {
        $this->delemuni = $delemuni;

        return $this;
    }

    /**
     * Get delemuni
     *
     * @return string 
     */
    public function getDelemuni()
    {
        return $this->delemuni;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Usuario;

    /**
     * @var \UsuarioBundle\Entity\pais
     */
    private $pais;

    /**
     * @var \UsuarioBundle\Entity\estado
     */
    private $estado;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add Usuario
     *
     * @param \UsuarioBundle\Entity\Usuario $usuario
     * @return dele_muni
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
     * @return dele_muni
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

    /**
     * Set estado
     *
     * @param \UsuarioBundle\Entity\estado $estado
     * @return dele_muni
     */
    public function setEstado(\UsuarioBundle\Entity\estado $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \UsuarioBundle\Entity\estado 
     */
    public function getEstado()
    {
        return $this->estado;
    }
    public function __toString()
    {
        return $this->delemuni;
    }
}
