<?php

namespace UsuarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('appat')
            ->add('apmat')
            ->add('correo')
            ->add('password')
            ->add('password', 'repeated', array(
                    'type' => 'password',
                    'invalid_message' => 'Los paswords no coinciden.',
                    'options' => array('attr' => array('class' => 'input-xlarge','minlength'=>8)),
                    'required' => true,
                    'first_options'  => array('label' => 'Password'),
                    'second_options' => array('label' => 'Repite password')))
            ->add('razonsocial')
            ->add('rfc')
            ->add('rtributario')
            ->add('calle')
            ->add('noext')
            ->add('noint')
            ->add('colonia')
            ->add('cpostal')
            ->add('localidad')
            ->add('pais','entity',  array(
                'class' => 'UsuarioBundle:pais',
                'property' => 'pais'))
            ->add('estado','entity',  array(
                'class' => 'UsuarioBundle:estado',
                'property' => 'Estado'))
            ->add('delemuni','entity',  array(
                'class' => 'UsuarioBundle:dele_muni',
                'property' => 'delemuni'))
            ->add('localidad')
            ->add('telefono')

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UsuarioBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'usuariobundle_usuario';
    }
}
