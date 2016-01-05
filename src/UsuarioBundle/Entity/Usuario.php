<?php

namespace UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $appat;

    /**
     * @var string
     */
    private $apmat;

    /**
     * @var string
     */
    private $correo;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var string
     */
    private $razonsocial;

    /**
     * @var string
     */
    private $rfc;

    /**
     * @var string
     */
    private $rtributario;

    /**
     * @var string
     */
    private $calle;

    /**
     * @var integer
     */
    private $noext;

    /**
     * @var integer
     */
    private $noint;

    /**
     * @var string
     */
    private $colonia;

    /**
     * @var string
     */
    private $cpostal;

    /**
     * @var string
     */
    private $localidad;

    /**
     * @var string
     */
    private $telefono;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set appat
     *
     * @param string $appat
     * @return Usuario
     */
    public function setAppat($appat)
    {
        $this->appat = $appat;

        return $this;
    }

    /**
     * Get appat
     *
     * @return string 
     */
    public function getAppat()
    {
        return $this->appat;
    }

    /**
     * Set apmat
     *
     * @param string $apmat
     * @return Usuario
     */
    public function setApmat($apmat)
    {
        $this->apmat = $apmat;

        return $this;
    }

    /**
     * Get apmat
     *
     * @return string 
     */
    public function getApmat()
    {
        return $this->apmat;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Usuario
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set razonsocial
     *
     * @param string $razonsocial
     * @return Usuario
     */
    public function setRazonsocial($razonsocial)
    {
        $this->razonsocial = $razonsocial;

        return $this;
    }

    /**
     * Get razonsocial
     *
     * @return string 
     */
    public function getRazonsocial()
    {
        return $this->razonsocial;
    }

    /**
     * Set rfc
     *
     * @param string $rfc
     * @return Usuario
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get rfc
     *
     * @return string 
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set rtributario
     *
     * @param string $rtributario
     * @return Usuario
     */
    public function setRtributario($rtributario)
    {
        $this->rtributario = $rtributario;

        return $this;
    }

    /**
     * Get rtributario
     *
     * @return string 
     */
    public function getRtributario()
    {
        return $this->rtributario;
    }

    /**
     * Set calle
     *
     * @param string $calle
     * @return Usuario
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set noext
     *
     * @param integer $noext
     * @return Usuario
     */
    public function setNoext($noext)
    {
        $this->noext = $noext;

        return $this;
    }

    /**
     * Get noext
     *
     * @return integer 
     */
    public function getNoext()
    {
        return $this->noext;
    }

    /**
     * Set noint
     *
     * @param integer $noint
     * @return Usuario
     */
    public function setNoint($noint)
    {
        $this->noint = $noint;

        return $this;
    }

    /**
     * Get noint
     *
     * @return integer 
     */
    public function getNoint()
    {
        return $this->noint;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     * @return Usuario
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string 
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set cpostal
     *
     * @param string $cpostal
     * @return Usuario
     */
    public function setCpostal($cpostal)
    {
        $this->cpostal = $cpostal;

        return $this;
    }

    /**
     * Get cpostal
     *
     * @return string 
     */
    public function getCpostal()
    {
        return $this->cpostal;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return Usuario
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    /**
     * @var \UsuarioBundle\Entity\pais
     */
    private $pais;

    /**
     * @var \UsuarioBundle\Entity\estado
     */
    private $estado;

    /**
     * @var \UsuarioBundle\Entity\dele_muni
     */
    private $dele_muni;


    /**
     * Set pais
     *
     * @param \UsuarioBundle\Entity\pais $pais
     * @return Usuario
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
     * @return Usuario
     */
    public function setEstado(\UsuarioBundle\Entity\estado $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \UsuarioBundle\estado 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set dele_muni
     *
     * @param \UsuarioBundle\Entity\dele_muni $deleMuni
     * @return Usuario
     */
    public function setDeleMuni(\UsuarioBundle\Entity\dele_muni $deleMuni = null)
    {
        $this->dele_muni = $deleMuni;

        return $this;
    }

    /**
     * Get dele_muni
     *
     * @return \UsuarioBundle\Entity\dele_muni 
     */
    public function getDeleMuni()
    {
        return $this->dele_muni;
    }
    
}
