<?php

namespace UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pais
 */
class pais
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $pais;


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
     * Set pais
     *
     * @param string $pais
     * @return pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $estado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dele_muni;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Usuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estado = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dele_muni = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add estado
     *
     * @param \UsuarioBundle\Entity\estado $estado
     * @return pais
     */
    public function addEstado(\UsuarioBundle\Entity\estado $estado)
    {
        $this->estado[] = $estado;

        return $this;
    }

    /**
     * Remove estado
     *
     * @param \UsuarioBundle\Entity\estado $estado
     */
    public function removeEstado(\UsuarioBundle\Entity\estado $estado)
    {
        $this->estado->removeElement($estado);
    }

    /**
     * Get estado
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Add dele_muni
     *
     * @param \UsuarioBundle\Entity\dele_muni $deleMuni
     * @return pais
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
     * @return pais
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
    public function __toString()
    {
        return $this->pais;
    }
}
