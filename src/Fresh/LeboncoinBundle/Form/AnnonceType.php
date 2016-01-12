<?php

namespace Fresh\LeboncoinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
           // ->add('date', 'date', array('label' => 'Date Annonce:'))
            ->add('description')
            ->add('prix')
            ->add('titre')
            ->add('typeannonce')
            ->add('region')
            ->add('dep')
            ->add('logo')
            ->add('url')
            //->add('category_id',new CathegorieType())
            //->add('annonceur', new AnnonceurType())
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fresh\LeboncoinBundle\Entity\Annonce'
        ));
    }
}
