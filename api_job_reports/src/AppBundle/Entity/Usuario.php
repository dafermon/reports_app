<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//DFM: Este permiter usarse en security
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario implements UserInterface, \Serializable
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="apellido_materno", type="string", length=32, nullable=true)
     */
    private $apellidoMaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_paterno", type="string", length=32, nullable=false)
     */
    private $apellidoPaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=256, nullable=false)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_primero", type="string", length=32, nullable=false)
     */
    private $nombrePrimero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_segundo", type="string", length=32, nullable=true)
     */
    private $nombreSegundo;

    /**
     * @var string
     *
     * @ORM\Column(name="id_usuario", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;



    /**
     * Set apellidoMaterno.
     *
     * @param string|null $apellidoMaterno
     *
     * @return Usuario
     */
    public function setApellidoMaterno($apellidoMaterno = null)
    {
        $this->apellidoMaterno = $apellidoMaterno;

        return $this;
    }

    /**
     * Get apellidoMaterno.
     *
     * @return string|null
     */
    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set apellidoPaterno.
     *
     * @param string $apellidoPaterno
     *
     * @return Usuario
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellidoPaterno = $apellidoPaterno;

        return $this;
    }

    /**
     * Get apellidoPaterno.
     *
     * @return string
     */
    public function getApellidoPaterno()
    {
        return $this->apellidoPaterno;
    }

    /**
     * Set clave.
     *
     * @param string $clave
     *
     * @return Usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave.
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set nombrePrimero.
     *
     * @param string $nombrePrimero
     *
     * @return Usuario
     */
    public function setNombrePrimero($nombrePrimero)
    {
        $this->nombrePrimero = $nombrePrimero;

        return $this;
    }

    /**
     * Get nombrePrimero.
     *
     * @return string
     */
    public function getNombrePrimero()
    {
        return $this->nombrePrimero;
    }

    /**
     * Set nombreSegundo.
     *
     * @param string|null $nombreSegundo
     *
     * @return Usuario
     */
    public function setNombreSegundo($nombreSegundo = null)
    {
        $this->nombreSegundo = $nombreSegundo;

        return $this;
    }

    /**
     * Get nombreSegundo.
     *
     * @return string|null
     */
    public function getNombreSegundo()
    {
        return $this->nombreSegundo;
    }

    /**
     * Get idUsuario.
     *
     * @return string
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }


    /**
     * IMPLEMENTACION USERINTERFACE
     */
    public function getUsername()
    {
        return $this->nombrePrimero;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->clave;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }
    /**
     * IMPLEMENTACION SERIALIZABLE
     */
    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->idUsuario,
            $this->nombrePrimero,
            $this->nombreSegundo,
            $this->apellidoPaterno,
            $this->apellidoMaterno,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->idUsuario,
            $this->nombrePrimero,
            $this->nombreSegundo,
            $this->apellidoPaterno,
            $this->apellidoMaterno,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

}
